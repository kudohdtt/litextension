<?php

class DeletePost{

	public function __construct($id){
		
		echo ("here");
		require('../model/PostModel.php');
		echo ("here");
		$postModel = new PostModel();
		echo ("here");
		$postModel->deletePost($id);

		header('Location: /postManager/admin/note/delete+post+successfull');
}
}