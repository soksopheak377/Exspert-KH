

<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<style type="text/css">
		/*body{
			background-color: #EDEAEA;
		}*/
		h1{
			width: 400px;
			padding-left: auto;
			padding-right: auto;
		}
		.contentpost{
			height: 300px;

		}
	</style>
</head>
<body>
	<form method="post" action="insert_post.php" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
				<h2>Insert News to post</h2>
					<div class="row">
						<div class="col-md-12">
							<label>Title</label>
							<input type="text"class="form-control" name="title" placeholder="Title...">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>Author</label>
							<input type="text"class="form-control" name="Author" placeholder="Title...">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>Image</label>
							<input type="file" class="form-control" name="images" placeholder="Title...">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>Content</label>
							<textarea rows="10" cols="160" class="form-control" name="content"></textarea>
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" class="btn btn-primary " name="submit" value="Public">
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>		
	</form>
</body>
</html>

<?php 
	include('includes/db_connect.php');
	
	if (isset($_post['submit'])) {
		echo $Title 		=form_control('title');
		echo $Author 	=$_post['Author'];
		echo $content 	=$_post['content'];exit;
		$images 	=$_files['images']['name'];
		$imgtype 	=$_files['images']['type'];
		$imgsize 	=$_files['images']['size'];
		$imgtmp 	=$_files['images']['tmp_name'];

		// if ($title=='' or $Author=='' or $content=='') {
		// 	echo "<script> Alert('Please emter data to field...');</script>";
		// }
	}
 ?>
