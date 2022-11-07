<?php
$koneksi = mysqli_connect("localhost","root","","sd");

// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>