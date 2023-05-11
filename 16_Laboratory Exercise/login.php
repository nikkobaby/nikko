<?php
    $title = 'Login Page';
    require_once 'includes/header.php';
	include 'connect.php';

	session_start();
	
	if(isset($_POST['btnLogin'])){
				$uname=$_POST['username'];
				$pwd=$_POST['password'];
				
				$sql = "select * from tblaccount where username='".$uname."'";
				$result = mysqli_query($con, $sql);
				$count = mysqli_num_rows($result);
				
				$row = mysqli_fetch_array($result);
				echo $uname;
				echo $pwd;
				if($count==0){
					echo "<script language = 'javascript'>
											alert('username not existing.');
						</script>";
					}else if($row[1] !=$pwd) {
						echo "<script language = 'javascript'>
											alert('Incorrect password');
							</script>";
					}else{
						$_SESSION['username']=$row[0];
						header("location: main.php);
					}
					
		}
		

?>

<div style = 'background-color:#ffff00'>
	<center><p style = "color:white"