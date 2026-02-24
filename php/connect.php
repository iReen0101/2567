<?php 
    error_reporting(E_ALL); 
    $conn = new mysqli('localhost','root','','db_item');
    $conn->set_charset('utf8'); 
    if ($conn->connect_errno) {
        echo "Connect Error :".$conn->connect_error;
        exit(); 
    }

    $base_path_item = 'assets/images/item/';

?>