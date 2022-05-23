<?php 

// Deklarujeme si premenné
$db_host = "localhost";
$db_user = "juraj9910";
$db_password = "1234567899910razor";
$db_name = "login_system";

// Pokus o zlyhanie dt
try{
    // používame bezpečnú knižnicu PDO a nastavuejeme si cestu
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user,$db_password);
    // ak toto chceme testovať, pripojime sa k db a spustime neplatný dotaz
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

// Ak sa vyskytne njeaký problém tak sa nám vypíše 
catch(PDOEXCEPTION $e) {
    echo $e->getMessage();
}