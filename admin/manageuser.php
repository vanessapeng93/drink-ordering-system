<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$pageName="manageuser";
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
                        <h2 contenteditable="true">Manage User </h2>
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
            url:"selectuser.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
		
		var username = $('#username').text();   //new
		var password = $('#password').text();  //new
        var name = $('#name').text();  
		var hp = $('#hp').text();   
        var email = $('#email').text();   
		if(username == '')  
        {  
            alert("Enter Your Username");  
            return false;  
        } 
		if(password == '')  
        {  
            alert("Enter Your Password");  
            return false;  
        } 
        if(name == '')  
        {  
            alert("Enter Your Name");  
            return false;  
        }  
		  if(hp == '')  
        {  
            alert("Enter Your mobile number");  
            return false;  
        }  
        if(email == '')  
        {  
            alert("Enter Your email");  
            return false;  
        } 
        $.ajax({  
            url:"insertuser.php",  
            method:"POST",  
            data:{username:username, password:password,name:name,hp:hp,email:email},  
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
            url:"edituser.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
	
	$(document).on('blur', '.username', function(){  
        var id = $(this).data("id1");  
        var username = $(this).text();  
        edit_data(id, username, "username");  
    }); 
	$(document).on('blur', '.password', function(){  
        var id = $(this).data("id2");  
        var password = $(this).text();  
        edit_data(id, password, "password");  
    }); 
	
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id3");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
	    $(document).on('blur', '.hp', function(){  
        var id = $(this).data("id5");  
        var hp = $(this).text();  
        edit_data(id,hp, "hp");  
    });  
	    $(document).on('blur', '.email', function(){  
        var id = $(this).data("id6");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"deleteuser.php",  
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

