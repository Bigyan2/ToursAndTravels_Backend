<?php
    include "connection.php";

    function fetchPackages(){
        GLOBAL $conn;
        $query = "Select * from Package";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }

    function fetchUserData(){
        GLOBAL $conn;
        $query = "Select * from User";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }

    function fetchCustomPacakge(){
        GLOBAL $conn;
        $query = "Select * from CustomPackage JOIN User ON CustomPackage.UserId = User.User_Id";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }
    
    function fetchBookings(){
        GLOBAL $conn;
        $query = "SELECT * FROM Bookings JOIN User ON Bookings.User_Id = User.User_Id  JOIN Package ON Bookings.Package_id = Package.Package_id";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }
    
    function fetchFeedbacks(){
        GLOBAL $conn;
        $query = "SELECT * FROM Feedback JOIN User ON Feedback.User_Id = User.User_Id";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }

    function getRatings(){

    }

    function BookingForButton(){
        GLOBAL $conn;
        $query = "SELECT * FROM Bookings WHERE BookingId=$id";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }


    function getPackageData($id){
        GLOBAL $conn;
        $query = "SELECT * FROM Package where Package_id=$id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
?>