<?php
    include "connection.php";

    function addCustomPackages($fromLocation,$toLocation,$DateFrom,$DateTo,$email,$children,$adult,$phone){
        GLOBAL $conn;
        $query = "INSERT INTO CustomPackage(Email, UserId,FromLocation, ToLocation, StartDate, EndDate, AdultNumber, ChildrenNumber, PhoneNumber) Values('".$email."',".$_SESSION['id'].",'".$fromLocation."','".$toLocation."','".$DateFrom."','".$DateTo."',".$adult.",".$children.",".$phone.")";
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