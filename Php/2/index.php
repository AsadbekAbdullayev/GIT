<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="sayt">
		<div id="header">

		</div>
		<div id="log">
			<?php 
				if ($_SESSION["admin"]=="") {
					echo "<h1>Login oynasi</h1>";
				 ?>
			<form>
				<input type="text" name="log">
				<input type="password" name="pass">
				<input type="submit" name="s1" value="OK">
			</form>

			<?php 
			if (isset($_GET["s1"])) {
			 	if (($_GET["log"]=="admin") && ($_GET["pass"]=="12345")) {
			 		$_SESSION["admin"]=$_GET["log"];
			 		
			 	}
			 	else  {
			 		echo "<h3>Login yoki parol hato</h3>";
			 	}

             }
         }
	 
	 else {
	 	echo "<h1>Salom ".$_SESSION["admin"]."</h1>";
	    echo "<a href= 'main.php'>Chiqish</a>";
	 }



		 ?>

			
			
		</div>
		<div id="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</body>

</html>