
<?php

class ShowPost{
	public function __construct($id){
		require('../model/PostModel.php');
		$postModel = new PostModel();
		$post = $postModel->getPost($id);
		require('../view/admin/show-post.php');
	}
}