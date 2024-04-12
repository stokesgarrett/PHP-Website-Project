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
        case 'hideinfreezer':
            $status = 'Survived Leatherface';
            $explanation = "Luckily, you quickly broke line of sight, and were able to succesfully hide in freezer until Leatherface left the area in search of you.";
            break;
        case 'carescape':
            $status = 'Killed by Leatherface';
            $explanation = "Before you could start the car, leatherface chainsawed through your window.. and you know the rest.";
            break;
        case 'hideontop':
            $status = 'Killed by Leatherface';
            $explanation = "While attempting to get on the roof, you made too much noise and got a chainsaw to the heart right through the wall.";
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
    <title>gas station</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>you're almost on E, so its a wise choice to get some gas. traversing the highway, you spot a desolate gas station, you dont seem to have a choice.
        walking inside, you notice noone around and a rather unpleasant scent. you only have cash, so card is not an option.
      </h2>
    </div>
    <div class="fade-in15">
      <h1>you hear blood gurgling noises from the backroom, and a violent sound of a chainsaw being started. you quickly realize the texas chainsaw massacre
        might be a real thing. out steps the monster, looking directly at you from the other side of the gas station.
      </h1>
    </div>
    <div class="fade-in18">
    <div class="game-container">
        <h1 style="position: relative; top: 70px;">what do you do?</h1>
        <form id="game-form" method="post" action="">
            <div class="options horizontal-options">
              <label>
                <input type="radio" name="action_choice" value="carescape">
                <img src="images\car.png" alt="carescape">
                <p>escape in car</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="hideinfreezer">
                <img src="images\gasfreezer.jpg" alt="hideinfreezer">
                <p>hide in freezer</p>
              </label>
              <label>
                <input type="radio" name="action_choice" value="hideontop">
                <img src="images\roof.jpg" alt="hideontop">
                <p>hide on roof</p>
              </label>
            </div>
            <input type="submit" value="Submit" id="submit-button">
          </form>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
