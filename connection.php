<html>
    <body>

        <?php
        // create a connection to database
            $conn = mysqli_connect("localhost","root","", "PhotoAlbum");  //name of host, username, password (for wamp, password is empty)

            if(!$conn){
                die("Connection failed: ".mysqli_connect_error());
            }

            else{

                echo "Connected successfully";
            }

            //connect to database:
            mysqli_select_db($conn, "PhotoAlbum") or die ("Could not connect to the database"); //workdatabase1: name of database
            echo "Connect to the dadabase successfully";

        ?>

    </body>
</html>

<html>

