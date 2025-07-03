<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third Page</title>
</head>
<body>
    <center>
        <?php
            $user = $_COOKIE["user_name"];
            $pass = $_COOKIE["password"];
            echo "User id: ".$user." Password: ".$pass;

        ?>
    </center>
</body>
</html>