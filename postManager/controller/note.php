<?php
class Note{
	public function __construct($note){
		$strs = NULL;
		$note = explode("+", $note);
		foreach ($note as $str) {
			$strs = $strs." ".$str;
		}
			echo("Note : ".$strs);
			require("../view/admin/note.php");
		}
	}