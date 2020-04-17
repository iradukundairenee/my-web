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
	$query=mysqli_query($conn,"SELECT *  FROM academic")or die(mysqli_error($conn));
	while ($row=mysqli_fetch_array($query)) {
		?>
</head>
<style type="text/css">
  .back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
}
</style>
<body class="jumbotron-fluid">
	<center>
	<div class="container-fluid ">
   <div class="row justify-content-center">
		<div class="card col-12 col-md-8 col-lg-3 product-card mt-1">
			<B><i>OUR SUBJECTS</i></B>
		<p><?php echo $row['subject']; ?></p>
			 		</div>
			 		<div class="card col-12 col-md-8 col-lg-3 product-card mt-1">
			 				<B><i>SCHOOL PROGRAMMES</i></B>
		<p><?php  echo $row['program'];?></p>                
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
<a id="back-to-top" href="https://cdpn.io/michalwyrwa/fullpage/GBaPPj#" class="btn btn-light btn-lg back-to-top" role="button">top</a>
<script src="./stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js.download"></script>
<script src="./jquery-3.3.1.min.js.download"></script>
<script src="./bootstrap.min.js.download"></script>
<script id="rendered-js">
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });
  // scroll body to 0px on click
  $('#back-to-top').click(function () {
    $('body,html').animate({
      scrollTop: 0 },
    400);
    return false;
  });
});
//# sourceURL=pen.js
    </script>
<?php
include'includes/footer.php'; 
?>
