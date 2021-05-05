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
            <br>
          <a class="btn btn-secondary" href="profile.php" role="button">Back</a>
                <table class = "table table-bordered table-striped table-hover">

                    <div class = "form-group">
        
                    <tr height = "5%">
                        <td colspan = "5" align = "center"><h3>ALBUM LIST</h3></td>
                    </tr>
                        
                    <div class = "form-group">
                        
                        <tr align="center">
                            <th style="width:15%">User</th>
                            <th style="width:15%">Title</th>
                            <th style="width:15%">Cover Picture</th>
                            <th style="width:15%">Description</th>
                            <th style="width:20%">View Album</th>
                            
                        </tr>
                        <form id = "albumForm" action = "list_pictures.php" method = "post">
                            <?php
                                include("connection.php");

                                $sql = "SELECT * FROM ALBUM";                             
                                $results = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr><td align = 'center'>".$row[1]."</td>";
                                    echo "<td align = 'center'>".$row[3]."</td>";
                                    echo "<td align = 'center'>"."<img style='height: 100px; width: 100px;' src='" . $row['Album_Cover'] . "'></td>";
                                    echo "<td align = 'center'>" . $row['Album_Notes'] . "</td>";
                                    echo "<td align = 'center'><input type='radio' class='btn-check' name='selected' value='" . $row['Album_Id'] . "' id='" . $row['Album_Id'] . "' onclick='submit()'><label class='btn btn-primary' for='" . $row['Album_Id'] . "'>View Album</label></td>";
                                   
                                };
                                
                            ?>
                        </form>
                    </div>

                        </td>
                    </tr>

                    <tr height = "5%">
                        <td colspan = "5" align = "center">&copy; All right reserved</td>
                    </tr>
                    </div>
                </table>
        </div>
    </body>
</html>
