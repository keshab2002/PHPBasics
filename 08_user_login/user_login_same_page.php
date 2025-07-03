<html>
    <head>
        <title>User log in in PHP</title>
    </head>
    <body>
        <center>
            <form method = post action="">
                <table border= 1>
                    <tr>
                        <th>User Id: </th>
                        <td><input type="text" name = "txtuser"></td>
                    </tr>
                    <tr>
                        <th>Password: </th>
                        <td><input type="password" name = "txtpass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Submit" name = "submitbtn">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_POST["submitbtn"])){    

                    $user = $_POST["txtuser"];
                    $pass = $_POST["txtpass"];
                    if(strcmp($user, "keshab") == 0 and strcmp($pass,"2002") == 0){
                        // echo "Welcome ".$user."... Your passcode is: ".$pass;
                        header("Location: front_page.php");
                    }
                    else{
                        echo "Sorry ".$user."! You don't have an accout ...<br>";
                    }

                }
            ?>
        </center>
    </body>
</html>