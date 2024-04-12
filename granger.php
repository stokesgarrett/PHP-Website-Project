<?php
session_start();

// Continue to check for the activity choice
if (isset($_POST['activity_choice']) && !empty($_POST['activity_choice'])) {
    // Store the chosen activity in the session
    $_SESSION['activity_choice'] = $_POST['activity_choice'];
    
    // Redirect to the next page
    header('Location: gasstation.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel='stylesheet' href='styles.css'>
    <title>granger</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>Through fields of fear, where screams unite,
        Survival's edge, in the dead of night.
        Leatherface, the butcher, with madness in his eyes,
        In the Texas Chainsaw Massacre, terror does arise.
      </h2>
    </div>
    <div class="fade-in6">
      <h1>you wonder why you chose granger... all alone you must decide what to do here.</h1>
    </div>
    <div class="fade-in6">
    <div class="container">
      <form id="activity-form" action="" method="post">
        <label for="activity_choice">hmm.. what do i do?</label>
        <select id="activity_choice" name="activity_choice">
          <option value="Fill Up at Gas Station">Fill Up at Gas Station</option>
        </select><br><br>
        <input type="submit" value="Continue">
      </form>
    </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
