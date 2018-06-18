<?php 
	session_start();
	if (!isset($_SESSION['uname'])) {
		header('location:index.php');
	}

	require('dbcon.php');
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<title>Home</title>
 </head>
 <body>
 	<a href="logout.php" class="btn btn-primary float-right mr-2">LOGOUT</a>
 	<div class="container">
 		<h1 class="text-center text-primary my-3">WEBDEVELOPER QUIZ</h2>
 		<h2 class="text-center text-capitalize text-success my-3"> Welcome <?php echo $_SESSION['uname']; ?></h2>
 		<div class="col-lg-8 m-auto d-block">
		<div class="card my-3">
			<h4 class="text-center card-header">Welcome <span class="text-capitalize"><?php echo $_SESSION['uname']; ?></span>, you have to select only one out of 4. Best of Luck :)</h4>
		</div>
		<form action="check.php" method="post">
			<div class="card my-2">
		<?php 
			for ($i=1; $i < 6; $i++):?>
		<?php
			$query="SELECT * FROM questions WHERE qid='$i'";
			$result=mysqli_query($con,$query);
			while ($rows=mysqli_fetch_array($result)): ?>
			<h5 class="card-header"><?php echo htmlspecialchars($i.'. '.$rows['question']); ?></h5>
			<?php 
				$query="SELECT * FROM answers WHERE ans_id='$i'";
				$result=mysqli_query($con,$query);			
				while($rows=mysqli_fetch_array($result)):
			 ?>
			 <div class="card-body">
			 	<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid'] ?>">
			 	<?php echo htmlspecialchars($rows['answer']); ?>
			 </div>
			 <?php endwhile; ?>
		<?php endwhile; ?>
	<?php endfor; ?>
		</div>
		<div class="row">
			<div class="col-4 m-auto d-block"> 
				<input type="submit" name="submit" class="btn btn-success">
				<a href="logout.php" class="btn btn-primary">LOGOUT</a>
			</div>
		</div>
		</form>
 		</div>
 		<footer class="footer">
 			<div class="col-lg-8 m-auto d-block">
 				<strong>&copy; 2018 Quiz</strong>
 			</div>
 		</footer>
 	</div>
 	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
 	<script src="js/jquery-3.3.1.min.js"></script>
 </body>
 </html>