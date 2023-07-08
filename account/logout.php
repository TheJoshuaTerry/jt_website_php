<?php
    #Logs user out by ending the session
    session_start();
    session_unset();
    session_destroy();
    header("location: ../index.php");
    exit();
?>