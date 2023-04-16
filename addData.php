<?php
    include "connection.php";

    function addCustomPackages($fromLocation,$toLocation,$DateFrom,$DateTo,$email,$children,$adult,$phone,$id){
        GLOBAL $conn;
        $query = "INSERT INTO CustomPackage(User_Id,TripFrom, TripTo, DateFrom,DateTo, Email, Children, Adult, Phone) Values($id,'$fromLocation.','$toLocation','$DateFrom','$DateTo','$email' ,$children, $adult, $phone)";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo '<script>alert("Inserted Successfully");window.location.href = "suggestionLocation.php"</script>';
        } else {
             echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

    function addReveiw(){

    }

    function addFeedbacks(){
        
    }

    function addBookings(){
        
    }

?>