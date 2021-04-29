<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    </head>

    <body>
      <?php
              include ("nav.php");
      ?>
                <table class = "table table-striped table-hover" width = "100%">
                    <tr height = "15%">
                        <td colspan = "3" align = "center">
                            <?php
                                session_start();
                                $pic = $_SESSION['pic'];

                                echo "<img src = ";
                                echo $pic;
                                echo " style = 'height:100px'>";

                                echo "<h3>Welcome ".$_SESSION['name']."</h3>";

                            ?>
                        </td>
                    </tr>



                        <td><h3>About me:</h3>
                            <p>
                            <?php
                                //session_start();
                                echo "My name is: ".$_SESSION['name']."<br>";
                                echo "My DOB is: ".$_SESSION['dob']."<br>";
                                echo "I am from: ".$_SESSION['dom']."<br>";

                            ?>
                            </p>

                        </td>
                    </tr>

                    <tr height = "5%">
                        <td colspan = "3" align = "center">&copy; All right reserved</td>
                    </tr>
                </table>

    </body>
</html>
