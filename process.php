<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	


	$con=mysqli_connect("localhost","root", "","login");

	$result = mysqli_query($con,"select * from user where username = '$username' and password = '$password'") 
					or die("Failed to query database".mysql_error());
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password) {
		echo "Login Success!! Welcome";
	} else {
		echo "Failed to Login";
	}
	

?>
