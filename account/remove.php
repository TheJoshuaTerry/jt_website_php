<?php 
    #Deletes user
    session_start();
    $username = $_SESSION["Userid"];

    require_once("connect.php");

    $sqlQuery = "DELETE FROM userbase WHERE Uname = ?";
    $preps = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($preps, $sqlQuery)){
        header("location: ../index.php?error=stmtFail");
        exit();
    }
    mysqli_stmt_bind_param($preps, "s", $username);
    mysqli_stmt_execute($preps);

    session_unset();
    session_destroy();

    header("location: ../index.php?deleted");
    exit();

?>