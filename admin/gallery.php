<?php
include'includes/menu.php'; 
?></br></br></br>
<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "<h2>welcome to gallery</h2>";
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
	<?php 
  $conn=mysqli_connect("localhost","root", "","ttcmururu")or die(mysqli_error($conn));
$query=mysqli_query($conn," SELECT * FROM gallery ORDER BY id desc")or die(mysqli_error($conn));
?>
<div class="container-fluid">
  <div class="content p-3">
    <div class="row justify-content-center">
       <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
        <div class="row">
          <?php 
while ($row=mysqli_fetch_array($query)) {

?>
          <div class="card col-12 col-md-8 col-lg-3 product-card mt-1">
         <img src="<?php echo $row['name'];?>" height="200px" width="242px">
          <a href="delete_gallery.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">delete</a>
          </div> 
          <?php
}
  ?> 
         </div>
       </div>
    </div>
  </div>
  
</div>
<center>
</center>
<form action="gallery.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file"></br></br>
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
$file_store=$file_name;
move_uploaded_file($file_tem_loc,$file_store);
$query=mysqli_query($conn,"INSERT into `gallery` VALUES('','$file_name')")or die(mysqli_error($conn));
if ($query) {
	echo "data inserted well";
}
  
   }


?>