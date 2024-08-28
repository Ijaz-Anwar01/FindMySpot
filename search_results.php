<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkSpot Booking - Search Results</title>
    <link rel="stylesheet" href="newcss.css">
</head>
<body>
    <header>
        <h1>FindmySpot</h1>
        <p>Find and book parking spots near you!</p>
    </header>

    <main>
        <section class="search-results">
            <h2>Search Results</h2>
            
            <?php
            // Start a session to access the search results array
            session_start();

            // Check if search results exist in the session
            if (isset($_SESSION["search_results"])) {
                $searchResults = $_SESSION["search_results"];

                // Loop through and display the search results with clickable links
                foreach ($searchResults as $result) {
                    $spotID = $result["SpotID"];
                    $spotName = $result["SpotName"];
                    $location = $result["Location"];
                    $price = $result["Price"];

                    // Display each result as a clickable link to the parking details page
                    echo "<div class='result'>";
                    echo "<h3><a href='parking_details.php?spotID=$spotID'>$spotName</a></h3>";

                    echo "<p>Location: $location</p>";
                    echo "<p>Price: ₹$price</p>";
                    // Add more details as needed
                    echo "</div>";
                }

                // Clear the session variable
                unset($_SESSION["search_results"]);
            } else {
                echo "<p>No results found.</p>";
            }
            ?>

        </section>
    </main>
</body>
</html>
