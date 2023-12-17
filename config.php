<?php 
    session_start();
    date_default_timezone_set("asia/dhaka");
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hublu_note";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    // Database tables
    // define('USERS','users');
    // define('NOTES','notes');
    $users = "users";
    $notes = "h_notes";

    $USERID = isset($_SESSION['userID']) ? $_SESSION['userID'] : false;
    
    include "functions.php";

?>