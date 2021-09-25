<?php
    ob_start();

    $db['db_host'] = "149.202.246.65";
    $db['db_user'] = "gazident_carRacer";
    $db['db_pass'] = "BqgQiGdGyTXO";
    $db['db_name'] = "gazident_bt7";
    
    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }
    
    $conn = mysqli_connect($db['db_host'],$db['db_user'],$db['db_pass'],$db['db_name']) or die("connection was failed!");

   