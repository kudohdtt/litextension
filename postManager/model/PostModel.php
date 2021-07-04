<?php

require('Database.php');

class PostModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();	
	}

	public function addPost($title, $description, $image, $status, $create_at)
	{	
		$sql_create_table = "CREATE TABLE posts (
			id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			title varchar(30) NOT NULL,
			description text,
			image varchar(40) NOT NULL,
			status int(3) NOT NULL,
			create_at datetime NOT NULL,
			update_at datetime  
											)";
		$this->db->conn->query($sql_create_table);

		$sql = "INSERT INTO posts (title, description, image, status, create_at)
							VALUES ('$title', '$description', '$image', $status, '$create_at')";
		$this->db->conn->query($sql);
		$error = $this->db->conn->error;
		// echo "database error : " . $error;
		$this->db->closeDatabase();
	}

	public function getPost($id)
	{
		$sql = "SELECT * FROM posts WHERE id = $id";
		$result = $this->db->conn->query($sql);
		$list = array();
		$data = $result->fetch_array();
		$this->db->closeDatabase();
		return $data;
	}
	public function postList($limit, $current_page)
	{
		$pre = NULL;
		$next = NULL;
		if ($limit == 'all'){
			$sql = "SELECT * FROM posts";
			$current_page = 1;
			} else{
				$page = $this->pagination($limit, $current_page);
				$start = $page['start'];
				$pre = $page['pre'];
				$next = $page['next'];
				$sql = "SELECT * FROM posts LIMIT $start, $limit";
			}

		$result = $this->db->conn->query($sql);
		$list = array();
		while($data = $result->fetch_array()) {
			$list[] = $data;
		}
		$this->db->closeDatabase();
		$page_info = array('list'=>$list, 'pre'=>$pre, 'next'=>$next, 'current_page'=>$current_page);
		return $page_info;
	}

	public function editPost($id, $title, $description, $image, $status, $update_at){
		$sql = "SELECT * from posts WHERE id = $id";
		$result = $this->db->conn->query($sql);
		$post = $result->fetch_array();

		if(($post['title']!=$title) or ($post['description']!=$description) or ($post['image']!=$image) or ($post['status']!=$status)){

			if (empty($image)){
				$image = $post['image'];
			}
		$sql = "UPDATE posts SET title='$title', description='$description', image='$image', status=$status, update_at='$update_at' WHERE id=$id";	

		$this->db->conn->query($sql);
		}

		$this->db->closeDatabase();
	}

	public function deletePost($id){
		$sql = "DELETE from posts WHERE id = $id";
		$this->db->conn->query($sql);
		$this->db->closeDatabase();
	}

	public function pagination($limit, $current_page){
		$result = mysqli_query($this->db->conn, 'select count(id) as total from posts');
		$row = mysqli_fetch_assoc($result);
		$total_records = $row['total'];

		$total_page = ceil($total_records / $limit);

		if ($current_page > $total_page){
			$current_page = $total_page;
			}
		else if ($current_page < 1){
			$current_page = 1;
			}

		$start = ($current_page - 1) * $limit;


		if ($total_page == 1){
			$pre = NULL;
			$next =NULL;
		} elseif ($current_page == 1){
			$pre = NULL;
			$next = $current_page +1;
		} elseif ($current_page == $total_page) {
			$pre = $current_page -1;
			$next = NULL;
		} else{
			$pre = $current_page -1;
			$next = $current_page +1;
		}
		$page = array('start'=>$start, 'pre'=>$pre, 'next'=>$next);
		return $page;
	}
}