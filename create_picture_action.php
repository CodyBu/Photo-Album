<?php
    ob_start();
    
    session_start();

    $title = $_POST['title'];
    $note = $_POST['note'];
    $album = $_POST['album'];
  

    $filename = $_FILES['pic']['name'];           
    $tmpname = $_FILES['pic']['tmp_name'];

    $destination = "uploads/pictures/".rand().$filename;       
    move_uploaded_file($tmpname,$destination);

    include("connection.php");


    $sql = "INSERT INTO PICTURES (Album_Id, Picture_Image, Picture_Title, Picture_Note) VALUES ('$album', '$destination', '$title', '$note');";

    if($conn->query ($sql) == TRUE){

        header("location:create_picture.php?msg=Picture uploaded!");   

    }

    else{
        echo "Error".$sql.'<br>'.$conn->error;
    }
?>
