<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
	<base href="https://localhost/postManager/">
	<meta charset="UTF-8">
	<title>Show post</title>
	<link rel="StyleSheet" href="/postManager/public/css/show-post.css" type="text/css">
	<!-- <script src="manage.js"></script> -->
</head>

<body>
	<div id='header-container'>
		<lable style="font-size: 20px;font-weight: bold;"><?=$post['title']?></lable>
		<div style="float:right;">
			<a href=""><button id='back'>Back</button></a>
		</div>
	</div>
	<div id='post-container'>	
		<img src="public/images/<?=$post['image']?>">
		<p style="width: 85%;heigh : 100%; display: inline-block;float: right;"><?=$post['description']?></p>
	</div>
</body>
</html>