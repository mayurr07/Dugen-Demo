<?php
session_start();
$user = 'root';
$password = '';
$database = 'dugen';
$servername = 'localhost';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}
$sql = "SELECT * FROM user";
$result = $mysqli->query($sql);
?>