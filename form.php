<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>

    <body>
        <form name = "form1" method = "post" action = "reg_action.php" enctype = "multipart/form-data">

        <table with = "356" border = "1" class = "table">
            <tr>
                <td colspan = "2"><div align = "center">User Registration form</div></td>
            </tr>

            <tr>
                <td colspan = "2">
                    <?php
                        error_reporting(0);
                        echo $_GET['msg'];
                    ?>
                
                </td>

            </tr>

            <tr>
                <td width = "178">Name</td>
                <td><input type = "text" name = "name"></td>

            </tr>

            <tr>
                <td width = "178">Email</td>
                <td><input type = "text" name = "email"></td>

            </tr>

            <tr>
                <td width = "178">Password</td>
                <td><input type = "text" name = "password"></td>

            </tr>

            <tr>
                <td width = "178">Your picture</td>
                <td><input type = "file" name = "pic"></td>

            </tr>

            <tr>
                <td colspan = "2">
                    <div>
                        <input type = "submit" name = "submit" value =  "Register">
                    </div>
                </td>

            </tr>


        </table>
        </form>
    </body>
</html>