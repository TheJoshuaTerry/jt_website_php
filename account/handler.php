<?php

#Checks if EDIT form is filled out
function editLacks($username, $email, $fullname) {
    $boolvalue;
    if(empty($username) || empty($email) || empty($fullname)) {
        $boolvalue = true;
    }
    else {
        $boolvalue = false;
    }
    return $boolvalue;
}

#Checks if REGISTER form is filled out
function signupLacks($username, $password, $passwordrep, $email, $fullname) {

    $boolvalue;
    if(empty($username) || empty($email) || empty($password) || empty($passwordrep) || empty($fullname)) {
        $boolvalue = true;
    }
    else {
        $boolvalue = false;
    }
    return $boolvalue;
}

#Double checks if username contains weird characters, even after sanitisation
function usernameProblem($username) {
    $boolvalue;
    if(!preg_match("/^[\w]*$/", $username)) {
        $boolvalue = true;
    }
    else {
        $boolvalue = false;
    }
    return $boolvalue;
}

#Checks if the passwords match at the REGISTER form
function passwordProblem($password, $passwordrep){
    $boolvalue;
    if($password !== $passwordrep){
        $boolvalue = true;
    }
    else {
        $boolvalue = false;
    }
    return $boolvalue;
}

#Double checks if email was filtered properly, after sanitisation
function emailProblem($email) {
    $boolvalue;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $boolvalue = true;
    }
    else {
        $boolvalue = false;
    }
    return $boolvalue;
}

#Double checks if fullname was filtered properly, after sanitisation
function fullnameProblem($fullname) {
    $boolvalue;
    if(!preg_match("/^[a-zA-z ]*$/", $fullname)) {
        $boolvalue = true;
    }
    else {
        $boolvalue = false;
    }
    return $boolvalue;
}

#Checks if username has been used before on the database, also returns the row of the data, for easier access(less functions) in the future
function usedUernameProblem($connection, $username) {

    $boolvalue;
    $sqlQuery = "SELECT * FROM userbase WHERE Uname=?;";
    $preps = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($preps, $sqlQuery)){
        header("location: ../login.php?error=stmtFail");
        exit();
    }

    mysqli_stmt_bind_param($preps, "s", $username);
    mysqli_stmt_execute($preps);

    $results = mysqli_stmt_get_result($preps);

    if($row = mysqli_fetch_assoc($results)){
        return $row;
    }
    else{
        return $boolvalue = false;
        return $boolvalue;
    }
    mysqli_stmt_close($preps);
}

#Creates user, REGISTER
function letThyBeUser($connection, $username, $password, $email, $fullname) {

    $sqlQuery = "INSERT INTO userbase (Uname, Upassword, Uemail, Ufullname) VALUES (?, ?, ?, ?);";
    $preps = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($preps, $sqlQuery)){
        header("location: ../login.php?error=stmtFail2");
        exit();
    }

    mysqli_stmt_bind_param($preps, "ssss", $username, password_hash($password, PASSWORD_DEFAULT), $email, $fullname);
    mysqli_stmt_execute($preps);
    mysqli_stmt_close($preps);
    header("location: ../login.php?error=success");
    exit();
}

#Checks if LOGIN form was properly filled out
function loginLacks($username, $password) {

    $boolvalue;
    if(empty($username) || empty($password)) {
        $boolvalue = true;
    }
    else {
        $boolvalue = false;
    }
    return $boolvalue;
}

#Logs user in
function logInUser($connection, $username, $password){


    $getDataQuery = "SELECT * FROM userbase WHERE Uname= '$username'";
    $databaseData = mysqli_query($connection, $getDataQuery);
    $row = mysqli_fetch_array($databaseData);


    $exists = usedUernameProblem($connection, $username);

    if($exists == false){
        header("location: ../login.php?error=credFail");
        exit();
    }

    //$pass = $exists["Upasswd"];

    if(!password_verify($password, $row['Upassword'])){
        header("location: ../login.php?first=credFail");
        exit();
    }
    else if (password_verify($password, $row['Upassword'])) {
        session_start();
        $_SESSION["UID"] = $exists["Uid"];
        $_SESSION["Userid"] = $exists["Uname"];
        header("location: ../index.php");
    }

}
?>