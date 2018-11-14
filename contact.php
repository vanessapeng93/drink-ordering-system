<!DOCTYPE html>

<html lang="en">
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
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	
  </head>
  <body>
  
    
 <header>
 <?php
 
 include 'header.php';
 
 ?>
 

 </header>
    
	    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
             
              <h1 class="mb-3">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

	
	
	 <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">
              <h2 class="h4 mb-4">Contact Information</h2>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Address:</span> Bukit Jambul, 11900 Bayan Lepas, Pulau Pinang</p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Phone:</span> <a href="tel://1234567920">+6012-3456789</a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Email:</span> <a href="mailto:info@yoursite.com">info@thursty.com</a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Website</span> <a href="#">beverages@thursty.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <form id="feedbackform">
              <div class="form-group">
			  <h2>Feedback</h2>
                <input type="text" name="name"  id="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" /> 
				<span id="error_message" class="text-danger"></span>  
                <span id="success_message" class="text-success"></span>  
              </div>
			  
            </form>
          </div>
        </div>
        <div class="row mt-5">
          
        </div>
      </div>
    </section>
<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var email = $('#email').val(); 
			var subject = $('#subject').val();  
           var message = $('#message').val();  		   
           if(name == '' || email == ''||subject == '' || message == '')  
           {  
                $('#error_message').html("All Fields are required");  
           }
		
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"insertfeedback.php",  
                     method:"POST",  
                     data:{name:name, email:email,subject:subject,message:message},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 2000);  
                     }  
                });  
           }  
      });  
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