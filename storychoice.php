<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and store data in the session
    $_SESSION['story_choice'] = $_POST['story_choice'];

    // Determine the destination based on story_choice
    $destination = '';

    switch ($_SESSION['story_choice']) {
        case 'Haddonfield, Illinois':
            header('Location: haddonfield.php?name=' . urlencode($_SESSION['name']) . '&age=' . urlencode($_SESSION['age']) . '&gender=' . urlencode($_SESSION['gender']) . '&story_choice=' . urlencode($_SESSION['story_choice']));
            exit;
        case 'Cunningham County, New Jersey':
            header('Location: cunningham.php?name=' . urlencode($_SESSION['name']) . '&age=' . urlencode($_SESSION['age']) . '&gender=' . urlencode($_SESSION['gender']) . '&story_choice=' . urlencode($_SESSION['story_choice']));
            exit;
        case 'Granger, Texas':
            header('Location: granger.php?name=' . urlencode($_SESSION['name']) . '&age=' . urlencode($_SESSION['age']) . '&gender=' . urlencode($_SESSION['gender']) . '&story_choice=' . urlencode($_SESSION['story_choice']));
            exit;
        case 'Puerto Rico':
            header('Location: puerto-rico.php?name=' . urlencode($_SESSION['name']) . '&age=' . urlencode($_SESSION['age']) . '&gender=' . urlencode($_SESSION['gender']) . '&story_choice=' . urlencode($_SESSION['story_choice']));
            exit;
        default:
            // Handle cases where the choice doesn't match any of the expected values
            break;
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Hope To Get Away</title>
    <script src="name_get.js"></script>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in6">
      <h2>we know you are yearning for adventure</h2>
    </div>
    <div class="fade-in6">
      <h1>make the choice</h1>
    </div>
    <div class="fade-in6">
      <div class="container">
        <form id="story-form" method="post">
          <label for="story_choice">Where are you going</label>
          <select id="story_choice" name="story_choice">
            <option value="Haddonfield, Illinois">Haddonfield, Illinois</option>
            <option value="Cunningham County, New Jersey">Cunningham County, New Jersey</option>
            <option value="Granger, Texas">Granger, Texas</option>
            <option value="Puerto Rico">Puerto Rico</option>
          </select><br><br>
          <input type="submit" value="Continue">
        </form>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>