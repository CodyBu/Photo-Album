<html>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
      <?php
              include ("nav.php");
      ?>
        <?php
            include('connection.php');
            $sql = "select * from users";
            $result = mysqli_query($conn, $sql);

            //how many rows in the table:
            $users = mysqli_num_rows($result);

        ?>
<div class = "container" style = "padding-top:50px" >
    <h2><center> Users</center></h2>
        <table class = "table table-striped" border = "1" align = "center">
            <th>User Name</th>
            <th>Location</th>
            <th>User Email</th>
            <th>User Picture</th>
            <th colspan = "2">Action</th>
            <?php
                while($rows = mysqli_fetch_array($result)){
                    echo"<tr>";
                    echo"<td>"; echo $rows[1];/*username*/; echo"</td>";
                    echo"<td>"; echo $rows[5];/*Location*/; echo"</td>";
                    echo"<td>"; echo $rows[2];/*email*/; echo"</td>";
                    echo"<td><img src = '";echo$rows[6];/*filename, at column 4 in the table*/echo"' height = 100, width = 100></td>";
                    echo "<td colspan = '2'><a href = delete_user.php?id=";echo $rows[0];echo">Delete | </a>";
                    echo "<a href = update_user.php?id=";echo $rows[0];echo">Update</a></td>"; 

                    echo"</tr>";
                }
            ?>
        </table>
</div>

    </body>


</html>