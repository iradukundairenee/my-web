<?php
include'includes/menu.php'; 
?></br></br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<?php 
if(isset($_GET['update'])){
	$id=$_GET['update'];
	$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
    $query=mysqli_query($conn,"SELECT * FROM staff WHERE id='$id'")or die(mysqli_error($conn));
    $row=mysqli_fetch_array($query);
}


?>

<body>
	<form action="update_staff1.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id'];?>"></br></br>
	<input type="text" name="firstname" value="<?php echo $row['firstname'];?>" placeholder="update here"></br></br>
	<input type="text" name="lastname" value="<?php echo $row['lastname'];?>" placeholder="update here"></br></br>
    <input type="file" name="file" value="<?php echo $row['name'];?>"></br></br>
    <input type="submit" name="upload" value="upload"></br></br>
    </form>
</body>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
