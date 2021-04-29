<?php
    ob_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $dom = $_POST['dom'];

    $filename = $_FILES['pic']['name'];
    $tmpname = $_FILES['pic']['tmp_name'];

    $destination = "uploads/profile-photos/".rand().$filename;        //generate random number & concatinate with filename & store in folder "uploads"
    move_uploaded_file($tmpname,$destination);

    include("connection.php");

    $sql = "INSERT INTO users (User_Name, User_Email, User_Password, User_Dob, User_Dom, User_Picture) VALUES ('$name', '$email', '$password', '$dob', '$dom', '$destination');";

    if($conn->query ($sql) == TRUE){

        header("location:register.php?msg=Registration successful");

    }

    else{
        echo "Error".$sql.'<br>'.$conn->error;
    }
?>
