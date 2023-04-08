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
        $query = "Select * from CustomPackage";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }
    
    function getBookings(){
        GLOBAL $conn;
        $query = "Select * from Bookings";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }

    function getFeedbacks(){

    }

    function getRatings(){

    }

    function BookingForButton(){
        GLOBAL $conn;
        $query = "Select * from Bookings where UserId=$id";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }
?>