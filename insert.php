<?php  
$connect = mysqli_connect("localhost", "root", "", "test");
$sql = "INSERT INTO menu(name, description,category,price,typeofremark,quantity) VALUES('".$_POST["name"]."', '".$_POST["description"]."', '".$_POST["category"]."',
 '".$_POST["price"]."', '".$_POST["typeofremark"]."', '".$_POST["quantity"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>