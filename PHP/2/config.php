<?php
error_reporting(0);
define('DB_NAME', 'excel');
define('DB_USER', 'root');
define('DB_PASSWORD', 'toor');
define('DB_HOST', 'localhost');
 
// Create connection
$db     =   new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>