<?php
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

include "connect.php";
$check = "SELECT * FROM admins WHERE username = '$username'  AND password = '$password'";
$query = $conn -> query($check); 

if($query -> num_rows > 0 ){
    $admin = $query -> fetch_assoc();
    $id = $admin['id'];
    $_SESSION['login_id'] = $id;
    header("location:../index.php");
}else{
    $_SESSION['login_error'] = "<div class='alert alert-danger'> Wrong Credentails! </div>"; 
    header("location:../login.php");
}
