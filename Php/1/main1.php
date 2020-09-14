

<?php 
$son=$_POST["s"];
$t=$_POST["r"];
if ($t=="d") {

	$n=$son*10300;
	echo number_format($n,0,""," ")." som";

}
else {
	$n=$son/10300;
	echo number_format($n,2,"."," ")." $";
}



 ?>