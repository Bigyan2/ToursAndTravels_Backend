<?php
require_once "../connection.php";
$id = $_GET['id'];
$approve = $_GET['approve'];
session_start();
if ($approve=="yes"){
    $sql = "UPDATE customPackage set Status='approved' where Package_id=$id";
    mysqli_query($conn, $sql);
    $_SESSION['mssg'] = "Package is Approved";
} else {
    $sql = "UPDATE customPackage set Status='rejected' where Package_id=$id";
    mysqli_query($conn, $sql);
    $_SESSION['mssg'] = "Package is Rejected";
}
header('location: ../../Admin/dashboard.php');
?>