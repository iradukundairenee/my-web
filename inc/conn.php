<?php
session_start();
if (isset($_SESSION['admin_login'])) {
$conn=mysqli_connect("localhost","root","") or die(mysqli_connect_error($conn));
mysqli_select_db($conn,"ttcmururu") or die(mysqli_error($conn));
$userid=$_SESSION['admin_login'];
}
else{
	header("location:../admin_login.php");
}

?>