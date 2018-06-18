<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title></title>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center text-success mt-3 mb-3">Welcome To Quiz World</h1>
			<div class="row mt-5">
				<div class="col-lg-8 m-auto" id="login">
					<h3 class="text-center">Login Form</h3>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label for="uname">Username</label>
							<input type="text" name="uname" class="form-control" value="">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="pass" class="form-control" value="">
						</div>
						<button type="submit" class="btn btn-primary" name="login">Log in</button>
						<button type="button" id="btn_signup" class="btn btn-primary">Sign up</button>
					</form>
				</div>
				
				<div class="col-lg-8 m-auto" id="signup">
					<h3 class="text-center">Signup Form</h3>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label for="uname">Username</label>
							<input type="text" name="uname" class="form-control" value="">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="pass" class="form-control" value="">
						</div>
						<button type="submit" class="btn btn-primary name="signup">Sign up</button>
						<button type="button" id="btn_login" class="btn btn-primary">Log in</button>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/script.js"></script>		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
 		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
 		<script src="js/jquery-3.3.1.min.js"></script>
	</body>
</html>