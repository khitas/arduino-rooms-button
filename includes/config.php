<?php
//header('Content-type: charset=utf-8');

set_time_limit(0);
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE ^ E_WARNING);

date_default_timezone_set("Europe/Athens");

ini_set('display_errors','On');
ini_set('memory_limit','1024M');

$nightStart = "22:00:00";
$nightEnd = "06:00:00";

$conOptions = array(
    "Host"=>"127.0.0.1",
    "Port"=>3306,
    "Database"=>"rooms",
    "Username"=>"username", 
    "Password"=>"password"
);
?>