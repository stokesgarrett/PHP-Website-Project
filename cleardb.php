<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "getting_away_db";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to delete all records from the table
$sql = "DELETE FROM datafate";

// Execute the SQL query to clear the table
if ($conn->query($sql) === TRUE) {
    echo "All records cleared successfully";
} else {
    echo "Error clearing records: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
