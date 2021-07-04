<?php

class AddPost{
	public function __construct(){
		require('../model/PostModel.php');
		$postModel = new PostModel();
		$title = $image = $status = NULL;

		if (isset($_POST['addPost'])) {
	
			$title = $_POST['title'];
			$image = $_POST['image'];
			$status = $_POST['status'];
			// if ($_POST['status'] == 'Enable') {
			// 	$status = 1;
			// } else if ($_POST['status'] == 'Disable') {
			// 	$status = 0;
			// }

			$create_at = date("Y-m-d H:s");

			if ($title and $image) {
				$postModel->addPost($title, $_POST['description'], $image, $status, $create_at);
				$alert['success'] = 'Thêm thành công!';
			}
		}
		require('../view/admin/add.php'); 
	}
}