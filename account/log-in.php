<?php

    #After button was hit, stores info and does the necessary steps to log in
    #LOG Protocol

if(isset($_POST["submit"])){
    $username = filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);

    require_once("connect.php");
    require_once("handler.php");

    if (loginLacks($username, $password) !== false){
        header("location: ../login.php?error=inputFail");
        exit();
    }

    logInUser($connection, $username, $password);
}
else{
    header("location: ../index.php");
}
?>