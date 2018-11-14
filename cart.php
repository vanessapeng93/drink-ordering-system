<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasty - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
              <h1 class="mb-3">Cart</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section cart-section">
      <div class="container">
        <div class="row block-9 mb-4">
  
        




<?php 

$total = 0;
$i=1;
?>

<div hidden>
<?php echo $_SESSION['cart'] ?>


<?php 
    $x = 0;
    
    $item_name = array(); 
    $item_price = array(); 
    $user_id = $_SESSION['user_id'];

    
?>

</div>


<div id="cartHead" class="container" >
            <h4 style="margin-top: -60px">Purchasing Cart</h4>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th colspan="2">Price</th>
                </tr>
            </thead>

            <tbody>
                <?php if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])):?>  <!--check if session cart isset-->

                    <?php

                        $items = $_SESSION['cart'];
                        $cartitems = explode(",", $items);
                    ?>
                    
                    <?php foreach ($cartitems as $key=>$id) { ?>    <!--foreach open-->
                        
                        <?php 



                            $sql = "SELECT * FROM menu WHERE id = $id";
                            $res=mysqli_query($connect, $sql);
                            $row = mysqli_fetch_assoc($res);
                        ?>

                        <tr>
                            
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td>RM <?php echo $row['price']; ?></td>
                            <td><a href="delete_cart_process.php?remove=<?php echo $key; ?>">Remove</a></td>
                        </tr>

                        <?php 
                            $total = $total + $row['price'];
                            $i++;

                            $item_name[] = $row['name']; 
                            $item_price[] = $row['price']; 

                            

                            

                        ?>

                    <?php } ?> <!--foreach close-->

                    <tr>
                        <td colspan="2"><strong>Total Price</strong></td>
                        <td ><strong>RM <?php echo $total; ?></strong></td>


                        <td><a class="btn btn-info" style="color:white" data-toggle="modal" data-target="#checkout_Modal">Check Out</a></td>
                            
                    
                    </tr>


                <?php else:?> <!--check if session cart not isset do else-->
                    <tr>
                        <td>No Item In Cart</td>    
                    </tr>
                <?php endif;?> <!--end if-->

            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="checkout_Modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title"><center><i class="fas fa-cart-plus"></i> Check Out</center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form enctype="multipart/form-data" action="order_process.php" method="post" name="Checkout_form">
                <div class="modal-body">

                            <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Enter First Name" name="username" value="<?php echo $_SESSION['username'] ?>">
                    </div>
                </div>



                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Shipping Address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Enter Address" name="shipping_address" value="">
                    </div>
                </div>


                            
                            <?php foreach ($item_name as $name) { ?>

                                <input type="hidden" name="item_name[]" value="<?php echo $name?>">
                            <?php } ?>
                             
                            <?php foreach ($item_price as $price) { ?>
                                <input type="hidden" name="item_price[]" value="<?php echo $price?>">
                            <?php } ?>

                            <input type="hidden" name="cart_count" value="<?php echo ($i)-1 ?>">

                            <input type="hidden" name="total_price" value="<?php echo $total ?>">
                            <input type="hidden" name="user_id" value="<?php echo $user_id ?>">


                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                        </form>





 
    </div>
  </div>
</div>






















        </div>
       
      </div>
    </section>

   

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





<script>
    

// $(document).ready(function () {

//     $('html, body').animate({
//         scrollTop: $('#cartHead').offset().top
//     }, 'slow');
// });


    $('[name="Checkout_form"]').submit(function(e)
    {
        $.Event(e).preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: new FormData(this), 
            contentType: false,       
            cache: false,           
            processData:false,  
            dataType: 'JSON',
        }).done(function(data)
        {
            
                new Noty({          
                    type: data.status,
                    text: data.msg,            
                    timeout: 2000
                }).show();

               setTimeout(function()
                {
                    
                        window.location = "menu.php";
                    

                    
                }, 1000);
          
        })
    });


</script>


    
  </body>
</html>