<?php
    include "Class/connection.php";

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM User WHERE Username='$username'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0){

            $user = mysqli_fetch_assoc($result);
            session_start();
            if (password_verify($password, $user['password'])){
                if ($user['Role'] == 'User'){
                    $_SESSION['id'] = $user['User_Id']; 
                    $_SESSION['ok'] = "Successfully logged in";
                    header("location: ../Frontend/LandingPage/Index.php");
                    exit();
                } else if ($user['Role'] == 'Admin'){
                    $_SESSION['id'] = $user['User_Id'];
                    $_SESSION['ok'] = "Successfully logged in";
                    header("location: ../Frontend/LandingPage/Index.php");
                    exit();
                }
            } else {
                $_SESSION['error'] = "Invalid Password";
                echo '<script>window.location.href = "../Frontend/logincreate/login.php";</script>';
            }
            
        } else{
            $_SESSION['error'] = "Invalid Password";
            echo '<script>window.location.href = "../Frontend/logincreate/login.php";</script>';
        }
    }
?>