<?php
// PHP code to manage the cities
$cities = [
    "Tokyo",
    "Mexico City",
    "New York City",
    "Mumbai",
    "Seoul",
    "Shanghai",
    "Lagos",
    "Buenos Aires",
    "Cairo",
    "London"
];

// Function to display cities as a comma-separated string
function displayCitiesAsString($cities) {
    return implode(', ', $cities);
}

// Sort the initial cities
sort($cities);
$sortedCities = $cities;

// Add more cities
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

// Sort again
sort($cities);
$moreSortedCities = $cities;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2</title>
    <link rel="stylesheet" href="exstyles2.css"> <!-- Link to the CSS file -->
</head>
<body>

<div class="container">
    <h1>Ten Largest Cities in the World</h1>
    <p><?php echo displayCitiesAsString($cities); ?></p>

    <div class="lists">
        <div class="sorted-list-container">
            <h2>Sorted List</h2>
            <ul>
                <?php foreach ($sortedCities as $city): ?>
                    <li><?php echo $city; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="updated-list-container">
            <h2>Updated List</h2>
            <ul>
                <?php foreach ($moreSortedCities as $city): ?>
                    <li><?php echo $city; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>