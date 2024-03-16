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
    <div>
        <fieldset>
          <legend>Entering your Infrom</legend>  
            <form action="Insert.php" method="post">
                <label for="">Name</label> <br>
                <input type="text" name="name"> <br>
                <label for="">Age</label><br>
                <input type="number" name="age"><br>
                <label for="">District</label><br>
                <input type="text" name="district"> <br> <br>
                <input type="submit" value="submit" class="submit">
            </form>
        </fieldset>
    </div>
</body>

</html>