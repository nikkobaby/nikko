<php
		$con = new mysqli('localhost', 'root', '', dbstudentinfosystem');
		
		if (!$con){
				die(mysqli_error($mysqli));
		}
		
?>