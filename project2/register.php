<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php 

	

	if (isset($_POST['s1'])) {
		$con = mysqli_connect('localhost', 'root', 'root','registratsiya');
		   $u = $_POST['user'];
		   $e = $_POST['password'];
		
		if (empty($_POST['user'])) {
			echo "ism yuq";
			die();

		}
		 if (empty($_POST['password'])) {
			echo "password yuq";
			die();


		}
		$sql="insert into userss(username,password) values('{$u}','{$p}')";
		$r=mysqli_query($con,$sql);
		if ($r) {
		 	echo "<h1>Hush kelibsan $u</h1>";
		 } 
		
	}

 ?>

 



</body>
</html>