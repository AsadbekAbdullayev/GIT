<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet"  href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
	<div class="container">
		<div class="login-box">
			
		
		<div class="row">
			<div class="col-md-6 login-left">
					<h2>Login here</h2>
					<form action="register.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="submit" name="s1" class="btn btn-primary">Login </button>
					</form>
			</div>
			<div class="col-md-6 login-right">
					<h2>Register here</h2>
					<form action="register.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="submit" name="s1" class="btn btn-primary">Register </button>
					</form>
			</div>
		</div>
	</div>
	</div>
	</body>
	</html>	