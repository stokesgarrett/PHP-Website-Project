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
        case 'flaregunforhelp':
            $status = 'Survived Jason Voorhees';
            $explanation = "You survived Jason Voorhees. Luckily the flare gun alerted a nearby army chopper which caused Jason to retreat, and quickly came to the rescue.";
            break;
        case 'sacrificefriend':
            $status = 'Killed by Jason Voorhees';
            $explanation = "Sacrificing your friend is a cowardly move, and Jason quickly hunted you and your friends down and made you pay.";
            break;
        case 'radiostation':
            $status = 'Killed by Jason Voorhees';
            $explanation = "The radio station was in operable, and in this wasted time Jason broke in and slaughtered you and your friends.";
            break;
        case 'waititout':
            $status = 'Killed by Jason Voorhees';
            $explanation = "Waiting it out turned out to be a quick way to have a funeral.";
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
    <title>crystallake</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>Deep in the heart of the shadowed Crystal Lake, an eerie mist hangs low over the dense woods. You've ventured here with your friends drawn by the whispers of 
        unsolved mysteries. you venture across decaying cabins and lakeside boats, each one hiding secrets from the past. As you press further, you'll soon find yourself in the heart of this sinister retreat, where fear and the
        unknown collide.
      </h2>
    </div>
    <div class="fade-in15">
      <h1>A bone-chilling breeze sends shivers down your spine, and whispered legends of Crystal Lake come to life. The group realizes they are not alone. Shadows shift
        among the trees, and you catch fleeting glimpses of a menacing, masked figure. You and three friends run for shelter in a
        large cabin. You barricade windows and doors to the best of the groups ability. You glance across a flare gun and radio station, while one friend freaks out and jumps out an upper 
        story window in an attempt to escape. You must quickly brainstorm how to survive the impending onslaught.
      </h1>
    </div>
    <div class="fade-in18">
    <div class="game-container">
        <h1>whats the plan?</h1>
        <form id="game-form" method="post" action="">
            <div class="options horizontal-options">
              <label>
                <input type="radio" name="action_choice" value="sacrificefriend">
                <img src="images\saclamb.jpg" alt="sacrificefriend">
                <p>sacrifice friend</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="flaregunforhelp">
                <img src="images\flare.jpg" alt="flaregunforhelp">
                <p>flare gun for help</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="radiostation">
                <img src="images\radio.jpg" alt="radiostation">
                <p>radio station</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="waititout">
                <img src="images\waititout.jpeg" alt="waititout">
                <p>wait it out</p>
              </label>
            </div>
            <input type="submit" value="Submit" id="submit-button">
          </form>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
