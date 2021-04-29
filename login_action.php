<?php
    session_start();
    $email = $_GET['email'];
    $password = $_GET['password'];
        

    include("connection.php");

    $sql = "SELECT * FROM users where User_Email = '$email' and User_Password = '$password'";

    $results = mysqli_query($conn, $sql);
    $users = mysqli_num_rows($results);
    $row = mysqli_fetch_array($results);

    $_SESSION['email'] = $row['User_Email'];
    $_SESSION['user_id'] = $row['User_Id'];

    if($users >0){
        include("nav.php");
        include("login_function.php");
    }
    
    else{
        header("location:index.php?msg=User not found");
    }
?>
