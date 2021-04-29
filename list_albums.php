<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script>
            function submit(){
                document.getElementByID("albumForm").submit();
            }
        </script>
        
    </head>

    <body>

        <?php
                include ("nav.php");
        ?> 

  
        <div class = "container">
                <table class = "table table-bordered table-striped table-hover">

                    <div class = "form-group">
                        <tr>
                            <td colspan = "3" align = "center"><h2>Albums</h2></td>
                        </tr>
                    </div>

                    <div class = "form-group">
                        <tr>
                            <th>Album</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                        <form id = "albumForm" action = "view_album.php" method = "post">
                            <?php
                                include("connection.php");

                                $sql = "SELECT * FROM ALBUM WHERE User_Id = " . $_SESSION['user_id'];
                            
                                $results = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr><td>" . $row['Album_Title'] . "<br><img style='height: 100px; width: 100px;' src='" . $row['Album_Cover'] . "'></td>";
                                    echo "<td>" . $row['Album_Notes'] . "</td>";
                                    echo "<td><input type='radio' class='btn-check' name='selected' value='" . $row['Album_Id'] . "' id='" . $row['Album_Id'] . "' onclick='submit()'><label class='btn btn-primary' for='" . $row['Album_Id'] . "'>View</label></td></tr>";
                                };
                                
                            ?>
                        </form>
                    </div>
                </table>
                <div>
                        <h6 align ="center">Upload pictures to the album press: <a href = "create_picture.php">here</a></h6>
                </div>
        </div>
    </body>
</html>
