<?php
$servername = 'localhost';
$username = 'test';
$password = 'test';
$dbname = 'test';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$value1 = $_POST['firstname'];
$value2 = $_POST['lastname'];
$value3 = $_POST['email'];
$value4 = $_POST['bio'];

$sql = "INSERT INTO newsletter (firstname, lastname, email, bio, date)
VALUES ('$value1', '$value2', '$value3', '$value4', CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>