
<?php

class Manage{

	public function __construct($amount, $page){
		
		require('model/PostModel.php');
		$postModel = new PostModel();
		$page_data = $postModel->postList($amount, $page);
		$posts = $page_data['list'];
		require('view/admin/manage.php');
	}
}