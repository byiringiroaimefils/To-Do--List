<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <div class="cont">
        <h4>To Do List</h4>
        <form action="#" method="post">
            <input type="text" name="enteritems" >
            <button>+</button>
        </form>
        <Table>
            <tr>
                <th>ID</th>
                <th>ITEMs</th>
            </tr>  <br>
            
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

        </Table>

    </div>
</body>

</html>
<?php
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $items = $_POST["enteritems"];

    $sqli = "INSERT INTO todolist VALUE ('','$items')";

    $run= mysqli_query($conn, $sqli);
    if ($run) {
        header("location:index.php");
     }
}

?>

