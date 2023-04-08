<?php
require_once "../connection.php";
$id = $_GET['id'];
$approve = $_GET['approve'];
if ($approve=="yes"){
    $sql = "UPDATE Customize set Status='approved' where CustomizeId=$id";
    mysqli_query($conn, $sql);
} else {
    $sql = "UPDATE Customize set Status='rejected' where CustomizeId=$id";
    mysqli_query($conn, $sql);
}
header('location: ../../Admin/customPackage.php');
?>