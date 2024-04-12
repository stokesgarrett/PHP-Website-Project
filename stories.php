<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='styles.css'>
    <title>Display Data</title>
    <style>
        .table-container {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #dddddd;
            position: relative; /* Set the container to relative positioning */
        }

        table {
            width: 100%; /* Set the table width to 100% to fill the container */
            border-collapse: collapse;
        }

        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background-color: #f2f2f2;
            color: black; /* Change column name color to black */
            position: sticky; /* Stick the <th> to the top */
            top: 0; /* Stick to the top */
        }

        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            color: red; /* Change data text color to red */
        }

        .container {
            text-align: center;
            width: 90%; /* Set the container width to 70% */
            margin: 0 auto; /* Center the container horizontally */
            min-height: 60vh; /* Set a minimum height for the container */
        }

        .scrollable {
            max-height: 60vh; /* Set a maximum height for the scrollable area */
            overflow-y: scroll; /* Always show vertical scrollbars */
        }
    </style>
</head>
<body>
    <ul style="position: fixed; left: 0px; top: 0px;">
        <li><a class="active" href="index.php">Get Away</a></li>
        <li><a class="active" href="about.php">About</a></li>
        <li><a class="active" href="stories.php">Stories</a></li>
    </ul>
    <h1 style="top: 10vh;">Stories</h1>
    <div class="container">
        <div class="scrollable">
            <div class="table-container">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Story Choice</th>
                        <th>Activity Choice</th>
                        <th>Action Choice</th>
                        <th>Status</th>
                        <th>Explanation</th>
                    </tr>

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

          // SQL query to retrieve all data from the "datafate" table
$sql = "SELECT * FROM datafate";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        // Check if "Survived" is present anywhere in the "Status" column
        if (strpos($row["status"], "Survived") !== false) {
            // If "Survived" is detected, set the entire row's color to green
            echo "<td style='color: green;'>" . $row["name"] . "</td>";
            echo "<td style='color: green;'>" . $row["age"] . "</td>";
            echo "<td style='color: green;'>" . $row["gender"] . "</td>";
            echo "<td style='color: green;'>" . $row["story_choice"] . "</td>";
            echo "<td style='color: green;'>" . $row["activity_choice"] . "</td>";
            echo "<td style='color: green;'>" . $row["action_choice"] . "</td>";
            echo "<td style='color: green;'>" . $row["status"] . "</td>";
            echo "<td style='color: green;'>" . $row["explanation"] . "</td>";
        } else {
            // If "Survived" is not detected, display the row in default red color
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["story_choice"] . "</td>";
            echo "<td>" . $row["activity_choice"] . "</td>";
            echo "<td>" . $row["action_choice"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "<td>" . $row["explanation"] . "</td>";
        }

        echo "</tr>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>
