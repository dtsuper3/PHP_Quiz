<?php 
	session_start();
	if (!isset($_SESSION['uname'])) {
 		header('location:index.php');
	}
	$check_count=0;
	$count=0;
	require('dbcon.php');
	if ($_POST['submit']) {
		if (!empty($_POST['quizcheck'])) {
			$check_count=count($_POST['quizcheck']);
			$i=1;
			$selected=$_POST['quizcheck'];

			$query="SELECT * FROM questions";
			$result=mysqli_query($con,$query);
			while ($rows = mysqli_fetch_array($result)) {
				if ($selected[$i]==$rows['ans_id']) {		
					$count++;
				}		
				$i++;
			}
		$name=$_SESSION['uname'];
		$finalresult="INSERT INTO user(uname,totalques,anscorrect) VALUES ('$name',5,'$count')";
		mysqli_query($con,$finalresult);		
		}
	}	


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<a href="home.php" class="btn btn-primary float-right">Home</a>
		<h1 class="text-center text-success text-uppercase mt-5 mb-5 animate">WEBDEVELOPER QUIZ</h2>			
		<table class="table table-center table-bordered table-hover">
			<tr>
				<th colspan="2" class="bg-dark"><h1 class="text-white text-center">Results</h1></th>
			</tr>
			<tr>
				<th>Questions Attemted</th>
				<td><?php if($check_count) {
					echo "Out of 5; you attemted ".$check_count;
				}else{
					echo "Please Select atlest one question.";					
				}
			 ?></td>
			</tr>
			<tr>
				<th>Your Total score</th>
				<td><?php if ($count) {
					echo " Your score is ".$count.".";
				}else{
					echo "Please Select atlest one question.";
				} 
				?></td>	
			</tr>
		</table>
		<div class="col-4 m-auto d-block"> 				
				<a href="logout.php" class="btn btn-primary">LOGOUT</a>
			</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>