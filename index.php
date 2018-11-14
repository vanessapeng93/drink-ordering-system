<?php include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');
		# code...
	}

 ?>
<!DOCTYPE html>
<html>
<head>




	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>

	<div class="content">
		<?php if(isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php

					echo $_SESSION['success'];
					unset($_SESSION['success']);
					 ?>
					 
					 <a href="../index.php"><h6>click here to continue</h6></a>
					 
				</h3>

			</div>
		<?php endif ?>

		<?php if(isset($_SESSION["username"])):  ?>
			<p>Welcome<strong><br><br><?php echo $_SESSION['username']; ?></strong></p>
			
			
			
			<a href="../index.php" >Home</a> 

			<a href="log_out.php?logout" id="logout" style="color: red;">Logout</a> 
		 
			
			
	<?php endif ?>
	</div>
	
</body>

<script>




</script>

</html>
