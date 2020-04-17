<?php
include'includes/menu.php'; 
?>
<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "<h2>welcome to aboutus page</h2>";
}
else{
  header("location:admin_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title></title>
</head>
<body class="jumbotron">
	<center>
	<div class="container-fluid">
			<form action="?" method="POST">
		<div class="justify-content-center">
		<input type="text" name="mission" placeholder="enter school mission" required="">
		</div>
		<div>
	    <input type="text" name="vision" placeholder="enter school vision " required="">
	    </div>
		<div>
		<textarea name="history" placeholder="enter school history" required="">
			
		</textarea>
	   </div>
	   <div>
		<input type="submit" name="submit" >
	   </div>
	</form>
	</div>
	</center>
</body>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
$mission=$_POST['mission'];
$vision=$_POST['vision'];
$history=$_POST['history'];
$query=mysqli_query($conn,"INSERT INTO aboutus(mission,vision,history) VALUES('$mission','$vision','$history')")or die(mysqli_error($conn));
}

?>