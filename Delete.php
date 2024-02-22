<?php
// Here we are going to include connection from connection.php file 
include("connection.php");
//here we are going to get id from database
$id=$_GET["id"];
// After get id from DB no we're going to delete that id values.

$sql= "DELETE FROM todolist WHERE id=$id";
$run = mysqli_query($conn,$sql);

// After delete them when condition is true it will sen you on index.php file
if ($run) {
    header("location:index.php");
 }
?>