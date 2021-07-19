<?php
$host = "localhost";
$user = "root";
$password = "";
$database ="arifsugiyanto_311910552";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno($koneksi)) {
	echo "failed to connect to MySQL: " . mysqli_connect_error();

}
?>
