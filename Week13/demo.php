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
// $value3 = $_POST['borough'];
// $value4 = implode(",",$_POST['interests']); //implode --> adding a comma for the multi select (adding a query)
$value3 = $_POST['email'];
$value4 = $_POST['bio'];
// $value7 = $_POST['password'];

$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

$saltedPW =  $value7 . $salt;

$hashedPW = hash('sha256', $saltedPW);

$sql = "INSERT INTO newsletter (firstname, lastname, email, bio, date)
VALUES ('$value1', '$value2', '$value3', '$value4', CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Formulate Query
$query = sprintf("SELECT firstname, lastname, email, bio, CURRENT_TIMESTAMP FROM test.newsletter");

// Perform Query
$result = mysql_query($query);

// One of the mysql result functions must be used
// See also mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.
if(mysql_num_rows($result))  {
    echo '<table cellpadding ="0" cellspacing="0" class="db-table">';
    echo '<tr><th>Firstname</th><th>Last name</th><th>Email</th><th>Bio</th>';
    while ($row = mysql_fetch_assoc($result)) {
    echo '<tr>';
    foreach($row as $key=>$value){
        echo '<td>',$value, '</td>';
    }
    echo '</tr>';
}
echo '</table><br />';
    
}


$conn->close();
?>