<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<title>Add post</title>
	<link rel="StyleSheet" href="/postManager/public/css/edit.css" type="text/css">
	<!-- <script src="manage.js"></script> -->
</head>

<body>
	<div id='header-container'>
		<lable style="font-size: 20px;font-weight: bold;">Add post</lable>
		<div style="float: right;">
			<a href="../../"><button class="bt-e">Back</button></a>
		</div>
	</div>
	<?php  
                        if (isset($alert['success'])) {?>
                            <div >
                            	<label>
                            		<?=$alert['success'] ?>
                            	</label>
                            </div>
                        <?php }
                    ?>
	<div id='form-container'>
		<form  method="post">
			<div class="ln1">
				
				<div class="edit-title">
					<label>Title</label>
				</div>
				<input name="title" style="border: 2px solid #d2d2d2; padding-left: 10px; border-radius : 4px;height: 28px;" type='text' value="Title">
			</div>
			<div class="ln2">
				<div class="edit-title">
					<label>Description</label>
				</div>
				<textarea name="description" style="border: 2px solid #d2d2d2;padding-left: 10px;border-radius : 4px;height: 150px; width: 400px" type='text'>Description</textarea>
			</div>
			<div class="ln1">
				<div class="edit-title">
					<label>Image</label>
				</div>
				<input name="image" type='file'>
				<!-- <img style="display: block;margin-left: 204px;border-radius : 4px;" src='#'> -->
			</div >
			<div class="ln2">
				<div class="edit-title">
					<label>Status</label>
				</div>
				<select name="status" style="border: 2px solid #d2d2d2;padding-left: 10px; height: 28px; width: 100px;border-radius : 4px;">
					<option value="1">Enable</option>
					<option value="0">Disable</option>
				</select>
			</div>
			<div class="ln1">
				<input name="addPost" style="border: 2px solid #d2d2d2;margin-left: 204px;background: white;height: 28px; width: 100px;border-radius : 4px;" type="submit" value="Submit">
			</div>
		</form>
	</div>
</body>
</html>