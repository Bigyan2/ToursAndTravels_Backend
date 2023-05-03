<?php 
require_once "../../Backend/connection.php";

$id = $_GET['id'];
if(isset($_POST['submit'])){
    $name = $_POST['hotel-name'];
    $location  = $_POST['location'];
    $imagelink = $_POST['image-link'];
    $price = $_POST['hote-price'];
    $description = $_POST['about'];

    $query = "INSERT INTO Hotel(HotelName, HotelLocation, HotelImage, HotelPrice,HotelDescription) VALUES('$name', '$location', '$imagelink',$price, '$description')";
    $result = mysqli_query($conn, $query);
    if ($result){
        session_start();
        $_SESSION['mssg'] = "Hotel Added Successfully";
        echo '<script>window.location.href="../../Admin/hotel.php"</script>';
    }
} else {
    echo "Not submitted";
}
?>