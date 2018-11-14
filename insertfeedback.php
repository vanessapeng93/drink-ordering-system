 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(isset($_POST["name"]))  
 {  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
	  $email = mysqli_real_escape_string($connect, $_POST["email"]);  
      $subject = mysqli_real_escape_string($connect, $_POST["subject"]);
      $message = mysqli_real_escape_string($connect, $_POST["message"]);  
      $sql = "INSERT INTO feedback(name,email,subject,message) VALUES ('".$name."','".$email."','".$subject."', '".$message."')";  
      if(mysqli_query($connect, $sql))  
      {  
           echo "Feedback Sent";  
      }  
	  else 
		  echo"Error!";
 }  
 ?>  