<?php 
	session_start();
	$conn = mysqli_connect("localhost","root","","erp");

		$user = $_POST['username'];
		$pass = $_POST['password'];

		$query = "SELECT * FROM users WHERE loginId = '$user'";
		$result = mysqli_query($conn,$query);

		if (mysqli_num_rows($result) == 1 ) {
			
			$_SESSION['username'] = $_POST['username'];
			echo "success";
		}
		else{
			echo "fail";
		}

 ?>