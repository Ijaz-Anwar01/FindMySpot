<?php
// Retrieve the ID from the URL
$spotID = $_GET['spotID'];

// Create a new SQL query to fetch the details of the selected parking spot
$sql = "SELECT * FROM ParkingSpots WHERE SpotID = $spotID";

// Execute the query and retrieve the details
$conn = new mysqli("localhost", "root", "", "findmyspot");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $spotName = $row["SpotName"];
    $location = $row["Location"];
    $price = $row["Price"];
    $adress=$row["Description"];
    $contact=$row["ContactInfo"];
    // Add more details as needed
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Spot Details</title>
    <link rel="stylesheet" href="newcss.css">
    <style>
        /* Style the submit button */
        .submit-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Add a hover effect and animation */
        .submit-button:hover {
            background-color: #0056b3;
            animation: pulse 1s infinite; /* Apply a pulsing animation on hover */
        }

        /* Center the button */
        .button-container {
            text-align: center;
            margin-top: 20px; /* Adjust the margin as needed */
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <header>
        <h1>FindmySpot</h1>
        <p>Find and book parking spots near you!</p>
    </header>

    <main>
        <section class="parking-details">
            <h2>Parking Spot Details</h2>
            <h3><?php echo $spotName; ?></h3>
            <p>Location: <?php echo $location; ?></p>
            <p>Adress: <?php echo $adress; ?></p>
            <p>Contact: <?php echo $contact; ?></p>
            <p>Price: ₹<?php echo $price; ?></p>
        </section>

        <!-- Button container for centering -->
        <div class="button-container">
            <!-- Booking Form -->
            <form action="upi.php" method="post">
                <!-- Add input fields for booking information (date, time, etc.) -->
                <input class="submit-button" type="submit" value="Book">
            </form>
        </div>
    </main>
</body>
</html>
