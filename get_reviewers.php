<?php
include 'db_connect.php';

$sql = "SELECT * FROM reviews ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='review'>";
        echo "<h3>" . $row['name'] . " (Rating: " . $row['rating'] . ")</h3>";
        echo "<p>" . $row['comment'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No reviews yet.";
}

$conn->close();
?>
