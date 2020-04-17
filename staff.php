<?php
include'includes/menu.php'; 
?></br></br></br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
  .back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
}
</style>
<body>
	<?php 
	$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
	$query=mysqli_query($conn,"SELECT * FROM staff")or die(mysqli_error($conn));
	?>
  
	      <div class="container-fluid">
	      	<div class="content p-3">
		  <div class="row  justify-content-center">
				<div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
				<div class="row">
					<?php
	while ($row=mysqli_fetch_array($query)) {
?>

          <div>
          	<img src="admin/<?php echo $row['name'];?>" height="200px" width="200px"></br>
            <label>firstname</label>:<b><i><?php echo $row['firstname'];?></i></b></br></br>
              <label>lastname</label>:<b><i><?php echo $row['lastname'];?></i></b></br></br>

          </div>

		                    	<?php 
}	
	?>
          </div>
          

				</div>
		  </div>
		  </div>
	      </div>
			

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