<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asscessig my database</title>
</head>
<body>
    <center>
        <?php
            // Three step to connet with database
            // 1. Create connection
            // $mydb = mysqli_connect("127.0.0.1", "root", "", "employee");
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "employee";

            
            $mydb = mysqli_connect('localhost', 'root', '', 'employee');
            echo "Database connected!<br";
        ?>
    </center>
</body>
</html>