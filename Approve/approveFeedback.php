<?php
require_once "../connection.php";
$id = $_GET['id'];
$approve = $_GET['approve'];
if ($approve=="yes"){
    $sql = "UPDATE  Feedback set Status='approved' where FeedbackId=$id";
    mysqli_query($conn, $sql);
} else {
    $sql = "UPDATE  Feedback set Status='rejected' where FeedbackId=$id";
    mysqli_query($conn, $sql);
}
header('location: ../../Admin/customPackage.php');
?>