<html>
    <body>

        <?php
        // create a connection to database
            $conn = mysqli_connect("localhost","root","root", "PhotoAlbum");  //name of host, username, password (for wamp, password is empty)

            if(!$conn){
                die("Connection failed: ".mysqli_connect_error());
            }
        ?>

    </body>
</html>

<html>

