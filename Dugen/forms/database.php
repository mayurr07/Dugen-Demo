<?php
// connection of Database
define('USER', 'pKLgMI4MKp');
define('PASSWORD', 'yVHas5ReFu');
define('HOST', 'remotemysql.com');
define('DATABASE', 'pKLgMI4MKp');
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE,";dbuser=".USER,";dbpass=".PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
