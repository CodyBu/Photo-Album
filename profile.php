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
        <div class = "container" style = "padding-top:50px" >
                <table class = "table table-striped" width = "100%">
                    <tr height = "15%">
                        <td colspan = "5" align = "center">
                            <?php
                                $pic = $_SESSION['pic'];

                                echo "<img src = ";
                                echo $pic;
                                echo " style = 'height:100px'>";

                                echo "<h3>Welcome ".$_SESSION['name']."</h3>";

                            ?>
                        </td>
                    </tr>
                        <td colspan = "2"><h3>About me:</h3>
                            <p>
                            <?php

                                //session_start();

                                echo "My name is: ".$_SESSION['name']."<br>";
                                echo "My DOB is: ".$_SESSION['dob']."<br>";
                                echo "I am from: ".$_SESSION['dom']."<br>";
                                echo "My email is: ".$_SESSION['email']."<br>"."<br>";
                                echo "<a href = delete_user.php?id=";echo $_SESSION['user_id'];echo">Delete | </a>";
                                echo "<a href = update_user.php?id=";echo $_SESSION['user_id'];echo">Update</a></td>";

                            ?>
                            </p>

                        </td>
                    </tr>

                    <tr>
                                <td colspan = "5">
                                    <div>
                                    <a href = "create_album.php">Create new album </a>
                                   
                                    </div>
                                    
                                </td>

                            </tr>

                    <tr height = "5%">
                        <td colspan = "5" align = "center"><h3>My albums</h3></td>
                    </tr>
                        
                        <div class = "form-group">
                        
                        <tr align="center">
                            <th style="width:20%">Title</th>
                            <th style="width:20%">Cover Picture</th>
                            <th style="width:20%">Description</th>
                            <th style="width:20%">View</th>
                            <th colspan = '2'>Action</td>
                        </tr>
                        <form id = "albumForm" action = "view_album.php" method = "post">
                            <?php
                                include("connection.php");

                                $sql = "SELECT * FROM ALBUM WHERE User_id = " . $_SESSION['user_id'];
                            
                                $results = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr><td align = 'center'>".$row[3]."</td>";
                                    echo "<td align = 'center'>"."<img style='height: 100px; width: 100px;' src='" . $row['Album_Cover'] . "'></td>";
                                    echo "<td align = 'center'>" . $row['Album_Notes'] . "</td>";
                                    echo "<td align = 'center'><input type='radio' class='btn-check' name='selected' value='" . $row['Album_Id'] . "' id='" . $row['Album_Id'] . "' onclick='submit()'><label class='btn btn-primary' for='" . $row['Album_Id'] . "'>View</label></td>";
                                    echo "<td colspan = '2' align = 'center'><a href = delete-album.php?id=";echo $row[0];echo">Delete | </a>";
                                    echo "<a href = update-album.php?id=";echo $row[0];echo">Update</a></td></tr>";    

                                };
                                
                            ?>
                        </form>
                    </div>

                        </td>
                    </tr>


                    <tr height = "5%">
                        <td colspan = "5" align = "center">&copy; All right reserved</td>
                    </tr>
                </table>
        </div>
    </body>
</html>
