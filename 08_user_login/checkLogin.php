<html>
    <head>
        <title>Check User Login</title>
    </head>
    <body>
        <center>
            <?php
                $user = $_POST["txtuser"];
                $pass = $_POST["txtpass"];
                // echo "User ID: ".$user." and Passcode: ".$pass;
                if(strcmp($user, "keshab") == 0 and strcmp($pass, "2002") == 0){
                    echo "Welcome ".$user.". Your Password is: ".$pass."<br>";
                }
                else{
                    echo "Sorry ".$user."! You don't have an accout ...<br>";
                }
            ?>
        </center>
    </body>
</html>