<?php
 include("connection.php");
$id=$_GET['id'];
$sqli = "SELECT * FROM todolist WHERE id='$id' ";
$run= mysqli_query($conn,$sqli);
$row = mysqli_fetch_assoc($run);
?>


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
            <input type="text" name="Newitem" value="<?php echo $row['Items']; ?>">
            <button  name="submit">Save</button>
        </form>
        <Table>
            <?php
            if(isset($_POST['submit'])){
                $newitem=$_POST['Newitem'];
                $sqli="UPDATE todolist SET items='$newitem' WHERE id='$id'";
                $run=mysqli_query($conn,$sqli);

                if($run==true){
                    header("location:index.php");
                }
            }
            ?>
        </Table>
    </div>


</body>

</html>





