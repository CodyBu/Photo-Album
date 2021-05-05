<?php 
   $id = $_POST['id'];  

    $title = $_POST['title'];
    $note = $_POST['note'];   

   

    include('connection.php');
  

    $sql = "update pictures SET  Picture_Title = '$title', Picture_Note = '$note' where picture_id = '$id'";

    if($conn->query($sql)===TRUE)
    {
       
        header("location:profile.php?msg = Record updated");
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

?>