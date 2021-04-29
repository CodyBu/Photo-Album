<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        
    </head>

    <body>

        <?php
                include ("nav.php");
        ?> 

  
        <div class = "container">
            <form name = "form1" method = "post" action = "create_album_action.php" enctype = "multipart/form-data">
                <table class = "table table-bordered table-striped table-hover">

                    <div class = "form-group">
                        <tr>
                            <td colspan = "2" align = "center"><h2>Create Album</h2></td>
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
                                <td><label><h4>Album Title</h4></label></td>
                                <td><input type = "text" name = "title" class = "form-control" placeholder = "Enter an album name" required></td>

                            </tr>

                            <tr>
                                <td><label><h4>Album Description</h4></label></td>
                                <td><input type = "text-field" name = "description" class = "form-control" placeholder = "Enter an album description" required></td>
                        
                            </tr>

                            <tr>
                                <td><label><h4>Upload a cover picture</h4></label></td>
                                <td><input type = "file" name = "pic" required></td>

                            </tr>

                            <tr>
                                <td colspan = "2">
                                    <div>
                                        <input type = "submit" name = "submit" value =  "Create Album">
                                    </div>
                                </td>

                            </tr>
                    </div>
                </table>
            </form>
        </div>
    </body>
</html>