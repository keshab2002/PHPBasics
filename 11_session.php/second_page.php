<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Page</title>
</head>
<body>
    <center>
        <?php
            $user = $_POST["txtuser"];
            $pass = $_POST["txtpass"];
            echo "User id: ".$user." Password: ".$pass;

            // Setting Session
            session_start();
            $_SESSION["username"] = $user;
            $_SESSION["password"] = $pass; 
        ?>
        <form action="third_page.php" method="post">
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>