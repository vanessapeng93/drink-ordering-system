<?php  
$connect = mysqli_connect("localhost", "root", "", "chat");
$sql = "INSERT INTO menu(name, description,category,price,quantity) VALUES('".$_POST["name"]."', '".$_POST["description"]."', '".$_POST["category"]."',
 '".$_POST["price"]."',  '".$_POST["quantity"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>