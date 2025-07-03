<html>
    <head>
        <title>Student Sign Up Page</title>
    </head>
    <body>
        <center>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Full Name: </th>
                        <td><input type="text" name = "full_name"></td>
                    </tr>
                    <tr>
                        <th>Student id: </th>
                        <td><input type="text" name = "std_id"></td>
                    </tr>
                    <tr>
                        <th>Password: </th>
                        <td><input type="password" name = "txtpass"></td>
                    </tr>
                    <tr>
                        <th>University Roll Number: </th>
                        <td><input type="text" name = "uni_roll"></td>
                    </tr>
                    <tr>
                        <th>Branch: </th>
                        <td>    
                            <select name="branch" size="1" >
                                <option value="it">IT</option>
                                <option value="cse">CSE</option>
                                <option value="ece">ECE</option>
                                <option value="me">ME</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Submit" name = "submitbtn">
                            <input type="reset" value = "Reset" name = "resetbtn">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                if(isset($_POST["submitbtn"])){
                    $user = $_POST["full_name"];
                    echo "Hello ".$user."... Your Accoutn has been created!";
                    sleep(3);
                    header("Location: std_login.php");
                }
            ?>
        </center>
    </body>
</html>