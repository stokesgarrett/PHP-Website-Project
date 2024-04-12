<?php
session_start();

// Continue to check for the activity choice
if (isset($_POST['activity_choice']) && !empty($_POST['activity_choice'])) {
    // Store the chosen activity in the session
    $_SESSION['activity_choice'] = $_POST['activity_choice'];
    
    // Redirect to the next page 
    header('Location: hsanitariumtour.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel='stylesheet' href='styles.css'>
    <title>haddonfield</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>haddonfield, where shadows dance,
        in the night, they take their chance.
        whispers in the autumn air,
        secrets hidden, dark and rare.
      </h2>
    </div>
    <div class="fade-in6">
      <h1>the trip to Haddonfield was smooth. Your friends ask...</h1>
    </div>
    <div class="fade-in6">
    <div class="container">
      <form id="activity-form" method="post">
        <label for="activity_choice">"What are we doing?" Choose an activity...</label>
        <select id="activity_choice" name="activity_choice">
          <option value="Smith's Grove Sanitarium tour">Smith's Grove Sanitarium tour</option>
        </select><br><br>
        <input type="submit" value="Continue">
      </form>
    </div>
    </div>
    <div class="footer"></div>
  </body>
</html>

