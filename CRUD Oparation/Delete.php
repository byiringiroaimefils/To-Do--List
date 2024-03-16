<?php


include("connection.php");
$id=$_GET['id'];
$Sqli="DELETE FROM info WHERE id=$id";
$run=mysqli_query($conn,$Sqli);

if($run==true){
  header("location:Display.php");
}
else{
    echo"Err";
}



?>