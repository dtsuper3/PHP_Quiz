<?php 
	session_start();
		require('dbcon.php');
		$name=htmlspecialchars($_POST['uname']);
		$pass=htmlspecialchars($_POST['pass']);
		$query="SELECT * FROM signin WHERE name='$name' AND password='$pass'";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		if ($num == 1) {
			$_SESSION['uname']=$name;
			header('location:home.php');
		}else{
			header('location:login.php');
		}
 ?>