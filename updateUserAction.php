<?php

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $dom = $_POST['dom'];
    $filename = $_FILES['pic']['name'];
    $size = $_FILES['pic']['size'];
    $type = $_FILES['pic']['type'];
    $tmpname = $_FILES['pic']['tmp_name'];

    $destination = "uploads/".rand().$filename;
    move_uploaded_file($tmpname, $destination);

    include('connection.php');
    $sql = "update users SET User_Name = '$name', User_Email = '$email', User_Password = '$password', User_Dob = '$dob', User_Dom = '$dom', User_Picture = '$destination' where user_Id = '$id'";

    if($conn->query($sql) === TRUE) {

            //echo "Record updated successfully";
            //header("location:update.php?msg=Record updated");
            header("location:index.php");
    }
    else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }
