<?php
include'includes/menu.php';
include'includes/conn.php'; 
?></br></br></br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<center>
<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"></br>
	<input type="text" name="comment1"></br>
	<input type="submit" name="submit">
</form>
</center>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php 
if (isset($_POST['submit'])) {
	$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_tem_loc=$_FILES['file']['tmp_name'];
	$comment1=$_POST['comment1'];
	$file_store="uploads/".$file_name;
	move_uploaded_file($file_tem_loc,$file_store);
    $query=mysqli_query($conn,"INSERT INTO home VALUES('','$file_name','$comment1')")or die(mysqli_error($conn));
	if ($query) {
    echo "file uploaded";
	}
	
}
?>
