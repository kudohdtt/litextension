
<?php

class EditPost{
	public function __construct($id){
		require('../model/PostModel.php');
		$postModel = new PostModel();

		if(isset($_POST['editPost'])){
			echo("ok");
			$update_at = date("Y-m-d H:s");
			$postModel->editPost($id, $_POST['title'], $_POST['description'], $_POST['image'], $_POST['status'], $update_at);
			header('Location: /postManager/admin/note/update+post+successfull');
		} else {
			$post = $postModel->getPost($id);
			require('../view/admin/edit.php');
		}

	}
}