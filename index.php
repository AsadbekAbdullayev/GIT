<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="container">
		<form class="form-signin" method="POST">
			<h2 style="text-align: center;">Registration</h2>
			




			<input type="text" name="username" class="form-control" placeholder="Username" >
			<input type="email" name="email" class="form-control" placeholder="Email" >
			<input type="password" name="password" class="form-control" placeholder="Password" >
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="b">Register</button>
			
<?php 
	
	     if (isset($_POST["b"])) {
	     	 $con = mysqli_connect('localhost', 'root', 'root','registratsiya');
		   $u = $_POST['username'];
		   $e = $_POST['email'];
		   $p = $_POST['password'];

		   $sql="insert into users(username,email,password) values('{$u}','{$e}','{$p}')";
		   $r=mysqli_query($con,$sql);
		   if (empty($u)) {
		   echo "<div class='alert alert-danger' >Ism kiritilmadi</div>";
		   }if (empty($e)) {
		   echo "<div class='alert alert-danger' >Email kiritilmadi</div>";		   }

		   if (empty($p)) {
		   echo "<div class='alert alert-danger' >Parol kiritilmadi</div>";		   }
		   

		   if ($r) {
		   echo "<div class='alert alert-success' >Registratsiya bajarildi</div>";

		   }
		   
		   
}








		  
	 ?>
	

			 
		</form>
	</div>

</body>



</html>