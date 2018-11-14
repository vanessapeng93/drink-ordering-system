<?php  
	$connect = mysqli_connect("localhost", "root", "", "drinkordering");
	$sql = "DELETE FROM orders WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>