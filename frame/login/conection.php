<?php
$host="localhost";
$username="root";
$password="";
$db="gowater_update";

$dbkonek= new mysqli ("$host","$username","$password","$db");

if ($dbkonek->connect_error) {
	echo "koneksi gagal";
}else{
	//echo "conected";
}


?>

