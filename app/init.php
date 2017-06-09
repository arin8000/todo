<?php

//session_start();
//
//$_SESSION['user_id'] = 1;
//
//$db = new PDO('mysql:host=localhost;dbname=todo', 'root', 'root');
//
//
//if(!isset($_SESSION['user_id'])) {
//    die("You are not signed in.");
//}

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'todo';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
