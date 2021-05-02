<html>

    <body>
        <?php
            $id = $_GET['id'];
            include('connection.php');

            $sql = "delete from pictures where picture_Id = '$id'";

            if($conn->query($sql) == TRUE){
                echo "Record deleted";

            }

            else{
                echo "Error: ".$sql."<br>".$conn->error;
            }

            header("location:view_album.php");
        ?>

    </body>
</html>
