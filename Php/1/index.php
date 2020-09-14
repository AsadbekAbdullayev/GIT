<!DOCTYPE html>
<html>
<head>
	<title>php</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body> 

	<div style="border: 1px solid red">

		<h1>Online bozor</h1>
	<form method="GET" action="main.php">
		<select name="son">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select> <br>
		<input type="text" name="narx" placeholder="Narxni kiriting">  <br>
		<input type="submit" name="s1" value="ok">
		<p>Bu bozorda siz 30000 somdan ortiq harid qilsangiz 5% chegirma 50000 somdan ortiq savdo qilsangiz 10% chegirmaga ega bolasz </p>
 

	</form>
</div>
<br>

	<div style="border: 1px solid blue">
		 <h1>Dollar kursi</h1>
		<form method="POST" action="main1.php">
	<input type="text" name="s" value="0" ><br>
	<input type="radio" name="r" value="d">
	Dollardan so`mga
	<input type="radio" name="r" value="s">
	So`mdan dollarga <br>
	<input type="submit" name="s1" value="Hisobla">
	<p>Bunda kerakli summani yozsangiz dollarga hisoblab beradi yoki aksincha</p>

</form>
	</div>






</body>
</html>