<?php

    #After button was hit, stores info and does the necessary steps to register
    #REG Protocol

if (isset($_POST["submit"])) {

    $username = filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
    $passwordrep = filter_var($_POST["passwordrep"], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $fullname = filter_var($_POST["fullname"], FILTER_SANITIZE_SPECIAL_CHARS);

    require_once("connect.php");
    require_once("handler.php");

    if (signupLacks($username, $password, $passwordrep, $email, $fullname) !== false){
        header("location: ../login.php?error=inputFail");
        exit();
    }
    if (usernameProblem($username) !== false) {
        header("location: ../login.php?error=usernameFail");
        exit();
    }
    if (usedUernameProblem($connection, $username) !== false) {
        header("location: ../login.php?error=usedUsernameFail");
        exit();
    }
    if (passwordProblem($password, $passwordrep) !== false) {
        header("location: ../login.php?error=passwordFail");
        exit();
    }
    if (emailProblem($email) !== false) {
        header("location: ../login.php?error=emailFail");
        exit();
    }
    if (fullnameProblem($fullname) !== false) {
        header("location: ../login.php?error=fullnameFail");
        exit();
    }

    letThyBeUser($connection, $username, $password, $email, $fullname);

}
else{
    header("location: ../index.php");
}
?>