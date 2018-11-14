<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$pageName="managemenu";
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
                        <h2 contenteditable="true">Manage Menu </h2>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-lg-10 col-md-10">
                        <h5>Table  </h5>
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
			 url:
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
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var name = $('#name').text();  
        var description = $('#description').text();  
		var category = $('#category').text();  
        var price = $('#price').text(); 
		var typeofremark = $('#typeofremark').text();  
        var quantity = $('#quantity').text();  
        if(name == '')  
        {  
            alert("Enter Drink's Name");  
            return false;  
        }  
        if(description == '')  
        {  
            alert("Enter Drink's Description");  
            return false;  
        }  
		 if(category == '')  
        {  
            alert("Enter Drink's Category");  
            return false;  
        }  
		if(price == '')  
        {  
            alert("Enter Drink's price");  
            return false;  
        }  
		 if(typeofremark == '')  
        {  
            alert("Enter type of remark");  
            return false;  
        }  
		 if(quantity == '')  
        {  
            alert("Enter available quantity");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{name:name, description:description,category:category,price:price,typeofremark:typeofremark,quantity:quantity},  
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
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.description', function(){  
        var id = $(this).data("id2");  
        var description = $(this).text();  
        edit_data(id,description, "description");  
    });  
	 $(document).on('blur', '.category', function(){  
        var id = $(this).data("id3");  
        var category = $(this).text();  
        edit_data(id, category, "category");  
    });  
    $(document).on('blur', '.price', function(){  
        var id = $(this).data("id4");  
        var price = $(this).text();  
        edit_data(id,price, "price");  
    });  
	
	 $(document).on('blur', '.typeofremark', function(){  
        var id = $(this).data("id5");  
        var typeofremark = $(this).text();  
        edit_data(id, typeofremark, "typeofremark");  
    });  
    $(document).on('blur', '.quantity', function(){  
        var id = $(this).data("id6");  
        var quantity = $(this).text();  
        edit_data(id,quantity, "quantity");  
    });  
	
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
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
});  
</script>
