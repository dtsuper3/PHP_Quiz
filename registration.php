<?php 
		require('dbcon.php');
		$name=htmlspecialchars($_POST['uname']);
		$pass=htmlspecialchars($_POST['pass']);
		$query="SELECT * FROM signin WHERE name='$name' AND password='$pass'";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		if ($num == 1) {
			header('location:index.php');
		}else{
			$query="INSERT INTO signin (id,name,password) VALUES (null,'$name','$pass')";
			mysqli_query($con,$query);
			header('location:index.php');
		}
?>