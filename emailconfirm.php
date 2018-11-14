<!DOCTYPE html>
<html>
<head>
	<title>Email Confirmation</title>
</head>
<body>
	<?php
		$db = mysqli_connect('localhost','root','','registration');

		$username = $_GET['username'];
		$code = $_GET['code'];
		

		$sql = "SELECT * FROM users WHERE username = '$username'";
		mysqli_query($db,$sql);
		$result = mysqli_query($db , $sql);
		while($row = mysqli_fetch_assoc($result))
		{
			$db_code = $row['confirmcode'];

		}

		if($code == $db_code)
		{
			$query = "UPDATE users SET confirmed='1'";
			$query1 = "UPDATE users SET confirmcode='0'";
			mysqli_query($db,$query);
			mysqli_query($db,$query1);

			echo"Thank you , Your email has been confirm and you may now login";
			

		}
		else
		{
			echo "Username and code cant not match";
		}

	?>

</body>
</html>