<?php 
	if (isset($_POST['username'])){
	session_start();
	$con = mysqli_connect('fdb24.awardspace.net','3412790_blog','telver123','3412790_blog');
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$query = "SELECT * FROM users WHERE username = '$user'";
		$result = mysqli_query($con,$query);

		if (mysqli_num_rows($result) == 1 ) {
			$_SESSION['username'] = $_POST['username'];
			echo "success";
		}
		else{
			echo "fail";
		}

	}else{
		echo "<h2>Access Denied !</h2>";
	}
 ?>
