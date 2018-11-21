<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$pageName="manageorder";
?>


<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
	 <link rel="icon" type="image/ico" href="logo1.png" />
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   
</head>
<body>



     
     
   <header>
 <?php
 
 include 'includes\header.php';
 
 ?>
 
 </header>
  <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 contenteditable="true">Manage Order </h2>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-lg-10 col-md-10">
                        <h5> </h5>
                        <div class="table-responsive">
						
						
						
						<div id="live_data"></div>
						</div>

                    </div>
				
				
				
				
				
				
				</div>
				</div>
				</div>
 <script>
 
 
 
 $(document).ready(function(){
	 function fetch_data()
	 {
		 $.ajax({
			 url:""
		 })
	 }
 })
 
 
 </script>
 
 
 
 
 
 <footer>		
   
    <?php
 
 include 'includes/footer.php';
 
 ?>
 
 </footer>

          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"selectorder.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
		
		var user_id = $('#user_id').text();   //new
		var username = $('#username').text();  //new
        var date = $('#date').text();		
        var shipping_address = $('#shipping_address').text();  
		var total_price = $('#total_price').text();   
        var status = $('#status').text(); 
		var approve = $('#approve').text();   
        var paid = $('#paid').text();  
		
		if(user_id == '')  
        {  
            alert("Enter User Id");  
            return false;  
        } 
		if(username == '')  
        {  
            alert("Enter Username");  
            return false;  
        } 
		if(date == '')  
        {  
            alert("Enter Date");  
            return false;  
        } 
        if(shipping_address == '')  
        {  
            alert("Enter Shipping Address");  
            return false;  
        }  
        if(total_price == '')  
        {  
            alert("Enter Price");  
            return false;  
        }  
		if(status == '')  
        {  
            alert("Enter Status");  
            return false;  
        }  
        if(approve == '')  
        {  
            alert("Enter Approve");  
            return false;  
        } 
        $.ajax({  
            url:"insertorder.php",  
            method:"POST",  
            data:{user_id:user_id,username:username, date:date,shipping_address:shipping_address, total_price:total_price,status:status,approve:approve,paid:paid},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"editorder.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
	
	$(document).on('blur', '.user_id', function(){  
        var id = $(this).data("id1");  
        var user_id = $(this).text();  
        edit_data(id, user_id, "user_id");  
    }); 
	$(document).on('blur', '.username', function(){  
        var id = $(this).data("id2");  
        var username = $(this).text();  
        edit_data(id, username, "username");  
    }); 
	
    $(document).on('blur', '.date', function(){  
        var id = $(this).data("id3");  
        var date = $(this).text();  
        edit_data(id, date, "date");  
    });  
    $(document).on('blur', '.shipping_address', function(){  
        var id = $(this).data("id4");  
        var shipping_address = $(this).text();  
        edit_data(id,shipping_address, "shipping_address");  
    });  
	    $(document).on('blur', '.total_price', function(){  
        var id = $(this).data("id5");  
        var total_price = $(this).text();  
        edit_data(id,total_price, "total_price");  
    });  
	$(document).on('blur', '.status', function(){  
        var id = $(this).data("id6");  
        var status = $(this).text();  
        edit_data(id,status, "status");  
    });  
	$(document).on('blur', '.approve', function(){  
        var id = $(this).data("id7");  
        var approve = $(this).text();  
        edit_data(id,approve, "approve");  
    });  
	$(document).on('blur', '.paid', function(){  
        var id = $(this).data("id8");  
        var paid = $(this).text();  
        edit_data(id,paid, "paid");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id9");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"deleteorder.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
	
	
	$(document).on('click', '.btn_approve', function(){  
        var id=$(this).data("id10");  
        if(confirm("Are you sure you want to approve this order?"))  
        {  
            $.ajax({  
                url:"approveorder.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  

                    $currentOrderCount = $('[name="currentOrderCount"]').val();
                    $currentOrderCount--;
                     $( ".badge-order" ).text($currentOrderCount);
                }  
            });  
        }  
    });  
});  
</script>

