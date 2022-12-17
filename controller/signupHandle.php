<?php
include("../model/dbconnect.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$confirmPassword = $_POST['confirmPassword'];

if($password == $confirmPassword){
    $isAdmin = "false";
    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `isAdmin`) VALUES ('$name', '$email', '$password', '$isAdmin')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "User Created";
        header( "refresh:3;url=../view/login.php");
    }else{
        echo "User not created";
        header( "refresh:3;url=../view/signup.php");
    }
}else{
    echo "Password not matched";
    header( "refresh:3;url=../view/signup.php");
}


?>