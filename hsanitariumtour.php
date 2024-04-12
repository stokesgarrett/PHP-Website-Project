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
        case 'wieldchainsawasweapon':
            $status = 'Survived Michael Myers';
            $explanation = "You survived because you wielded the chainsaw as a weapon.";
            break;
        case 'run':
            $status = 'Killed by Michael Myers';
            $explanation = "You ran away, but it wasn't enough to survive.";
            break;
        case 'hideinfreezer':
            $status = 'Killed by Michael Myers';
            $explanation = "You hid in the freezer, but it didn't save you.";
            break;
        case 'playdead':
            $status = 'Killed by Michael Myers';
            $explanation = "Playing dead was not a successful strategy.";
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
    <title>sanitarium</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>you have just arrived at the sanitarium. It is falling apart, but the guide, Maria, seems confident and fearless. The guide shows you
        through several chilling rooms. In the warden's office, you see a chainsaw with what looks like dried blood. In another room, there are multiple
        crumbling gaps to the outside, with large freezers sitting inside. You arrive at the isolation room...
      </h2>
    </div>
    <div class="fade-in15">
      <h1>You hear a loud rupture of a caving room from outside of the isolation room. Maria goes to investigate for the group's safety. After what seemed like 
        an eternity, Maria does not return. A piece of the isolation room's roof violently falls down and crushes your friend's head. In shock, you and your 
        remaining two friends look up and are greeted by a large man wearing a chilling white mask, wielding a machete. You feel impending doom and realize 
        you must escape. You remember Maria locked the entry door before the group entered. 
      </h1>
    </div>
    <div class="fade-in18">
    <div class="game-container">
        <h1>How will you survive?</h1>
      <form id="game-form" method="post" action="">
            <div class="options horizontal-options">
              <label>
                <input type="radio" name="action_choice" value="run">
                <img src="images/run.jpg" alt="run">
                <p>Run</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="hideinfreezer">
                <img src="images/freezre.jpg" alt="hide in freezer">
                <p>Hide in Freezer</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="wieldchainsawasweapon">
                <img src="images/chainsaw.jpg" alt="wield Chainsaw as Weapon">
                <p>Wield Chainsaw as Weapon</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="playdead">
                <img src="images/playdead.jpg" alt="play Dead">
                <p>Play Dead</p>
              </label>
            </div>
            <input type="submit" value="Submit" id="submit-button">
          </form>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
