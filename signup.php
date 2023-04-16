<?php
include ("connection.php");
session_start();

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$h_password = $_SESSION['password'];

if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Username='$username'")) > 0){     
    $_SESSION['error'] = "Username Already Taken!!";
} else if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM User where Email='$email'")) > 0){
    $_SESSION['error'] = "Email Already Taken";
}else{
    session_destroy();
    $insert_query = "INSERT INTO User(Username, Email, Password,Role) VALUES ('$username', '$email', '$h_password','User')";
    if(mysqli_query($conn, $insert_query)){
        $_SESSION['success'] = "Congratulations!! Your account has been created in";
        echo '<script>window.location.href = "../Login.php"</script>';
    }
}
echo '<script>window.location.href = "../signup.php"</script>';
?>