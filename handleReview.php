<?php
include 'db_connect.php';

// This query will handle to submit a review to db from individual book page:

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO reviews (name, rating, comment) VALUES ('$name', '$rating', '$comment')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
