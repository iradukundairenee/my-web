<?php
$username="admin";
$password="admin123";
session_start();
if (isset($_SESSION['username'])) {
  echo "<h1>welcome".$_SESSION['username']."</h1>";
  echo "<br><a href='logout.php'><input type='button' name='logout' value='logout'></a>";
}
else{
	if ($_POST['username']==$username && $_POST['password']==$password) {
		
  $_SESSION['username']=$username;

     echo "<script>location.href='index.php'</script>";
	}
	else{
		echo "<script>location.href='admin_login.php'</script>";
	}

}
?>