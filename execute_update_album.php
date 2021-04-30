<?php 
    $id = $_POST['id'];  

    $title = $_POST['title'];
    $description = $_POST['description'];

   

    $filename = $_FILES['pic']['name'];           
    $tmpname = $_FILES['pic']['tmp_name'];

    $destination = "uploads/profile-photos/".rand().$filename;
    move_uploaded_file($tmpname, $destination);

    include('connection.php');
  

    $sql = "update album SET Album_Cover = '$destination', Album_Title = '$title', Album_Notes = '$description' where album_id = '$id'";

    if($conn->query($sql)===TRUE)
    {
        echo "Record updated successfully";
        header("location:list_albums.php?msg = Record updated");
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

?>