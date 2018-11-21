<!DOCTYPE html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<html lang="en">
<?php

function setActive($name)
{
	global $pageName;
	if(isset($pageName)&&pageName==$name)
	{
		echo "class='active-link'";
		
	}
}
?>

<head>
<title><?php if(isset($pageName)){echo $pageName;}?></title>

<?php 

  
 $user_id = $_SESSION['user_id'];
    
    $connect = mysqli_connect("localhost", "root", "", "chat");


  $sql_count = "SELECT * FROM orders WHERE `status` = 'pending'";
  $result_sql_count = mysqli_query($connect,$sql_count);


   $currentOrderCount = mysqli_num_rows($result_sql_count);
?>

</head>


  <body>
    
      <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="logo1.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  

               
				<a href="register\login.php"" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
		 </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                     <li>
                        <a <?php if ($pageName=='admin'){echo "class='active-link'";} ?> href="admin.php" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                   

                      <li>
                        <a <?php if ($pageName=='managemenu'){echo "class='active-link'";} ?>href="managemenu.php"><i class="fa fa-table "></i>Manage Menu </a>
                    </li>
					
                      <li>
                        <a <?php if ($pageName=='manageuser'){echo "class='active-link'";} ?>href="manageuser.php"><i class="fa fa-edit "></i>Manage User </a>
                    </li>

					

                     <li>
                        <a <?php if ($pageName=='manageorder'){echo "class='active-link'";} ?>href="manageorder.php"><i class="fa fa-edit "></i>Manage Order   <span class="badge badge-primary badge-order"></span> </a>

                      

         <input type="hidden" name="currentOrderCount" value="<?php echo $currentOrderCount ?>">



                    </li>

				
                    
                </ul>
                            </div>

        </nav>
    
  </body>

<script>
      $(document).ready(function() {

        $currentOrderCount = $('[name="currentOrderCount"]').val();
        $( ".badge-order" ).text($currentOrderCount);
      });


</script>


</html>