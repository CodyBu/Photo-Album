<?php
    ob_start();
    $id = $_GET['id'];
    include('connection.php');

    $sql = "delete from album where Album_Id = '$id'";

    $conn->query($sql);

    header("location:profile.php");
?>
