<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        
    </head>

    <body>

        <?php
                include ("nav.php");
        ?> 

  
        <div class = "container">
            <form name = "form1" method = "post" action = "reg_action.php" enctype = "multipart/form-data">
                <table class = "table table-bordered table-striped table-hover">

                    <div class = "form-group">
                        <tr>
                            <td colspan = "2" align = "center"><h2>User Registration Form</h2></td>
                        </tr>
                    </div>

                    

                    <div class = "form-group">

                            <tr>
                                <td>
                                    <?php
                                        error_reporting(0);
                                        echo $_GET['msg'];
                                    ?>

                                
                                </td>
                            </tr>
                    </div>

                    <div class = "form-group">
                            <tr>
                                <td><label><h4>Name</h4></label></td>
                                <td><input type = "text" name = "name" class = "form-control" placeholder = "Type your name"></td>

                            </tr>

                            <tr>
                                <td><label><h4>Email</h4></label></td>
                                <td><input type = "text" name = "email" class = "form-control" placeholder = "Type your email"></td>

                            </tr>

                            <tr>
                                <td><label><h4>Password</h4></label></td>
                                <td><input type = "password" name = "password" class = "form-control" placeholder = "Type your password"></td>

                            </tr>

                            <tr>
                                <td><label><h4>Date of Birth</h4></label></td>
                                <td><input type = "date" name = "dob" class = "form-control" placeholder = "Type your DOB"></td>

                            </tr>

                            <tr>
                                <td><label><h4>Residence</h4></label></td>
                                <td>
                                    <select class = "form-control" name = "dom">
                                        <option value = "NY">New York</option>
                                        <option value = "NJ">New Jersey</option>
                                        <option value = "CA">California</option>
                                        <option value = "FL">Florida</option>
                                        <option value = "WA">Washington</option>

                                </td>
                        
                            </tr>

                            <tr>
                                <td><label><h4>Upload your profile picture</h4></label></td>
                                <td><input type = "file" name = "pic" class = "form-contro"></td>

                            </tr>

                            <tr>
                                <td colspan = "2">
                                    <div>
                                        <input type = "submit" name = "submit" value =  "Register">
                                    </div>
                                </td>

                            </tr>

                        <tr>
                           
                                <td colspan = "2"><h6>Already have an account?<a href = "index.php"> Click here </a>to login</h6></td>
                            </tr>
                            


                    </div>
                </table>
            </form>
        </div>
    </body>
</html>
