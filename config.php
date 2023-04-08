<?php
session_start();
include "google-api/vendor/autoload.php";
include "connection.php";
$gClient = new Google_Client();
$gClient->setClientId("305047649813-9ftmc01ts2r8jpruvq7ni3c69kn1jhve.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Tours and travels Login");
$gClient->setRedirectUri("http://localhost/Tours_Travels/Frontend/logincreate/login.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient->createAuthUrl();

if(isset($_GET['code'])){

    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $gClient->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($gClient);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($conn, $google_account_info->id);
        $full_name = mysqli_real_escape_string($conn, trim($google_account_info->name));
        $email = mysqli_real_escape_string($conn, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($conn, $google_account_info->picture);

        // checking user already exists or not
        $get_user = mysqli_query($conn, "SELECT * From User where Username='$full_name'");
        $user_info = mysqli_fetch_array($get_user);
        if(mysqli_num_rows($get_user) > 0){
            $_SESSION['id'] = $user_info['User_Id']; 
            $_SESSION['ok'] = "Successfully Logged in";
            header("location: ../index.php");
            exit;
        }
        else{

            // if user not exists we will insert the user
            $H_pass = password_hash($id, PASSWORD_DEFAULT);
            $insert = mysqli_query($conn, "INSERT INTO User(Username, Email, Password, Role) VALUES('$full_name', '$email', '$H_pass','User')");

            if($insert){
                $get_user = mysqli_query($conn, "SELECT * From User where Username='$full_name'");
                $user_info = mysqli_fetch_array($get_user);
                $_SESSION['id'] = $user_info['User_Id']; 
                $_SESSION['ok'] = "Successfully Logged in";
                header("Location: ../index.php");
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }

        }

    }
    else{
        header('Location: ../login.php');
        exit;
    }
}else{
    $login_url = $gClient->createAuthUrl();
}
?>