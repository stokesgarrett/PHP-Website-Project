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

// SQL to create a table
$sql = "CREATE TABLE datafate (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    age INT,
    gender VARCHAR(255),
    story_choice VARCHAR(255),
    activity_choice VARCHAR(255),
    action_choice VARCHAR(255),
    status VARCHAR(255),
    explanation TEXT
)";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

