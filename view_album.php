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
            $_SESSION['album_id'] = $_REQUEST['selected'];
        ?> 

  
        <div class = "container">
            <br>
          <a class="btn btn-secondary" href="list_albums.php" role="button">Back</a>
                <table class = "table table-bordered table-striped table-hover">

                    <div class = "form-group">
                        <tr>
                            <td colspan = "2" align = "center"><h2>Albums</h2></td>
                        </tr>
                    </div>

                    <div class = "form-group">
                        <tr>
                            <td><a href = "create_picture.php">Upload Photos</a></td>
                        </tr>
                        <tr>
                            <th>Picture</th>
                            <th>Description</th>
                        </tr>
                        <form id = "albumForm" action = "view_album.php" method = "post">
                            <?php
                                include("connection.php");

                                $sql = "SELECT * FROM PICTURES WHERE Album_Id = " . $_SESSION['album_id'];
                            
                                $results = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr><td>" . $row['Picture_Title'] . "<br><img style='height: 200px; width: 200px;' src='" . $row['Picture_Image'] . "'></td>";
                                    echo "<td>" . $row['Picture_Note'] . "</td></tr>";
                                };
                                
                            ?>
                        </form>
                    </div>
                </table>
        </div>
    </body>
</html>
