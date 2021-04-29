<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        
    </head>

    <body>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><b>Album App</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
    	</div>
    </nav>
  
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
                                <td><input type = "text" name = "name" class = "form-control" placeholder = "Type your name" required></td>

                            </tr>

                            <tr>
                                <td><label><h4>Email</h4></label></td>
                                <td><input type = "text" name = "email" class = "form-control" placeholder = "Enter your email" pattern = "^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$" required></td>

                            </tr>

                            <tr>
                                <td><label><h4>Password</h4></label></td>
                                <td><input type = "password" name = "password" class = "form-control" placeholder = "Enter your password" required></td>

                            </tr>

                            <tr>
                                <td><label><h4>Date of Birth</h4></label></td>
                                <td><input type = "date" name = "dob" class = "form-control" placeholder = "Enter your DOB" required></td>

                            </tr>

                            <tr>
                                <td><label><h4>Residence</h4></label></td>
                                <td><input type = "text" name = "dom" class = "form-control" placeholder = "Enter your residence"></td>
                        
                            </tr>

                            <tr>
                                <td><label><h4>Upload your profile picture</h4></label></td>
                                <td><input type = "file" name = "pic" required></td>

                            </tr>

                            <tr>
                                <td colspan = "2">
                                    <div>
                                        <input type = "submit" name = "submit" value =  "Register">
                                    </div>
                                </td>

                            </tr>
                    </div>
                </table>
            </form>
        </div>
    </body>
</html>
