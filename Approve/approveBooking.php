<?php
require_once "../connection.php";
$id = $_GET['id'];
$approve = $_GET['approve'];
if ($approve=="yes"){
    $sql = "UPDATE  Bookings set Status='approved' where BookingId=$id";
    mysqli_query($conn, $sql);
} else {
    $sql = "UPDATE  Bookings set Status='rejected' where BookingId=$id";
    mysqli_query($conn, $sql);
}
header('location: ../../Admin/customPackage.php');
?>