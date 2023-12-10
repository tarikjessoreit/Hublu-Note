<?php 
    date_default_timezone_set("asia/dhaka");
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hublu_note";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    // $sql = "drop database janatai";
    // if($conn->query($sql) == true){
    //     echo "Success!";
    // }else{
    //     echo "Error: ".$con->error;

    // }
    

?>