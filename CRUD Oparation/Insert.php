<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $district = $_POST['district'];
    $sqli = "INSERT INTO info VALUES('','$name','$age','$district')";
    $row = mysqli_query($conn, $sqli);

    if ($row == true) {
    header("location:Display.php");
    } else {
        echo "user not insterted";
    }
}
