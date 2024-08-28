<!DOCTYPE html>
<html>
<head>
    <title>Database</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password




// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection open" . "<br>";
}

// Create a database
$query = "CREATE DATABASE findmyspot";

if ($conn->query($query) === TRUE) {
    echo "Database created successfully" . "<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();
?>
</body>
</html>
