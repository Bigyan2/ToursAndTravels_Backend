<?php 
require_once "../connection.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM Hotel where HotelId=$id";
    $result = mysqli_query($conn, $query);
    if ($result){
        echo '<script>alert("Deleted successfully");window.location.href="../../Admin/Hotel.php"</script>';
    }
}
?>