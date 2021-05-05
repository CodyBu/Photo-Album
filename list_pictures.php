
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
                            <td colspan = "3" align = "center"><h2>
                                <?php 
                                    
                                    echo "<h3>Pictures in Album " .$_SESSION['album_id']. "</h3>"; 
                                ?>
                            </td>
                            
                        </tr>
                        <tr>
                        <td colspan = "3"><div name = 'album_id'></div></td>
                        </tr>
                    </div>

                    <div class = "form-group">
                        
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Note</th>
                        </tr>
                        <form>
                            <?php
                                include("connection.php");
                                
                                $sql = "SELECT * FROM PICTURES WHERE Album_Id = " .$_SESSION['album_id'];
                            
                                $results = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr><td>".$row[3]."</td>";
                                    echo "<td>" . $row[3] . "<br><img style='height: 200px; width: 200px;' src='" . $row[2] . "'></td>";
                                    echo "<td>" . $row[4] . "</td>";
                                   
                                    echo "</tr>";
                                    
                                };                        
                            
                            ?>
                        </form>
                    </div>
                </table>
        </div>
    </body>
</html>
