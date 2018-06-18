<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="row mt-5">
				<div class="col-lg-6">
					<h2>Login Form</h2>
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
					</form>
				</div>
				
				<div class="col-lg-6">
					<h2>Signup Form</h2>
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
					</form>
				</div>
			</div>
		</div>
	</body>
</html>