<?php
include'includes/menu.php'; 
?></br></br></br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<?php
	$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
	$query=mysqli_query($conn,"SELECT *  FROM contactus")or die(mysqli_error($conn));
	while ($row=mysqli_fetch_array($query)) {
		?>
</head>
<body class="jumbotron-fluid">
	<center>
	<div class="container-fluid ">
   <div class="row">
		<div class="card col-12 col-md-8 col-lg-3 product-card mt-1">
			
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			 		</div>
			 		<div class="card col-12 col-md-8 col-lg-3 product-card mt-1">
			 			
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			 		</div>
  </div>
</div>
<?php 
}
?>
</center>
</body>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>