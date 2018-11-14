<!DOCTYPE html>

<?php 
		
		    
    $connect = mysqli_connect("localhost", "root", "", "test");
		$sql = "SELECT * FROM `menu`";
	
		



		
?>


<html lang="en">
  <head>
    <title>Thurs-Ty</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
	<link rel="icon" type="image/ico" href="logo1.png" />
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
  <body>
  
    
 <header>
 <?php
 
 include 'header.php';
 

 ?>

 <div hidden>
<?php  echo $_SESSION['cart'];?>
 </div>
 
 </header>
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
             
              <h1 class="mb-3">Discover Our Exclusive Menu</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

  

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Menu</span>
            <h2>Discover Our Exclusive Menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-chocolate-tab" data-toggle="pill" href="#v-pills-chocolate" role="tab" aria-controls="v-pills-chocolate" aria-selected="true"> Chocolate</a>
              <a class="nav-link py-3 px-4" id="v-pills-coffee-tab" data-toggle="pill" href="#v-pills-coffee" role="tab" aria-controls="v-pills-coffee" aria-selected="false"> Coffee</a>
              <a class="nav-link py-3 px-4" id="v-pills-milk-tab" data-toggle="pill" href="#v-pills-milk" role="tab" aria-controls="v-pills-milk" aria-selected="false"> Milk Tea</a>
			  <a class="nav-link py-3 px-4" id="v-pills-smoothie-tab" data-toggle="pill" href="#v-pills-smoothie" role="tab" aria-controls="v-pills-smoothie" aria-selected="false"> Smoothies</a>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
			
			
			
			<?php 	if($result = mysqli_query($connect,$sql)){
			?>
			
              <div class="tab-pane fade show active" id="v-pills-chocolate" role="tabpanel" aria-labelledby="v-pills-chocolate-tab">
			  
			  
			  
                <div class="row">
				
						  <?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
						  
						  
						  <?php
						  
						  if($row['category']=="Chocolate")
						  {
						 
						  ?>
							
						 <div class="col-lg-6">
						 
							<div class="menus d-flex ftco-animate">	
							  <div class="menu-img" style="background-image: url(<?php echo $row['imageurl']?>);"></div>
							  <div class="text d-flex">
								<div class="one-half">
								  <p><h6 style="color:black"><?php echo $row['name']?></h6></p>
								  <?php echo $row['description']?>
								</div>
								<div class="one-forth">
								  <span class="price"><h6>RM <?php echo $row['price']?><h6></span>
								  
								  			  
								<?php if(isset($_SESSION['username'])):?>
								
									<form name="addcartForm" action="addcart.php" method="GET"> 
									    <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
									    <button class="btn btn-info addcart" type="submit">+</button>
									</form>
									
									<?php else: ?>
									<font style="color:#972C15" size="1"><b>please login to purchase</b></font>
									
								  <?php endif;?>
								  
								  
								</div>
							  </div>
							</div>
					
						</div>
						
						  <?php }?>
						  <?php }?>

				</div>
				
				
              </div><!-- END -->
			  
			<?php } ?>
			
			
			
			
			  
			 	
			<?php 	if($result = mysqli_query($connect,$sql)){
			?> 
               <div class="tab-pane fade show active" id="v-pills-coffee" role="tabpanel" aria-labelledby="v-pills-coffee-tab">
			  
			  
			  
                <div class="row">
				
						  <?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
						  <?php
						  
						  if($row['category']=="Coffee")
						  {
						 
						  ?>
							
						 <div class="col-lg-6">
						 
							<div class="menus d-flex ftco-animate">	
							  <div class="menu-img" style="background-image: url(<?php echo $row['imageurl']?>);"></div>
							  <div class="text d-flex">
								<div class="one-half">
								  <p><h6 style="color:black"><?php echo $row['name']?></h6></p>
								  <?php echo $row['description']?>
								</div>
								<div class="one-forth">
								  <span class="price"><h6>RM <?php echo $row['price']?><h6></span>
								  
								  			  
								<?php if(isset($_SESSION['username'])):?>
								
									<form name="addcartForm" action="addcart.php" method="GET"> 
									    <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
									    <button class="btn btn-info addcart" type="submit">+</button>
									</form>
									
									<?php else: ?>
									<font style="color:#972C15" size="1"><b>please login to purchase</b></font>
									
								  <?php endif;?>
								  
								  
								</div>
							  </div>
							</div>
					
						</div>
						
						  <?php }?>
						  <?php }?>

				</div>
				
				
              </div><!-- END -->
			  
			<?php } ?>
			
			
			
			<?php 	if($result = mysqli_query($connect,$sql)){
			?> 
               <div class="tab-pane fade show active" id="v-pills-milk" role="tabpanel" aria-labelledby="v-pills-milk-tab">
			  
			  
			  
                <div class="row">
				
						  <?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
						  <?php
						  
						  if($row['category']=="Milk Tea")
						  {
						 
						  ?>
							
						 <div class="col-lg-6">
						 
							<div class="menus d-flex ftco-animate">	
							  <div class="menu-img" style="background-image: url(<?php echo $row['imageurl']?>);"></div>
							  <div class="text d-flex">
								<div class="one-half">
								  <p><h6 style="color:black"><?php echo $row['name']?></h6></p>
								  <?php echo $row['description']?>
								</div>
								<div class="one-forth">
								  <span class="price"><h6>RM <?php echo $row['price']?><h6></span>
								  
								  			  
								<?php if(isset($_SESSION['username'])):?>
								
									<form name="addcartForm" action="addcart.php" method="GET"> 
									    <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
									    <button class="btn btn-info addcart" type="submit">+</button>
									</form>
									
									<?php else: ?>
									<font style="color:#972C15" size="1"><b>please login to purchase</b></font>
									
								  <?php endif;?>
								  
								  
								</div>
							  </div>
							</div>
					
						</div>
						
						  <?php }?>
						  <?php }?>

				</div>
				
				
              </div><!-- END -->
			  
			<?php } ?>
			
			
			
			<?php 	if($result = mysqli_query($connect,$sql)){
			?> 
               <div class="tab-pane fade show active" id="v-pills-smoothie" role="tabpanel" aria-labelledby="v-pills-smoothie-tab">
			  
			  
			  
                <div class="row">
				
						  <?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
						  <?php
						  
						  if($row['category']=="Smoothie")
						  {
						 
						  ?>
							
						 <div class="col-lg-6">
						 
							<div class="menus d-flex ftco-animate">	
							  <div class="menu-img" style="background-image: url(<?php echo $row['imageurl']?>);"></div>
							  <div class="text d-flex">
								<div class="one-half">
								  <p><h6 style="color:black"><?php echo $row['name']?></h6></p>
								  <?php echo $row['description']?>
								</div>
								<div class="one-forth">
								  <span class="price"><h6>RM <?php echo $row['price']?><h6></span>
								  
								  			  
								<?php if(isset($_SESSION['username'])):?>
								
									<form name="addcartForm" action="addcart.php" method="GET"> 
									    <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
									    <button class="btn btn-info addcart" type="submit">+</button>
									</form>
									
									<?php else: ?>
									<font style="color:#972C15" size="1"><b>please login to purchase</b></font>
									
								  <?php endif;?>
								  
								  
								</div>
							  </div>
							</div>
					
						</div>
						
						  <?php }?>
						  <?php }?>

				</div>
				
				
              </div><!-- END -->
			  
			<?php } ?>
			  
			  
		
    </section>
	
	
	<script>
	

	

	$('[name="addcartForm"]').submit(function(e)
	{
	    $.Event(e).preventDefault();
	    $.ajax({
	        url: $(this).attr('action'),
	        type: $(this).attr('method'),
	        data: $(this).serialize(),
	        dataType: 'JSON',
	    }).done(function(data)
	    {               
	        new Noty({          
	            type: data.status,
	            text: data.msg,            
	            timeout: 1000
	        }).show();

	 		$currentCartCount++;
	        $( ".badge-cart" ).text($currentCartCount);
	  
	  
	    })
	});
	
	</script>
	


   <footer>
 <?php
 
 include 'footer.php';
 
 ?>
 
 </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>