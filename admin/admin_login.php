<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			height: 300px;
			width: 500px;
			margin-top: 150px;
			border: 1 solid;
			background-color:#eee;
		}
		td{
			border:0px;
			padding: 10px;
		}
		th{
			border-bottom: 1px solid;
			background-color:#ddd;
		}
	</style>
</head>
<body>
	<form action="index.php" method="POST">
		<table align="center">
			<tr>
				<th colspan="2"><h2><i>login</i></h2></th>
			</tr>
			<tr>
				<td><i>username</i></td>
		<td><input type="text" name="username" placeholder="enter username here" required=""></td>
		</tr>
		<tr>
			<td><i>password</i>
			</td>
		<td><input type="password" name="password" placeholder="enter username here" required=""></td>
		</tr>
		<tr>
		<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
		</table>
	</form>

</body>
</html>
 
 <?php 
if (isset($_POST['login'])) {
	$conn=mysqli_connect("localhost","root","","ttcmururu")or die(mysqli_error($conn));
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($conn,"SELECT * FROM admin_login WHERE username='$username' AND password='$password'")or die(mysqli_error($conn));
	$row=mysqli_num_rows($query);
	if ($row==1) {
		
		header("location:index.php");
	}
	else{
		header("location:admin_login.php");
	}
}

?>