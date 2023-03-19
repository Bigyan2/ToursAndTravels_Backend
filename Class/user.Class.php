<?php

include "connection.php";

function insertUser($username, $h_password, $email){
    Global $conn;
    $insert_query = "INSERT INTO User(Username, Email, Password,Role) VALUES ('$username', '$email', '$h_password','User')";
    if(mysqli_query($conn, $insert_query)){
        echo '<script>alert("Your account has been created.Please login!!!");window.location.href = "../Frontend/logincreate/login.php"</script>';
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
    $query = "Update User set where UserId=".$userID;
}

function deleteUser($user_id){
    Global $conn;
    $delete_query = "Delete from User where UserId=".$user_id;
    if(mysqli_query($conn, $delete_query)){
        echo '<script>alert("Admin has been added!!!");</script>;
    }
}

function fetchUser(){
    Global $conn;
    $fetch_query = "Select * from User where Role='User'";
}

function addAdmin(){
    $insert_query = "Insert into User() Values()";
}

function deleteAdmin($id){
    $delete_query = "Delete From User where UserId=".$id;
}

?>