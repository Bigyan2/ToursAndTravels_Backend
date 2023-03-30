<?php
    include "connection.php";

    function addCustomPackages(){
        GLOBAL $conn;

        $query = "INSERT INTO CustomPackages() Values(Package)";
        $result = mysqli_query($conn,$query);
        if($result){
            return $result;
        }
    }
?>