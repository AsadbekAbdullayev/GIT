<?php 
$s=$_GET["son"];
$n=$_GET["narx"];
$sum =$n*$s;
echo "Natija: ".$sum."so`m"."<br>";
if ($sum>=50000) {
	$ch=$sum*0.1;
	$t=$sum-$ch;
	echo "Siz uchun chegirma: ". $ch."so`m"."<br>"; 
	echo "Tolash kerak: ". $t."so`m";
}
elseif ($sum>=30000) {
	
	$ch=$sum*0.05;
	$t=$sum-$ch;
	echo "Siz uchun chegirma: ". $ch."so`m"."<br>"; 
	echo "Tolash kerak: ". $t."so`m";

}
else{
	echo "Chegirma mavjud emas. Tolash kerak: ".$sum."so`m";
}

 ?>