<?php
require_once 'config.php';

// get user data by id

function getUserData($colname, $id){
    global $conn;
    global $users;
    $sql = "select * from $users where ID = $id";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    return $row[$colname];
    
}
