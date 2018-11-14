<?php
	if (isset($_GET["email"])) {
		$connection = new mysqli("localhost", "root", "", "registration");
		
		$email = $connection->real_escape_string($_GET["email"]);

		$data = $connection->query("SELECT id FROM users WHERE email='$email'");

		if ($data->num_rows > 0) {
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 15);

			$password = $str;

			$connection->query("UPDATE users SET password = '$password' WHERE email='$email'");

			echo "Your new password is: $str";
		} else {
			echo "Please check your link!";
		}
	} else {
		header("Location: login.php");
		exit();
	}
?>