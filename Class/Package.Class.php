<?php

class Package{
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
        $query = "Select * from Package";
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
}
?>