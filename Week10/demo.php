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
$value3 = $_POST['borough'];
$value4 = implode(",",$_POST['interests']);
$value5 = $_POST['email'];
$value6 = $_POST['bio'];
$value7 = $_POST['password'];

$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

$saltedPW =  $value7 . $salt;

$hashedPW = hash('sha256', $saltedPW);

$sql = "INSERT INTO newsletter (firstname, lastname, borough, interests, email, bio, password, date)
VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6','$hashedPW', CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>