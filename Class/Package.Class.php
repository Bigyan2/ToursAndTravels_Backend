<?php

include "../connection.php";
    function insertPackages(){
        $query = "Insert into Package() Values()";
    }

    function updatePackages(){
        $query = "Update Package set where PackageId=".$id;
    }

    function deletePackage($id){
        $query = "Delete from Package where PackageId=".$id;
    }

    function fetchPackages(){
        GLOBAL $conn;
        $query = "Select * from Packages";
        $result = $conn->query($query);
        return $result;
    }

    function fetchCustomizePackages(){
        $query = "Select * from CustomPackage";
    }

    function insertCustomizedPackage(){
        $query = "Insert into CustomPackage() values()";
    }

    function approvePackage(){
        $query = "Update CustomPackage set Status='Approved' where CPid=".$id;
    }

?>