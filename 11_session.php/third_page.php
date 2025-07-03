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
            session_start();
            $user = $_SESSION["username"];
            $pass = $_SESSION["password"];
            echo "User id: ".$user." Password: ".$pass;
            session_unset();
            session_destroy();
        ?>
    </center>
</body>
</html>