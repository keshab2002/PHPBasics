<html>
    <head>
        <title>Student Login</title>
    </head>
    <body>
        <center>
            <form method = post action="">
                <table border = 1>
                    <tr>
                        <th>Student Id: </th>
                        <td><input type="text" name = "txtuser"></td>
                    </tr>
                    <tr>
                        <th>Password: </th>
                        <td><input type="password" name="txtpass" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Submit" name = "submitbtn">
                            <input type="reset" value="Reset" name = "resetbtn">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if( isset($_POST["submitbtn"])){
                    echo "Hello";
                    $user = $_POST["txtuser"];
                    $pass = $_POST["txtpass"];
                    if(strcmp($user, "keshab") == 0 && strcmp($pass, "1234") == 0){
                        header("Location: std_profile.php");
                    }
                    else{
                        header("Location: sign_up.php");
                    }
                }
            ?>
        </center>
    </body>
</html>