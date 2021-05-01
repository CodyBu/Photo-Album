<?php
    session_start();
    $email = $_GET['email'];
    $password = $_GET['password'];


    include("connection.php");

    $sql = "SELECT * FROM users where User_Email = '$email' and User_Password = '$password'";

    $results = mysqli_query($conn, $sql);
    $users = mysqli_num_rows($results);
    $row = mysqli_fetch_array($results);


    $_SESSION['name'] = $row['User_Name'];
    $_SESSION['email'] = $row['User_Email'];
    $_SESSION['dob'] = $row['User_Dob'];
    $_SESSION['dom'] = $row['User_Dom'];
    $_SESSION['pic'] = $row['User_Picture'];
    $_SESSION['user_id'] = $row['User_Id'];
    $_SESSION['album_id'] = $row['Album_Id'];

    if($users >0){
        
        include("home.php");
    }

    else{
        header("location:index.php?msg=User not found");
    }
?>
