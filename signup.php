<?php
include ("./Class/connection.php");
include "./Class/user.Class.php";
session_start();

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$h_password = $_SESSION['password'];

if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Username='$username'")) > 0){     
    $_SESSION['error'] = "Username Already Taken!!";
    echo '<script>window.location.href = "../Frontend/logincreate/signup.php"</script>';
} else if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Email='$email'")) > 0){
    $_SESSION['error'] = "Email Already Taken";
    echo '<script>window.location.href = "../Frontend/logincreate/signup.php"</script>';
}else{
    session_destroy();
    $_SESSION['success'] = "Congratulations!! Your account has been created in";
    insertUser($username, $h_password, $email);
}
?>