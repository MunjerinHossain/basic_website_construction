<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review This Book</title>
    <style>
        .container {
            max-width: 500px;
            max-height: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        form input[type="text"],
        form input[type="number"],
        form textarea {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .review {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .review h3 {
            color: #007bff;
        }

        .review p {
            margin-top: 5px;
            color: #666;
        }

        .latestReview {
            max-width: 500px;
            max-height: 800px;
            margin: 0 auto;
            background-color: #000;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    <main>
        <div class="latestReview">

            <h2>Latest Reviews</h2>

            <!-- Display reviews from database -->
            <div id="reviews-container">
                <!-- Reviews will be loaded here dynamically -->
                <?php include "get_reviewers.php" ?>
            </div>
        </div>

        <div class="container">

            <h2>Add a Review</h2>
            <form id="reviewForm" action="handleReview.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="rating">Rating (1-5):</label>
                <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>

                <label for="comment">Your Review:</label><br>
                <textarea id="comment" name="comment" rows="4" required></textarea><br><br>

                <input type="submit" value="Submit Review">
            </form>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>

    <footer>
        <p>&copy; 2024 Munjerin Hossain</p>
    </footer>
</body>

</html>