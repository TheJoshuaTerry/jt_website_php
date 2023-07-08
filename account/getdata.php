<?php

    #Gets row of database, to pre-fill EDIT form

    if(isset($_SESSION["Userid"])){
        $username = $_SESSION["Userid"];

        require_once("connect.php");
    
        $getDataQuery = "SELECT * FROM userbase WHERE Uname='$username'";
        $databaseData = mysqli_query($connection, $getDataQuery);
        $row = mysqli_fetch_array($databaseData);
    }
?>