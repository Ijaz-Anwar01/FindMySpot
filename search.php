<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST["location"];

    $conn = new mysqli("localhost", "root", "", "findmyspot");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   $sql = "SELECT SpotID, SpotName, Location, Price FROM ParkingSpots WHERE Location LIKE '%" . $location . "%'";

    $result = $conn->query($sql);

    // Create an array to store the results
    $resultsArray = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $resultsArray[] = $row;
        }
    }

    // Close the database connection
    $conn->close();

    // Store the results array in a session variable for access on the results page
    session_start();
    $_SESSION["search_results"] = $resultsArray;

    // Redirect the user to the search results page
    header("Location: search_results.php");
    exit();
}
?>
