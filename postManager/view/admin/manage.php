<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
	<base href="https://localhost/postManager/">
	<meta charset="UTF-8">
	<title>Manage</title>
	<link rel="StyleSheet" href="/postManager/public/css/manage.css" type="text/css">
	<script type="text/javascript"  src="/postManager/public/js/jquery-v3.6.0.js"></script>
	<script src="manage.js"></script>
</head>

<body>
	<div id='header-container' style="padding-bottom: 15px;">
		<lable>Manage</lable>
		<a href="admin/addPost/">
			<button id='new'>New</button>
		</a>
		
	</div>
	<div id='list-post-container'>
		<table style="width:100%">
		  <tr>
		    <th style="width: 7%;">ID</th>
		    <th style="width: 10%;">Thumb</th> 
		    <th style="width: 40%;">Title</th>
		    <th style="width: 7%;">Status</th>
		    <th style="width: 12%;">Action</th>
		  </tr>
		  <?php
		  // $stt = 1;
		  foreach ($posts as $post) { ?>
		  <tr>
		    <td><?=$post['id']?></td>
		    <td><img src="/postManager/public/images/<?=$post['image']?>"></td>
		    <td><?=$post['title']?></td>
		    <td>
		    	<?php
		  			if ($post['status'] == 1) { 
		  				echo 'Enable';
		  			} else {
		  				echo 'Disable';
		  			}
		  ?>
		    </td>
		    <td>
	    		<a href="admin/showPost/<?=$post['id']?>"><button class="bt-n" >Show</button></a>
	    		<a href="admin/editPost/<?=$post['id']?>"><button id='bt-center'>Edit</button></a>
		    	<a href="admin/deletePost/<?=$post['id']?>"><button class="bt-n">Delete</button></a>
		    </td>
		  </tr>
		  <?php 

		  // 	if ($stt==$amount){
		  // 	break ;
		  // }

		  // $stt++;
		  
		   } ?>
		</table>
	</div>
	<div id='footer-container' style="padding-top: 15px;text-align: center;">
		<div style="display:inline-block;float: left;">
			<label>Page</label>
			<select>
				<option <?php if ($amount == 5){echo 'selected="selected"';} ?> value="5/page/1">5</option>
				<option <?php if ($amount == 10){echo 'selected="selected"';} ?> value="10/page/1">10</option>
				<option <?php if ($amount == 50){echo 'selected="selected"';} ?> value="50/page/1">50</option>
				<option <?php if ($amount == 'all'){echo 'selected="selected"';} ?> value="all/page/1">All</option>
			</select>
		</div>
		<div  style="display:inline-block; ">

			<?php if(!empty($page_data['pre'])){ ?>
				<a href="<?=$amount?>/page/<?=$page_data['pre']?>"><button class="bt1"><<</button></a>
			<?php }?>
			<a href="<?=$amount?>/page/<?=$page_data['current_page']?>"><button class="bt2"><?php echo $page_data['current_page']; ?></button></a>
			<?php if(!empty($page_data['next'])){ ?>
				<a href="<?=$amount?>/page/<?=$page_data['next']?>"><button class="bt1">>></button></a>
			<?php }?>
			
		</div>
	</div>
<!-- js -->
	<script type="text/javascript">

         $("select").click(function() {
			  var open = $(this).data("isopen");
			  if(open) {
			    window.location.href = $(this).val()
			  }
			  //set isopen to opposite so next time when use clicked select box
			  //it wont trigger this event
			  $(this).data("isopen", !open);
});

      </script>
</body>
</html>