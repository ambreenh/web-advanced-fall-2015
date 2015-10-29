<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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

if (mysqli_query($conn, $sql)) {
    echo "Table newsletter2 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>