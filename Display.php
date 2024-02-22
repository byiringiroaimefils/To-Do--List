<?php
// Here we are going to include connection from connection.php file 
include("connection.php");
// Here is to select all data from DB then display them in from of  table  
$sqli = "SELECT * FROM todolist";
// here we're going to connect this connection $conn and $sqli  
$runs = mysqli_query($conn, $sqli);

if ($runs == true) {
    foreach ($runs as $items) {
        echo " 
  <tr>
  <td> $items[id]</td>
  <td>$items[Items]</td>
  <td>
  <a href='Edit.php?id={$items['id']}'>Edit</a>
  <a href='Delete.php?id={$items['id']}'>Delete</a>
   </td>
  </tr>
  ";
    }
}

?>