<?php
session_start();
/*-------------------------------------------------
**-----------Security----------**
---------------------------------------------------*/
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: ../../index.php");
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['message'];


$error = [];
function seterror($form , $kay , $value){
    global $error;
    if(empty($form)){
       $error[$kay] = $value;
    }

}
seterror($name, "name" , "name is required");
seterror($subject , "subject" , "subject is required");
seterror($email , "email" , "email is required");
seterror($massage , "massage" , "massage is required");

if (empty($error)) {
    include "../connect.php";
    $insert = "INSERT INTO massages 
                (name , email ,subject , massage) 
                 VALUES 
                ('$name', '$email' , '$subject' , '$massage')";

    $query = $conn -> query($insert);   

    if ($query) {
        $_SESSION['done'] = "<div class='alert alert-success'> Done </div>"; 
        header("location: ../../index.php");
       

    }else{
        echo $conn->error;
    }   
}else {
    $_SESSION['error'] = $error;
    header("location: ../../index.php");

}
