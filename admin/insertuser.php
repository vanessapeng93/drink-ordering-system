<?php  
$connect = mysqli_connect("localhost", "root", "", "chat");
$sql = "INSERT INTO users(username,password,name,hp,email,confirmed) VALUES('".$_POST["username"]."','".$_POST["password"]."','".$_POST["name"]."', '".$_POST["hp"]."','".$_POST["email"]."',1)";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>