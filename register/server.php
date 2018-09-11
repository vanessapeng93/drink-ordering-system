<?php

	session_start();

	
	$username = "";
	$email = "";
	$errors = array();
	
	 //$con =new mysqli(host="localhost",username="root",password="",dbname="research_phpemailconfirmation");
       // $con =new mysqli('localhost','root','','research_phpemailconfirmation');

        //$name = $con->real_escape_string($_POST['name']);
	$db = mysqli_connect('localhost','root','','registration');

	if(isset($_POST['register'])){
		$username = $db->real_escape_string($_POST['username']);
		$email = $db->real_escape_string($_POST['email']);
		$password_1 = $db->real_escape_string($_POST['password_1']);
		$password_2 = $db->real_escape_string($_POST['password_2']);

		if(empty($username)){
			array_push($errors, "Username is required");

		}
		if(empty($email)){
			array_push($errors, "Email is required");

		}
		if(empty($password_1)){
			array_push($errors, "Password is required");

		}

		if($password_1 != $password_2){
			array_push($errors,"The two password do not match");
		}

		if (count($errors) == 0) {
			$password = md5($password_1);
			$sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
			mysqli_query($db,$sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "you are logged in";
			header('location: login.php');
		}


	}
	if(isset($_POST['login'])){
		$username = $db->real_escape_string($_POST['username']);
		$password = $db->real_escape_string($_POST['password']);

		if(empty($username)){
			array_push($errors, "Username is required");

		}
		if(empty($password)){
			array_push($errors, "Password is required");

		}

		if(count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
			$result = mysqli_query($db , $query);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "you are logged in";
				header('location: index.php');

			}else{
				array_push($errors, "wrong username or password combination");
				//header('location: login.php');
		}

	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
}

?>