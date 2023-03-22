<?php
include ("./Class/connection.php");
include "./Class/user.Class.php";
session_start();

$username_pattern = "/^[a-zA-Z0-9]{4,20}$/";
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$password_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/";

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$h_password = password_hash($password, PASSWORD_DEFAULT);

if (!preg_match($username_pattern, $username)){
    $_SESSION['error'] = "Username should contain one uppercase and one number";
} else if(!preg_match($email_pattern, $email)){
    $_SESSION['error'] = "Invalid Email Format. Please try again!!!";
} else if(!preg_match($password_pattern,$password)){
    $_SESSION['error'] = "Invalid Password Format. Please try again!!!";
} else if($password != $confirm_password){
    $_SESSION['error'] = "Password doesnot matches. Please try again!!!";
} else if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Username='$username'")) > 0){     
    $_SESSION['error'] = "Username Already Taken!!";
} else if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Email='$email'")) > 0){
    $_SESSION['error'] = "Email Already Taken";
}else{
    $_SESSION['success'] = "Congratulations!! Your account has been created in";
    insertUser($username, $h_password, $email);
}

echo '<script>window.location.href = "../Frontend/logincreate/SignUp.php"</script>';
?>