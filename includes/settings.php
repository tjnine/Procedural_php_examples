<?php

/**
 * make info secure with settings.ini file
 */
$contact_email = "teejten@gmail.com";

session_start();

DEFINE('BASE_URL', 'scotch.local');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASS', 'root');
$user = 'root';
$pwd  = 'root';

//Mamp PDO
$dsn = 'mysql:host=localhost;dbname=fukyeah;port=8889';
$db  = new PDO($dsn, $user, $pwd);

//Mamp SQLite3
// $dsn = 'sqlite:/Applications/Mamp/db/sqlite/oophp.db';
// $db  = new PDO($dsn);
?>