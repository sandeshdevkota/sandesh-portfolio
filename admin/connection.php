<?php

// $db_host = "localhost";
// $db_name = "testing";
// $db_pass = "";
// $db_user = "root";

$db_host = "sql12.freesqldatabase.com";
$db_name = "sql12678778";
$db_pass = "AwcNvqUyZH";
$db_user = "sql12678778";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();
}
?>