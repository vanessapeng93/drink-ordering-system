<?php  
$connect = mysqli_connect("localhost", "root", "", "test");
$sql = "INSERT INTO users(username,password,name, dob,hp,email,confirmed) VALUES('".$_POST["username"]."','".$_POST["password"]."','".$_POST["name"]."', '".$_POST["dob"]."','".$_POST["hp"]."','".$_POST["email"]."',1)";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>