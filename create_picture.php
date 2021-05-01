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
                                        echo $_GET['msg'];
                                    ?>

                                
                                </td>
                                <?php

                                
                                if ($_GET['msg']!=""){
                                    echo "<td colspan = '2'><h6><a href = 'view_album.php'>Click here to view the album</a></h6></td>";
                                }
                                else{
                                    echo"";
                                }
                                ?>

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
                                    include("connection".php);
                                    $sql = "select ALBUM.Abum_Title
                                            from ALBUM.Album_Id, ALBUM.Abum_Title, ALBUM.User_Id, USERS_User_Id
                                            where ALBUM.User_Id = USERS_User_Id";
                                    
                                    $result = mysqli_query($conn, $sql);
                                    $users = mysqli_num_rows($result);
                                    
                                    echo "<input list = 'album' name = 'album_id'>";
                                    echo "<datalist id = 'albums'>";

                                    for ($i = 0; $i<album; $i ++){

                                        $rows = mysqli_fetch_array($result);

                                        echo "<option value = ";
                                        echo $rows['Album_Title'];
                                        echo ">";
                                    }
                                        
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
