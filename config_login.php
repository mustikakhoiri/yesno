<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "truefalse";

try {
    //create PDO connection 
    $con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());}

    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $db = "truefalse"; 

    // $con = mysqli_connect($host, $username, $password, $db) or die(); 
