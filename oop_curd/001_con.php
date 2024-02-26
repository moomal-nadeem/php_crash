<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'phpcrash';

// Create a new mysqli connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connection successful";
}

$q = "SELECT * FROM `students`";
$insertQuery = $conn->query($q);

if ($insertQuery->num_rows > 0) {
    while ($row = $insertQuery->fetch_assoc()) {
        echo "<br> id: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
