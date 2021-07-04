<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$controller = $_GET['controller'];
	// echo ($_GET['controller']);
	require('../controller/' . $controller . '.php'); /*require controller tương ứng*/
	$controller = ucfirst($controller); /*chuyển đổi chữ cái đầu tiên của chuỗi thành chữ hoa */
	// echo $controller;
	if ($controller == "ShowPost" or $controller == "EditPost" or $controller == "DeletePost" or $controller=='Note'){
		// echo $_GET['id'];
		$request = new $controller($_GET['id']);
	} else {
		$request = new $controller; /*khởi tạo một class controller tương ứng với biến $controller*/
	}
	