<?php
	// require('model/Database.php');
	// $db = new Database;
	// $db->connect();
	// echo ('amount'.$_GET['amount']);
	require('controller/manage.php'); /*require giao diện trang chủ*/
	if (isset($_GET['amount']) and isset($_GET['page'])) {
			$request = new Manage($_GET['amount'], $_GET['page']);
		} else {
			$request = new Manage(5, 1);
		}
	
	// $db->closeDatabase();