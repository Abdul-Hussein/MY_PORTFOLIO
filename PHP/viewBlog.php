<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blog</title>
    <link rel="stylesheet" href="CSS/BlogPage.css"> 
</head>
<body>

<form id="sort-form" method="get" action="">
    <label for="month">Sort by month:</label>
    <select name="month" id="month">
        <option value="all">All Months</option>
        <?php
        $months = array(
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December'
        );
        foreach ($months as $monthNum => $monthName) {
            echo '<option value="' . $monthNum . '">' . $monthName . '</option>';
        }
        ?>
    </select>
    <button type="submit">Sort</button>
</form>
<?php 
include('connect.php');

$sqlSelect = "SELECT * FROM post";
if(isset($_GET['month']) && $_GET['month'] != 'all') {
    $month = $_GET['month'];
    $sqlSelect .= " WHERE MONTH(date) = '$month'";
}

$result = mysqli_query($conn, $sqlSelect);

// Fetch all rows from the result set into an array
$blogEntries = array();
while($data = mysqli_fetch_assoc($result)) {
    $blogEntries[] = $data;
}

// Sort the blog entries by date and time
$sortedEntries = sortByDateTime($blogEntries);

// Display sorted blog entries
foreach ($sortedEntries as $entry) {
    echo '<div class="post-add">';
    echo '<h2 class="title">' . $entry['title'] . '</h2>'; 
    echo '<i class="fa-solid fa-clock"></i><span class="date">' . $entry['date'] . '</span>'; // Display date alongside the clock icon
    echo' <p class="time">||'.$entry['time']. '</p>';
    echo '<p class="post-meta">By ' . $entry['author'] . '</p>';
    echo '<p class="content">' . $entry['content'] . '</p>';
    echo '<hr class="divider">';
    echo '</div>';
}


// Function to sort blog entries by date and time

function sortByDateTime($blogEntries) {
    // Define an empty array to store sorted blog entries
    $sortedEntries = array();

    // Loop through each blog entry
    foreach ($blogEntries as $entry) {
        // Check if the date and time are valid
        $dateTime = $entry['date'] . ' ' . $entry['time'];
        if (strtotime($dateTime) !== false) {
            // If valid, store the entry with its timestamp as the key
            $timestamp = strtotime($dateTime);
            $sortedEntries[$timestamp] = $entry;
        }
    }
    // Sort the entries based on their timestamps (most recent first)
    krsort($sortedEntries);

    // Return the sorted blog entries
    return $sortedEntries;
}
?>


</body>
</html>


