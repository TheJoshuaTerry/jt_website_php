<?php 

#Connection for the database

$servername = "HIDDEN";
$uname = "HIDDEN";
$pwd = "HIDDEN";
$dbname = "HIDDEN";

$connection = mysqli_connect($servername, $uname, $pwd, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
