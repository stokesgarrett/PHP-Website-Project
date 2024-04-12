<?php
session_start();

// Reset the data_submitted flag
unset($_SESSION['data_submitted']);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and store data in the session
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];

    // Redirect to the next page (e.g., storychoice.php)
    header('Location: storychoice.php?name=' . $_SESSION['name'] . '&age=' . $_SESSION['age']);
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Hope To Get Away</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>It's very lonely here.</h2>
    </div>
    <div class="fade-in6">
      <h1>Please, tell me about yourself</h1>
    </div>
    <div class="fade-in6">
      <div class="container">
       <form id="nameagegen" method="post">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required><br><br>

          <label for="age">Age</label>
          <input type="number" id="age" name="age" required><br><br>

          <label for "gender">Gender</label>
          <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select><br><br>

          <input type="submit" value="Continue">
        </form>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>