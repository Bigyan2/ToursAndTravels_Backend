<?php
include "connection.php";
include "queries.php";

$username_pattern = "/^[a-zA-Z0-9]{4,20}$/";
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$password_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/";

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$h_password = password_hash($password, PASSWORD_DEFAULT);

if (!preg_match($username_pattern, $username)){
    echo '<script>alert("Invalid Username. Please try again!!!");window.location.href = "../Frontend/logincreate/signup.html";</script>';
} else if(!preg_match($email_pattern, $email)){
    echo '<script>alert("Invalid Email Format. Please try again!!!");window.location.href = "../Frontend/logincreate/signup.html"</script>';
} else if(!preg_match($password_pattern,$password)){
    echo '<script>alert("Invalid Password Format. Please try again!!!");window.location.href = "../Frontend/logincreate/signup.html"</script>';
} else if($password != $confirm_password){
    echo '<script>alert("Password doesnot matches. Please try again!!!");window.location.href = "../Frontend/logincreate/signup.html"</script>';
} else if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Username='$username'")) > 0){     
    echo '<script>alert("Username Already Taken. Please try again!!!");window.location.href = "../Frontend/logincreate/signup.html"</script>';
} else if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Email='$email'")) > 0){
    echo '<script>alert("Email Already Taken. Please try again!!!");window.location.href = "../Frontend/logincreate/signup.html"</script>';
} else {
    insertUser($username, $h_password, $email);
}

?>