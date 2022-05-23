<?php 

$db_host = "localhost";
$db_user = "juraj9910";
$db_password = "1234567899910razor";
$db_name = "login_system";

try{
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOEXCEPTION $e) {
    echo $e->getMessage();
}