<?php

	$title = 'Update Profile';
	require_once 'include/header.php';
	
	include 'connect.php';
	
	session_start();
	if($_SESSION['username']=="")
		header("location: login.php");
	
	$sql = "select * from tblaccount where username = '".$_SESSION['username']."'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($res);
	if(isset($_POST['btnUpdate'])){
		$pwd=$_POST['txtPassword'];
		$fname=$_POST['txtFirstname'];
		$lname=$_POST['txtLastname'];
		
		$sql="update tblaccount set password='".$pwd."', firstname='".$fname."', lastname='".$lname."' where username='".$_SESSION['username']."'";
		mysqli_query($con,$sql);
		$sql = "select * from tblaccount where username ='".$_SESSION['username']."'";
		$res = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($res);
		
		header("location: main.php");
	}
?>

<div style='background.color:#ffff00'>
	<center><p style="color:white"><h2>Edit Profile Page</h2></p></center>
</div>
		<form method="post">
				<pre>
						Input password:<input type="password" name="txtPassword" value="<?php echo $row[1]; ?>" >
						Input firstname:<input type="text" name="txtFirstname" value="<?php echo $row[2]; ?>" >
						Input lastname:<input type="text" name="txtLastname" value="<?php echo $row[3]; ?>" >
						<input type="submit" name="btnUpdate" value="Update">
						
				</pre>
		</form>
		
		
<?php require_once 'includes/footer.php'; ?>