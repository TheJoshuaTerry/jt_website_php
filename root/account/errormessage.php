<?php

# All errormessages when something register/login/edit related issues arise

if (isset($_GET["error"])){
    if($_GET["error"] == "inputFail"){
        echo "<script>alert('Please fill in all forms.')</script>";
    }
    if($_GET["error"] == "usernameFail"){
        echo "<script>alert('Please make sure your username does not contain special characters.')</script>";
    }
    if($_GET["error"] == "usedUsernameFail"){
        echo "<script>alert('This username is already in use.')</script>";
    }
    if($_GET["error"] == "passwordFail"){
        echo "<script>alert('Your passwords do not match.')</script>";
    }
    if($_GET["error"] == "emailFail"){
        echo "<script>alert('This does not seem like a proper email.')</script>";
    }
    if($_GET["error"] == "fullnameFail"){
        echo "<script>alert('Please enter your name without special characters.')</script>";
    }
    if($_GET["error"] == "credFail"){
        echo "<script>alert('The username or password is not correct.')</script>";
    }
    if($_GET["error"] == "success"){
        echo "<script>alert('Please log in now.')</script>";
        header("location: login.php");
    }
    if($_GET["error"] == "editInputFail"){
        echo "<script>alert('Please fill all of them in.')</script>";
    }
}
?>