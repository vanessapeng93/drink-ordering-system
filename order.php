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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Order</span></p>
              <h1 class="mb-3">Order</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section cart-section">
      <div class="container">
        <div class="row block-9 mb-4">
  
        


<div hidden>
  <?php   
  
  $i=1;
  $x=1;


  $user_id = $_SESSION['user_id'];

  $sql_order = "SELECT * FROM orders WHERE `user_id` = '$user_id' AND `status` = 'pending'  OR  `status` = 'shipping'";

  $result_order = mysqli_query($connect,$sql_order);




  $sql_order_close = "SELECT * FROM orders WHERE `user_id` = '$user_id' AND `status` = 'close'";

  $result_order_close = mysqli_query($connect,$sql_order_close);



?>

</div>




<div class="container" >
  
               
      <h4><i style="color:#008000">Pending Order</i></h4>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Shipping Address</th>
        <th>Total Price</th>
        <th>Order Date</th>
        <th colspan="2">Status</th>
      </tr>
    </thead>
    <tbody>



      <?php while ($row = mysqli_fetch_assoc($result_order)){   ?>
      <tr  data-order="<?php echo $row['id']?>">
    
    <td><?php echo $i ?></td>
      <td hidden ><?php echo $row['id']?></td>
   
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['shipping_address']?></td>
        <td>RM <?php echo $row['total_price']?></td>
        
    <td><?php echo $row['date']?></td>


    <?php if($row['paid'] == 0) :?>
         <td style="color:red" class="font-weight-bold">Not yet Paid</td>
         <?php else : ?>


                 <?php if($row['status'] == 'shipping') :?>
                <td style="color:orange" class="font-weight-bold">Shipping Now</td>
               <?php else : ?>
                  <td style="color:green" class="font-weight-bold">Paid (waiting to be approve)</td>

                 <?php endif; ?>

    <?php endif; ?>



         <?php if($row['paid'] == 0) :?>
        <td style="color:green"><a href="#payment_modal" data-toggle="modal"><i>open payment</i></a></td>
          <?php endif; ?>
    </tr>
    <?php $i++; ?>
     <?php }?>


   
     
    </tbody>
  </table>





  <div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title"><center><i class="fas fa-registered"></i> Card Payment</center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="payment_form" action="paid_process.php" method="post">
      <div class="modal-body">
        

          
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Name</label>
           <div class="col-sm-9">
              <input type="name" class="form-control" name="name">
            </div>
        </div>
          
    

       
      

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Card No</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="">
            </div>
        </div>


            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" name="pass">
            </div>
        </div>


      </div>
        <div class="modal-footer">
            <input type="hidden" class="form-control" name="order_id">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>































<button class="btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#closeOrder" >
    Show Complete
  </button>



<div class="collapse" id="closeOrder" style="padding-top:30px ">

      <h4><i style="color:#B22222">Complete Order</i></h4>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Shipping Address</th>
        <th>Total Price</th>
        <th>Order Date</th>
        <th colspan="2">Status</th>
      </tr>
    </thead>
    <tbody>



      <?php while ($row = mysqli_fetch_assoc($result_order_close)){   ?>
      <tr>
      <td><?php echo $x ?></td>
     <td hidden><?php echo $row['id']?></td>
     <td><?php echo $row['username']?></td>
    <td><?php echo $row['shipping_address']?></td>
        <td>RM <?php echo $row['total_price']?></td>
        
     <td><?php echo $row['date']?></td>
       <td><h6 style="color:blue"><?php echo $row['status']?></h6></td>
    </tr>
    <?php $x++ ?>
     <?php }?>


   
     
    </tbody>
  </table>
 
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
    

$('[href="#payment_modal"]').click(function()
    {
        var order = $(this).closest('tr').attr('data-order');

        
          order = JSON.parse(order);

        
        $('[name="payment_form"]').find('[name="order_id"]').val(order);   
    });




  $('[name="payment_form"]').submit(function(e)
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
                    
                        location.reload();
                    

                    
                }, 1000);
        })
       
    });



</script>


    
  </body>
</html>