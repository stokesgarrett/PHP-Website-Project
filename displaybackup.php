<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Start the session if it's not started already

// Check if the session values are set
if (isset($_SESSION['name']) && isset($_SESSION['age']) && isset($_SESSION['gender']) &&
    isset($_SESSION['story_choice']) && isset($_SESSION['activity_choice']) &&
    isset($_SESSION['action_choice']) && isset($_SESSION['status']) &&
    isset($_SESSION['explanation'])) {

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

    // Prepare variables
    $name = $_SESSION['name'];
    $age = (int)$_SESSION['age']; // Cast age to an integer
    $gender = $_SESSION['gender'];
    $story_choice = $_SESSION['story_choice'];
    $activity_choice = $_SESSION['activity_choice'];
    $action_choice = $_SESSION['action_choice'];
    $status = $_SESSION['status'];
    $explanation = $_SESSION['explanation'];

    // Prepare the SQL statement
    $sql = "INSERT INTO datafate (name, age, gender, story_choice, activity_choice, action_choice, status, explanation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissssss", $name, $age, $gender, $story_choice, $activity_choice, $action_choice, $status, $explanation);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Homecoming</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>this is the end of the road.</h2>
    </div>
    <div class="fade-in6">
     <h1 class="<?php echo (isset($_SESSION['status']) && strpos($_SESSION['status'], 'Survived') !== false) ? 'Survived-Michael-Myers' : 'Killed-By-Michael-Myers'; ?>">
    <?php
    if (isset($_SESSION['explanation'])) {
        echo $_SESSION['explanation'];
    } else {
        echo 'Explanation Not Available';
    }
    ?>
   </h1>
    </div>
    <div class="centered-button">
        <button onclick="location.href='index.php'" style="cursor: pointer;">Return Home</button>
    </div>
    <div class="footer"></div>
  </body>
</html>