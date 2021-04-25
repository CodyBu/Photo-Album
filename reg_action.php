<html>
    <body>
        <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $filename = $_FILES['pic']['name'];
            $size = $_FILES['pic']['size'];
            $type = $_FILES['pic']['type'];
            $tmpname = $_FILES['pic']['tmp_name'];

            /*echo $name.'<br>';
            echo $email.'<br>';
            echo $password.'<br>';
            echo $filename.'<br>';
            echo $size.'<br>';
            echo $type.'<br>';
            echo $tmpname.'<br>';*/

            $destination = "uploads/".rand().$filesname;        //generate random number & concatinate with filename & store in folder "uploads"
            move_uploaded_file($tmpname,$destination);


            include("connection.php");

            $sql = "INSERT INTO users (user_Name, user_Email, user_Password, user_Picture) VALUES ('$name', '$email', '$password', '$destination');";

            if($conn->query ($sql) == TRUE){

                echo "New record created successfully";

            }

            else{
                echo "Error".$sql.'<br>'.$conn->error;
            }

            header("location:form.php?msg=Registration successful");   


        ?>
    </body>
</html>