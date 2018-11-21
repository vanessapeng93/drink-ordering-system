<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title Page-->
    <title>Thurs-TY Login Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/login_register.css" rel="stylesheet" media="all">
</head>

<body>
<form method="post" action="login.php">
		<?php include('errors.php'); ?>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" style = "text-align:center;">Welcome to Thurs-TY</h2>
					     <h3 class="title">Login</h3>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="username">
						</div>
									<div class="input-group">
											<input class="input--style-2" type="password" placeholder="Password" name="password_1">
									</div>
								<div class="p-t-30">
									<button class="btn btn--radius btn--green" type="Login" >Login</button>
                        </div>
						<br/>
						<p>
						<strong>Not yet a member? <a href="register.php">Sign Up</a></strong>
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
