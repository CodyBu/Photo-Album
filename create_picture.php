<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        
    </head>

    <body>

        <?php
                include ("nav.php");
          
        ?> 

  
        <div class = "container">
            <form name = "form1" method = "post" action = "create_picture_action.php" enctype = "multipart/form-data">
                <table class = "table table-bordered table-striped table-hover">

                    <div class = "form-group">
                        <tr>
                            <td colspan = "2" align = "center"><h2>Upload pictures</h2></td>
                        </tr>
                    </div>

                    

                    <div class = "form-group">

                            <tr>
                                <td>
                                    <?php
                                        error_reporting(0);
                                        echo $_GET['msg']."<br>";
                                
                                        if ($_GET['msg']!=""){
                                            echo "<h6><a href = 'view_album.php'>Click here to view the album</a></h6>";
                                        }
                                        else{
                                            echo"";
                                        }
                                        

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
                                <td><label><h4>Upload a cover picture</h4></label></td>
                                <td><input type = "file" name = "pic" value = "Browse..."   required></td>

                            </tr>

                            <tr>
                                <td><label><h4>Select the Album</h4></label></td>
                                <td>
                                <?php
                                    include("connection.php");

                                    $sql = "SELECT Album_Id, Album_Title FROM ALBUM WHERE User_Id = " . $_SESSION['user_id'];
                                    
                                    $results = mysqli_query($conn, $sql);
                                    
                                    echo "<select name = 'album'>";

                                    while($row = mysqli_fetch_array($results)){
                                        echo "<option value = '" . $row['Album_Id'] . "' required>" .  $row['Album_Title'] . "</option>";
                                    }
                                    echo "</select>";
                                ?>

                                </td>

                            </tr>

                            
                            <tr>
                                <td colspan = "2">
                                    <div>
                                        <input type = "submit" name = "submit" value =  "Upload picture">
                                    </div>
                                </td>

                                

                            </tr>
                    </div>
                </table>
            </form>
        </div>
    </body>
</html>
