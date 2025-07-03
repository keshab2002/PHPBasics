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

            // Setting Cookie
            $cookie_user_name = "user_name";
            $cookie_user_vaule = $user;
            setcookie($cookie_user_name, $cookie_user_vaule);

            $cookie_pass_name = "password";
            $cookie_pass_value = $pass;
            setcookie($cookie_pass_name, $cookie_pass_value);
        ?>
        <form action="third_page.php" method="post">
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>