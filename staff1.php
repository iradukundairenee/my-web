<?php
include'includes/menu.php'; 
?></br></br>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    
	<center>
 
    <form action="" method="POST" enctype="multipart/form-data">
    	<div>
    	<input type="file" name="file"></br></br>
    	</div>
    	<div>
    	<b><input type="text" name="staffname" required=""></b><br></br>
    	</div>
    	<input type="submit" name="submit" value="upload">
    </form>
	</center>
</body>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php 
if (isset($_POST['submit'])) {
$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
$file_name=$_FILES['file']['name']; 
$file_type=$_FILES['file']['type'];
$file_tem_loc=$_FILES['file']['tmp_name'];
$file_store="uploads/".$file_name;
move_uploaded_file($file_tem_loc,$file_store);
$query=mysqli_query($conn,"INSERT into `staff` VALUES('','$file_name')")or die(mysqli_error($conn));
if ($query) {
    echo "data inserted well";
}
  
   }

?>
