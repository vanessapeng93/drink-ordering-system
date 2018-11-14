<?php  
	$connect = mysqli_connect("localhost", "root", "", "drinkordering");
	$id = $_POST["id"];
	 
	$sql = "UPDATE orders SET `approve`=1 ,`status`='close' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}   
 ?>