<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'test2';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE newsletter2 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
reg_date TIMESTAMP,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
bio TEXT(255)
)";

$conn->close();
?>