<html>
    <head>
        <title>User Login</title>
    </head>
    <body>
        <center>
            <form method = post action="checkLogin.php">
                <table border = 1>
                    <tr>
                        <th>User Id</th>
                        <td><input type="text" name= "txtuser"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name = "txtpass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="submit">
                            <input type="reset" value="reset">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>