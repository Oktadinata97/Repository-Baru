<?php 
session_start();
include 'admin/config.php';
$user=$_POST['username'];
$pass=$_POST['pswd'];
$pas=md5($pass);
$query=mysql_query("select * from tbadmin where username='$user' and pswd='$pass'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['username']=$user;
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>