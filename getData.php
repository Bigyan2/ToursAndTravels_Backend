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
?>