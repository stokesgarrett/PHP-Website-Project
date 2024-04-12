<?php
session_start(); // Start the session

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and store data in the session
    $_SESSION['action_choice'] = $_POST['action_choice'];

    // Calculate the "status" and explanation based on user choices
    $status = '';
    $explanation = '';

    switch ($_SESSION['action_choice']) {
        case 'walkedaway':
            $status = 'Survived the Chupacabra';
            $explanation = "You survived. By walking away, the creature did not take you as a malicous presence, and therefore did not attack.";
            break;
        case 'fightit':
            $status = 'Killed by the Chupacabra';
            $explanation = "You were killed violently by choosing to fight the chupacabra.";
            break;
        case 'scareaway':
            $status = 'Killed by the Chupacabra';
            $explanation = "You were killed attempting to intimidate the creature, and ended up being its next big meal.";
            break;
        // Add more cases for other options as needed
    }

    // Store the "status" and explanation in the session
    $_SESSION['status'] = $status;
    $_SESSION['explanation'] = $explanation;

    // Redirect to the next page (e.g., display_session.php)
    header('Location: display_session.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel='stylesheet' href='styles.css'>
    <title>El Yunque National Forest</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>In the heart of El Yunque, where the dense foliage conceals secrets older than time, your group of adventurers embarked on a journey through the enigmatic forest.
        As you delved deeper into the lush wilderness, the air grew heavy with the legends of the Chupacabra—a beast rumored to haunt these very woods.
      </h2>
    </div>
    <div class="fade-in15">
      <h1>The sun cast long shadows over the emerald canopy when the eerie silence was shattered by a blood-curdling howl. Rustling leaves and snapping twigs signaled the
        arrival of the Chupacabra, its malevolent presence palpable. With a mix of fear and fascination, your group locked eyes with the creature. Its gnarled, hairless
        body and piercing crimson eyes seemed to defy nature itself. What did your group do to survive the Chupacabra?
      </h1>
    </div>
    <div class="fade-in18">
    <div class="game-container">
        <h1 style="position: relative; top: 70px;">what did you do?</h1>
        <form id="game-form" method="post" action="">
            <div class="options horizontal-options">
              <label>
                <input type="radio" name="action_choice" value="scareaway">
                <img src="images\scareaway.webp" alt="scareaway">
                <p>scare it away</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="fightit">
                <img src="images\fisticuffs.jpg" alt="fightit">
                <p>fisticuffs</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="walkedaway">
                <img src="images\walkaway.avif" alt="walkedaway">
                <p>walked away</p>
              </label>
            </div>
            <input type="submit" value="Submit" id="submit-button">
          </form>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
