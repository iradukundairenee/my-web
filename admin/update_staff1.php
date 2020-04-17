<?php 
if (isset($_POST['upload'])) {
$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
$file_name=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
$file_tem_loc=$_FILES['file']['tmp_name'];
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$file_store="uploads/".$file_name;
move_uploaded_file($file_tem_loc, $file_store);
$query=mysqli_query($conn,"UPDATE staff SET firstname='$firstname',lastname='$lastname',name='$file_name' WHERE id='$id' ")or die(mysqli_error($conn));
if ($query) {
	header("location:staff1.php");
		
	}	
}


?>