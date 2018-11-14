
<!DOCTYPE html>

 <head>
    <title>Thurs-Ty</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<link rel="icon" type="image/ico" href="logo1.png" />
	
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  
  
  

  
  </head>
<div hidden>
<?php


 session_start();


 $user_id = $_SESSION['user_id'];
    
    $connect = mysqli_connect("localhost", "root", "", "test");
    
$sql_count = "SELECT * FROM orders WHERE `user_id` = '$user_id ' AND `status` = 'pending'";
  $result_sql_count = mysqli_query($connect,$sql_count);


   $currentOrderCount = mysqli_num_rows($result_sql_count);


    
?>


<?php

  $currentCartCount = array();


  $string  = $_SESSION['cart'];


  $currentCartCount = explode(',' , $string);

  if(isset($_SESSION['cart']))
  {
    $currentCartCount = count($currentCartCount);
  }else
  {
    $currentCartCount = 0;
  }


  if(empty($_SESSION['cart']))
  {
    $currentCartCount = 0;
  }


?>
</div>
<html lang="en">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	
    <script src="//cdnjs.cloudflare.com/ajax/libs/noty/3.1.2/noty.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/noty/3.1.2/noty.css">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
	     <a class="navbar-brand" href="index.php">
                        <img src="logo1.png" />

                    </a>
					
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
		

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
			<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
			
			
			<?php if(isset($_SESSION['username'])):?>
			
		
			
			<li class="nav-item"><a href="cart.php" class="nav-link"><i class="fas fa-cart-plus"></i> Cart <span class="badge badge-primary badge-cart"></span></a> 
			<input type="hidden" name="currentCartCount" value="<?php echo $currentCartCount ?>"></li>



       <li class="nav-item">
         <a href="order.php" class="nav-link"><i class="fas fa-credit-card"></i> Order <span class="badge badge-primary badge-order"></span></a> 

         <input type="hidden" name="currentOrderCount" value="<?php echo $currentOrderCount ?>">


        </li>






			 <li class="nav-item"><a href="register/index.php" class="nav-link"><i class="fas fa-user"></i><strong><?php echo $_SESSION['username']; ?></strong></a></li>
			 <li class="nav-item"><a href="register/login.php" class="nav-link">Logout</a></li>
			
			<?php else :?>
			
			<li class="nav-item"><a href="register/index.php" class="nav-link">Login/Sign Up</a></li>
			
			<?php endif?>
			
			
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    
  </body>
</html>

<script type="text/javascript">
  



  $(document).ready(function() {
  $currentCartCount = $('[name="currentCartCount"]').val();
    $( ".badge-cart" ).text($currentCartCount);

      $currentOrderCount = $('[name="currentOrderCount"]').val();
    $( ".badge-order" ).text($currentOrderCount);






});


</script>

