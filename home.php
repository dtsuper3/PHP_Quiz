<?php 
	session_start();
	if (!isset($_SESSION['uname'])) {
		header('location:login.php');
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<title>Home</title>
 </head>
 <body>
 	<div class="container">
 		<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['uname']; ?></h2>
 		<a href="logout.php">logout</a>
 	</div>
 </body>
 </html>