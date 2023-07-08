<?php

    #After button was hit, sends new filled in form to the database, updating user information

    if(isset($_POST["submit"])){

        session_start();

        $Newusername = filter_var($_POST["NewUsername"], FILTER_SANITIZE_SPECIAL_CHARS);
        $Newemail = filter_var($_POST["NewEmail"], FILTER_SANITIZE_EMAIL);
        $Newfullname = filter_var($_POST["NewFullname"], FILTER_SANITIZE_SPECIAL_CHARS);

        $username = $_SESSION["Userid"];

        require_once("connect.php");
        require_once("handler.php");


        if (editLacks($Newusername, $Newemail, $Newfullname) !== false){
            header("location: ../profil.php?error=editInputFail");
            exit();
        }

        $sqlQuery = "UPDATE userbase SET Uname=?, Uemail=?, Ufullname=? WHERE Uname= ?;";
        $preps = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($preps, $sqlQuery)){
            header("location: ../profil.php?error=stmtFail");
            exit();
        }
        mysqli_stmt_bind_param($preps, "ssss", $Newusername, $Newemail, $Newfullname, $username);
        mysqli_stmt_execute($preps);

        $_SESSION["Userid"] = $Newusername;
        header("location: ../profil.php?edited");
        exit();
    }
    else{
        header("location: ../about.php?edited");
        exit();
    }
?>