<?php
include'includes/menu.php'; 
?></br></br></br>
<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "<h2>welcome to academic page</h2>";
  echo "<br><a href='logout.php'><input type='button' name='logout' value='logout'></a>";
}
else{
  header("location:admin_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<center>
<form action="?" method="POST">
	<input type="text" name="subject" placeholder="enter school subject"></br>
	<input type="text" name="program" placeholder="enter school program"></br>
    <input type="submit" name="submit">	
</form>
</center>
</body>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php 
if (isset($_POST['submit'])) {
	$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
	$subject=$_POST['subject'];
	$program=$_POST['program'];
    $query=mysqli_query($conn," INSERT INTO academic(subject,program)  VALUES('$subject','$program')")or die(mysqli_error($conn));

}

?>
