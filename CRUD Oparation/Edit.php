<?php
include("connection.php");
$id = $_GET['id'];
$select = "SELECT * FROM info WHERE id=$id";
$sqli = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($sqli);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
             body{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);

        }
        fieldset{
            width: fit-content;
        }
        input{
            padding: 5px;
        }
        .submit{
            background: #000;
            color: white;
            border: none;
            padding: 5px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <Legend>Update User</Legend>
            <label for="">Name</label> <br>
            <input type="text" name="name" value="<?php echo $row['Name'] ?>"> <br>
            <label for="">Age</label><br>
            <input type="number" name="age" value="<?php echo $row['Age']  ?>"><br>
            <label for="">District</label><br>
            <input type="text" name="district" value="<?php echo $row['District']  ?>"> <br><br>
            <input type="submit" value="Update" name="Submit" class="submit">
        </fieldset>
    </form>
</body>

</html>

<?php
if (isset($_POST["Submit"])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $district = $_POST['district'];
    $sqli = "UPDATE info SET Name='$name',Age='$age',District='$district' WHERE id='$id'";
    $run = mysqli_query($conn, $sqli);

    if ($run) {
        header("Location:Display.php");
    }
}


?>