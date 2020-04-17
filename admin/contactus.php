<?php
include'includes/menu.php'; 
?></br></br></br>

<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "<h2>welcome to contactus page</h2>";
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
	<div>
	<form action="?" method="POST">
		<colgroup>ENTER SCHOOL ADDRESS</colgroup>
		<div class="justify-content-center">
		<input type="text" name="postal" placeholder="enter school PO box" required="">
		</div>
		<div>
	    <input type="email" name="email" placeholder="enter school email " required="">
	    </div>
		<div>
		<input type="number" name="phonenumber" placeholder="enter phonenumber of school adminstration" required="">
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
 $postal=$_POST['postal'];
 $email=$_POST['email'];
 $phonenumber=$_POST['phonenumber'];
 $query=mysqli_query($conn,"INSERT INTO contactus(postal,email,phonenumber) VALUES('$postal','$email','$phonenumber')")or die(mysqli_error($conn));
 }
 
 ?>