<?php
include('connection.php');
$select = "SELECT * FROM info";
$sqli = mysqli_query($conn, $select);
$run = mysqli_num_rows($sqli);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table {
         border: none;
         width: 100%;
         text-align: center;
         margin-top: 10%;
         justify-content: center;
      }

      table th {
         font-size: 20px;
         border-bottom: 2px solid #ccc;
      }

      button {
         background-color: skyblue;
         border: none;
         color: white;
         border-radius: 2px;
         padding: 5px;
      }
      h3{
         text-align: center;
      }

      button a{
         text-decoration: none;
         color: white;
         font-weight: bolder;

      }
      .delete{
         background-color: red;
      }

   </style>
</head>

<body>
   <h3>LIST OF USER</h3>
   <table>
      <tr>
         <th>NO</th>
         <th>NAMES</th>
         <th>AGE</th>
         <th>DISTRICT</th>
         <th>ACTION</th>

      </tr>
      <?php
      if ($run > 0) {
         while ($row = mysqli_fetch_assoc($sqli)) {
      ?>
            <tr>
               <td><?php echo $row['id'] ?></td>
               <td><?php echo $row['Name'] ?></td>
               <td><?php echo $row['Age'] ?></td>
               <td><?php echo $row['District'] ?></td>
               <td> <button id="edit"><a href="Edit.php ?id=<?php echo $row['id'] ?>">Edit</a></button>
                     <button class="delete"><a href="Delete.php ?id=<?php echo $row['id'] ?>">Delete</a></button></td>
            </tr>
      <?php
         }
      }
      ?>
   </table>
</body>

</html>