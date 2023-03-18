<?php
    require_once "./Class/connection.php";

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM User WHERE Username='$username'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0){

            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])){
                $get_role = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM User where Username='$username'"));
                if ($get_role['Role'] == 'User'){
                    header("location: ../Frontend/LandingPage/index.php?login=true");
                    exit();
                } else if ($get_role['Role'] == 'Admin'){
                    header("location: ../Frontend/LandingPage/index.php?login=true");
                    exit();
                }
            } else {
                echo '<script>alert("Invalid Password!!!!");window.location.href = "../Frontend/logincreate/login.php"</script>';
            }
            
        } else{
            echo '<script>alert("Invalid Username!!!!");window.location.href = "../Frontend/logincreate/login.php"</script>';
        }
    } else {
        echo '<script>alert("Wrong Username Or Password!!!!");window.location.href = "../Frontend/logincreate/login.php"</script>';
    }  
?>