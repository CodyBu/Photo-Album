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
                            <td colspan = "5" align = "center"><h2>Pictures</h2></td>
                        </tr>
                    </div>

                    <div class = "form-group">
                        <tr align="center">
                            <th style="width:20%">Title</th>
                            <th style="width:20%">Picture</th>
                            <th style="width:20%">Note</th>
                          
                     
                        </tr>
                        <form id = "albumForm" action = "list_pictures.php" method = "post">
                            <?php
                                include("connection.php");

                                $sql = "SELECT * FROM PICTURES WHERE User_id = " . $_SESSION['user_id'];
                            
                                $results = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr><td align = 'center'>".$row[3]."</td>";
                                    echo "<td align = 'center'>"."<img style='height: 100px; width: 100px;' src='" . $row['Album_Cover'] . "'></td>";
                                    echo "<td align = 'center'>" . $row['Album_Notes'] . "</td>";
                                    

                                };
                                
                            ?>
                        </form>
                    </div>
                </table>

        </div>
    </body>
</html>
