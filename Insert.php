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