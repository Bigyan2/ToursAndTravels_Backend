<?php
include "google-api/vendor/autoload.php";

$gClient = new Google_Client();
$gClient->setClientId("305047649813-pv9b9c9bl1s591a2rhqejlth7druufg9.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Tours and travels Login");
$gClient->setRedirectUri("http://localhost/Tours_Travels/Frontend/logincreate/login.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient->createAuthUrl();
?>