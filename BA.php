<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart library system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch books from the database
$query = "SELECT * FROM book";
$result = $conn->query($query);

$books = array();
while ($row = $result->fetch_assoc()) {
    $books[] = $row;
}

// Close connection
$conn->close();

// Return books as JSON
header('Content-Type: application/json');
echo json_encode($books);
?>
