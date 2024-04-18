<?php
// Establish database connection
$host = 'localhost';
$user = 'test';
$password = 'test1234';
$database = 'bookreview';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
