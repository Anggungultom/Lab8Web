<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "latihan11";

$koneksi = mysqli_connect($host, $username, $password, $database);
if($koneksi){
	echo"koneksi berhasil";
}else{
echo "koneksi berhasil";
}

?>
