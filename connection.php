<html>
    <body>

        <?php
        // create a connection to database
            $conn = mysqli_connect("localhost","root","");  //name of host, username, password (for wamp, password is empty)

            if(!$conn){
                die("Connection failed: ".mysqli_connect_error());
            }

            else{

                echo "Connected successfully";
            }

            //connect to database:
            mysqli_select_db($conn, "workdatabase1") or die ("Could not connect to the database"); //workdatabase1: name of database
            echo "Connect to the dadabase successfully";
/*<body>
            
            <?php
                    $conn = mysqli_connect("localhost", "root", "root");

                    if(!$conn) {

                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else {

                        echo "Connected successfully";
                    }

                    mysqli_select_db($conn, "ourWorkDB1") or die("Could not connect to the database");
                    echo "Connected to the database successfully";

            ?>

</body>

</html>*/
        ?>

        

    </body>
</html>

<html>

