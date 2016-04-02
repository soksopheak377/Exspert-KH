<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="topbar btn-default">
			<ul class="nav btn-default">
				<li class="btn-default"><a href="index.php">Home</a></li>
				<li class=" btn-default"><a href="index.php">News</a></li>
				<li class=" btn-default"><a href="index.php">Culture</a></li>
				<li class=" btn-default"><a href="index.php">Photos</a></li>
				<li class=" btn-default"><a href="index.php">Video</a></li>
				<li class=" btn-default"><a href="index.php">About Us</a></li>
				<li class=" btn-default"><a href="index.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<?php include 'includes/header.php'; ?>
	<div class="container">
		<div class="header conttitle">
			<div class="content">
				<?php include'includes/post_content.php'; ?>					
				<?php include'includes/sidebar.php'; ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="header bdfooter">
			<div class="footer">
				&copy write by Sopheak years 2015
			</div>
		</div>
	</div>
</body>
</html>