<?php

include "connection.php";

function insertUser($username, $h_password, $email){
    Global $conn;
    $insert_query = "INSERT INTO User(Username, Email, Password,Role) VALUES ('$username', '$email', '$h_password','User')";
    if(mysqli_query($conn, $insert_query)){
        echo '<script>alert("Your account has been created.Please login!!!");</script>';
    } else{
        echo '<script>alert("Your account cannot be created.Please try again!!!");</script>';
    }
}

function insertAdmin($username, $h_password, $email){
    Global $conn;
    $insert_query = "INSERT INTO User(Username, Email, Password,Role) VALUES ('$username', '$email', '$h_password','Admin')";
    if(mysqli_query($conn, $insert_query)){
        echo '<script>alert("Admin has been added!!!");window.location.href = "../Frontend/logincreate/login.php"</script>';
    } else{
        echo '<script>alert("Admin cannot be added!!!");window.location.href = "../Frontend/logincreate/SignUp.html"</script>';
    }
}

function updateUser($userID, $username, $h_password, $email){
    Global $conn;
}

function deleteUser($user_id){
    Global $conn;
}

function fetchUser(){
    Global $conn;
}

function addAdmin(){
}

function deleteAdmin($id){
}

?>