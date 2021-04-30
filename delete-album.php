<html>

    <body>
        <?php
            $id = $_GET['id'];
            include('connection.php');

            $sql = "delete from album where Album_Id = '$id'";

            if($conn->query($sql) == TRUE){
                echo "Album deleted";

            }

            else{
                echo "Error: ".$sql."<br>".$conn->error;
            }

            header("location:list_albums.php");
        ?>

    </body>
</html>
