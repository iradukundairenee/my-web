<?php
include'includes/menu.php'; 
?></br></br></br>
<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "<h2>welcome to staff</h2>";
  echo "<br><a href='logout.php'><input type=button name=back value=back></a>";
}
else{
  header("location:admin_login.php");
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php 
   $conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
   $query=mysqli_query($conn,"SELECT * FROM staff")or die(mysqli_error($conn));
    ?>
  
<div class="container-fluid">
<div class="content p-3">
<div class="card-row  justify-content-center">
                <div class="card col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
                <div class="row">
                    <?php
    while ($row=mysqli_fetch_array($query)) {
?>
 <div>
            <img src="<?php echo $row['name'];?>" height="200px" width="200px"></br>
           <label>firstname</label>:<b><?php echo $row['firstname'];?></b></br></br>
              <label>lastname</label>:<b><?php echo $row['lastname'];?></b></br></br>
            <a href="delete_staff1.php?delete=<?php echo $row['id'];?>" class=" btn btn-danger">delete</a>
            <a href="edit_staff1.php?update=<?php  echo $row['id'];?>" class=" btn btn-info">update</a>
          </div>

                                <?php 
}   
    ?>
          </div>
          </div>
          </div>
          </div>
          </div>

          
    <form action="" method="POST" enctype="multipart/form-data">
    	<div>
    	<input type="file" name="file"></br></br>
    	</div>
    	<div>
    	<input type="text" name="firstname" placeholder="enter teacher firstname"><br></br>
    	</div>
      <div>
      <input type="text" name="lastname" placeholder="enter teacher lastname"><br></br>
      </div>
    	<input type="submit" name="submit">
    </form>
  <?php
include'includes/footer.php'; 
?>
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
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$file_store=$file_name;
$move=move_uploaded_file($file_tem_loc,$file_name);
$query=mysqli_query($conn,"INSERT INTO staff VALUES('','$firstname','$lastname','$file_name')")or die(mysqli_error($conn));
if ($move) {
    echo "file uploaded well";
}
}
?>
