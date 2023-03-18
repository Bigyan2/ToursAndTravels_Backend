<?php

include "connection.php";
$conn = getConnection();
class Hotel{

    function insertHotel(){
        $query = "INSERT INTO Hotel() Values()";
    }

    function updateHotel(){
        $query = "Update Hotel set where HotelId=".$id;
    }

    function fetchHotel(){
        $query = "Select * from hotel";
    }

    function deleteHotel($id){
        $query = "Delete from hotel where hotelId=".$id;
    }
}
?>