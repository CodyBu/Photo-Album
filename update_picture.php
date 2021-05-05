<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        
    </head>

    <body>
     
        <?php
                include ("nav.php");
                $id = $_GET["id"];
        ?> 
       
  
        <div class = "container">
        <a class="btn btn-secondary" href="profile.php" role="button">Back</a>
            <form name = "form1" method = "post" action = "execute_update_picture.php" enctype = "multipart/form-data">
            <input type = "hidden" name = "id" value = "<?php echo $id;?>">
                <table class = "table table-bordered table-striped table-hover">


                    <div class = "form-group">
                        <tr>
                            <td colspan = "2" align = "center"><h2>Update pictures</h2></td>
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
                                <td><div name = 'album_id'></div></td>
                             

                            </tr>
                    </div>

                    <div class = "form-group">

                           

                            <tr>
                                <td><label><h4>Picture Title</h4></label></td>
                                <td><input type = 'text' name = 'title' class = 'form-control' placeholder = 'Cannot have special characters'></td>
                                 
                                

                            </tr>

                            <tr>
                                <td><label><h4>Picture Note</h4></label></td>
                                <td><input type = "text-field" name = "note" class = "form-control" placeholder = "Enter picture note" required></td>
                        
                            </tr>

                                                    
                            <tr>
                                <td colspan = "2">
                                    <div>
                                        <input type = "submit" name = "submit" value =  "Update picture">
                                    </div>
                                </td>

                                

                            </tr>
                    </div>
                </table>
            </form>
        </div>
    </body>
</html>
