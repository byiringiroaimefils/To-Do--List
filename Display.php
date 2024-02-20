<?php

include("connection.php");
$sqli = "SELECT * FROM todolist";
$runs = mysqli_query($conn, $sqli);
if ($runs == true) {
    foreach ($runs as $items) {
        echo " 
  <tr>
  <td> $items[id]</td>
  <td>$items[Items]</td>
  <td>
  <a href='edit.php?id={$items['id']}'>Edit</a>
  <a href='Delete.php?id={$items['id']}'>Delete</a>
   </td>
  </tr>
  ";
    }
}
?>