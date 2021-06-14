<?php
//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$cleardb_server = "Your-Server-Name";
$cleardb_username = "Your-Username";
$cleardb_password = "Your-Password";
$cleardb_db = "Your-Database-Name";
$active_group = 'default';
$query_builder = TRUE;
try {
    $connect = new PDO('mysql:host=Your-Server-Name;dbname=Your-Database-Name', 'Your-Username', 'Your-Password', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
// Connect to DB
//$connect = new PDO('mysql:host=$cleardb_server;dbname=$cleardb_db;charset=UTF-8', '$cleardb_username', '$cleardb_password');
