<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title Page-->
    <title>Thurs-TY Registration Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/login_register.css" rel="stylesheet" media="all">
</head>

<body>
<form method="post" action="register.php">
		<?php include('errors.php'); ?>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="username" value ="<?php echo $username;?>">
						</div>
                                <div class="input-group">
									<input class="input--style-2" type="text" placeholder="Email" name="email" value ="<?php echo $email;?>">                                
								</div> 
									<div class="input-group">
											<input class="input--style-2" type="password" placeholder="Password" name="password_1">
											
									</div>
									<div class="input-group">
											<input class="input--style-2" type="password" placeholder="Confirm Password" name="password_2" >
									</div>
								<div class="p-t-30">
									<button class="btn btn--radius btn--green" type="submit" name ="register">Submit</button>
                        </div>
						<br/>
						<p>
								<strong>Already a member? <a href="login.php">Sign in</a></strong>
						</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>
<!-- end document-->