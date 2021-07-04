<?php
class Note{
	public function __construct($note){
			echo("Note : ".$note);
			require("../view/admin/note.php");
		}
	}
