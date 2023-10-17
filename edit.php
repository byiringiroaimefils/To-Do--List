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
        <form action="index.php" method="post">
            <input type="text" name="enteritems" value="<?php echo $row['Items']; ?>">
            <!-- <input type="submit"> -->
            <button>+</button>
        </form>
        <Table>
            <tr>
                <th>Id</th>
                <th>Items</th>
            </tr>
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
              <a href='edit.php?id={$items['id']}'>edit</a>
              <a href='Delete.php?id={$items['id']}'>delete</a>
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





