<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

      

    <body>
    
        <?php
                include ("nav.php");
        ?> 
    </head>
        <div class = "container">
            <form name = "form" method = "get" action = "login_action.php">
                <table class = "table table-bordered table-striped table-hover">

                    <div class = "form-group">
                        <tr>
                            <td colspan = "2" align = "center"><h2>User Login Form</h2></td>
                        </tr>
                    </div>
                    
                    <tr>
                        <td>
                            <?php
                                error_reporting(0);
                                echo $_GET['msg'];
                            ?>

                         
                        </td>
                    </tr>


                    <div class = "form-group">

                        <tr>
                            <td><label><h4>Email</h4></label></td>
                            <td><input type = "email" name = "email" class = "form-control" placeholder = "Type your email"></td>
                        </tr>

                        <tr>
                            <td><label><h4>Password</h4></label></td>
                            <td><input type = "password" name = "password" class = "form-control" placeholder = "Type your password"></td>
                        </tr>

                        <tr>
                           
                            <td colspan = "2"><button type = "submit" class = "btn btn-outline-primary">Submit</button></td>
                        </tr>

                        <tr>
                           
                           <td colspan = "2"><h6>New USer?<a href = "form1.php"> Click here </a>to register</h6></td>
                       </tr>

                    </div>
                </table>
            </form>
        </div>
    </body>
</html>
