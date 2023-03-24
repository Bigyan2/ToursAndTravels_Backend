<?php
    include "../../Backend/Class/connection.php";

    function fetchPackages(){
        GLOBAL $conn;
        $query = "Select * from Packages";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }
?>