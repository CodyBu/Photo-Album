<?php
    ob_start();
    session_start();
    $title = $_POST['title'];
    $description = $_POST['description'];
    $user = $_SESSION['user_id'];

    $filename = $_FILES['pic']['name'];           
    $tmpname = $_FILES['pic']['tmp_name'];

    $destination = "uploads/cover-photos/".rand().$filename;       
    move_uploaded_file($tmpname,$destination);

    include("connection.php");

    $sql = "INSERT INTO ALBUM (User_Id, Album_Cover, Album_Title, Album_Notes) VALUES ($user, '$destination', '$title', '$description');";

    if($conn->query ($sql) == TRUE){

        header("location:create_album.php?msg=Album Created!");   

    }

    else{
        echo "Error".$sql.'<br>'.$conn->error;
    }
?>
