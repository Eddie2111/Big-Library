<?php
include("../model/dbconnect.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `email` = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row['password']===$password){
        if($row['isAdmin'] == "true"){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            $_SESSION['isAdmin'] = $row['isAdmin'];
            header("Location: ../view/admin.php");
        }else{
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            $_SESSION['isAdmin'] = $row['isAdmin'];
            header("Location: ../view/index.php");
        }
}
else{
    echo "User not found";
    header( "refresh:3;url=../view/login.php");
}
/*
if($result){
    $row = mysqli_fetch_assoc($result);
    if($row['is_active'] == "true"){
        if($row['is_admin'] == "true"){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            $_SESSION['is_admin'] = $row['is_admin'];
            header("Location: ../view/admin.php");
        }else{
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            $_SESSION['is_admin'] = $row['is_admin'];
            header("Location: ../view/index.php");
        }
    }else{
        echo "Policy violation detected. User not active";
        header( "refresh:3;url=../view/login.php");
    }
}else{
    echo "User not found";
    header( "refresh:3;url=../view/login.php");
}
*/

?>