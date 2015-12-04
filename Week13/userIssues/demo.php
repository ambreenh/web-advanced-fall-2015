<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'starbucks';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$value1 = $_POST['firstname'];
$value2 = $_POST['lastname'];
$value3 = $_POST['email'];

$sql = "INSERT INTO latte (firstname, lastname, email)
VALUES ('$value1', '$value2', '$value3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


//Formulate Query
$query = sprintf("SELECT * FROM starbucks.latte");

$mysqlConn = mysql_connect($servername, $username, $password);

// Perform Query
$result = mysql_query($query, $mysqlConn);

// Check result
// This shows the actual query sent to MySQL, and the error. Useful for debugging.
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

// Use result
// Attempting to print $result won't allow access to information in the resource
// One of the mysql result functions must be used
// See also mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.
while ($row = mysql_fetch_assoc($result)) {
    echo '<br>';
    echo $row['firstname'];
    echo '<br>';
    echo $row['lastname'];
    echo '<br>';
    echo $row['email'];
    echo '<br>';
    echo '<br>';
}


$conn->close();
?>