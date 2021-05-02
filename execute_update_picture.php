<?php 
   $id = $_POST['id'];  

    $title = $_POST['title'];
    $note = $_POST['note'];   

    $filename = $_FILES['pic']['name'];           
    $tmpname = $_FILES['pic']['tmp_name'];

    $destination = "uploads/pictures/".rand().$filename;
    move_uploaded_file($tmpname, $destination);

    include('connection.php');
  

    $sql = "update pictures SET Picture_Image = '$destination', Picture_Title = '$title', Picture_Note = '$note' where picture_id = '$id'";

    if($conn->query($sql)===TRUE)
    {
       
        header("location:view_album.php?msg = Record updated");
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

?>