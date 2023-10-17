<?php
include("connection.php");
$id=$_GET["id"];

$sql= "DELETE FROM todolist WHERE id=$id";

$run = mysqli_query($conn,$sql);
if ($run) {
    header("location:index.php");
 }
?>