<?php

function insertUser($username, $h_password, $email){
    include "connection.php";
    $insert_query = "INSERT INTO User(Username, Email, Password,Role) VALUES ('$username', '$email', '$h_password','User')";
    if(mysqli_query($conn, $insert_query)){
        echo '<script>alert("Your account has been created.Please login!!!");window.location.href = "../Frontend/logincreate/login.html"</script>';
    } else{
        echo '<script>alert("Your account cannot be created.Please try again!!!");window.location.href = "../Frontend/logincreate/SignUp.html"</script>';
    }
}

function insertAdmin($username, $h_password, $email){
    include "connection.php";
    $insert_query = "INSERT INTO User(Username, Email, Password,Role) VALUES ('$username', '$email', '$h_password','Admin')";
    if(mysqli_query($conn, $insert_query)){
        echo '<script>alert("Admin has been added!!!");window.location.href = "../Frontend/logincreate/login.html"</script>';
    } else{
        echo '<script>alert("Admin cannot be added!!!");window.location.href = "../Frontend/logincreate/SignUp.html"</script>';
    }
}

function updateUser($userID, $username, $h_password, $email){
    
}

function fetchUser(){
    
}

function fetchAdmin(){

}

function insertHotel(){

}

function updateHotel(){

}

function fetchHotel(){

}

function insertPackages(){

}

function updatePackages(){

}

function fetchPackages(){

}

function fetchCustomizePackages(){

}

function insertCustomizedPackage(){

}

function approvePackage(){
    
}

function approveFeedback(){

}

?>