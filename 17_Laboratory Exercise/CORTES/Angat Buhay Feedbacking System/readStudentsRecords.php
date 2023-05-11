<?php
		
		
		include 'connect.php';
		
		$query = 'SELECT * from tblemployee';
		$result = mysqli_query($con, $query);
		
		echo($resultset->fetch_assoc());
		
		
?>