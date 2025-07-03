<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first page</title>
</head>
<body>
    <center>
        <form method = "post" action="second_page.php">
            <table>
                <tr>
                    <th>user id: </th>
                    <td><input type="text" name = "txtuser"></td>
                </tr>
                <tr>
                    <th>password: </th>
                    <td><input type="password" name = "txtpass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value = "Submit" name="submitbtn">
                        <input type="reset" value = "Reset" name="resetbtn">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>