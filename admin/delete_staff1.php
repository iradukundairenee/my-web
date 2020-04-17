<?php
if (isset($_GET['delete'])) {
	$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
	$id=$_GET['delete'];
	$query=mysqli_query($conn,"DELETE FROM staff WHERE id='$id'")or die(mysqli_error($conn));
	if ($query) {
		header("location:staff1.php");
	}

}

?>