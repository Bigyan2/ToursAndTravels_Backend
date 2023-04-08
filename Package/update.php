<?php 
require_once "../../Backend/connection.php";

$id = $_GET['id'];
if(isset($_POST['submit'])){
    $location = $_POST['location']; 
    $package = $_POST['Package'];
    $image = $_POST['image'];
    $days = $_POST['days'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $difficulty = $_POST['difficulty'];
    
    $query = "UPDATE Package set PackageName='$package' Days=$days LocationName='$location' ImageLink= '$image' Rating=$rating Price=$price Difficulty='$difficulty' where Package_id=$id";
    $result = mysqli_query($conn, $query);
    if ($result){
        echo '<script>alert("Updated successfully");window.location.href="../../Admin/customPackage.php"</script>';
    }
} else {
    echo "Not submitted";
}
?>