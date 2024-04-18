<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Read Books</title>
    <link rel="stylesheet" href="css/books.css" />
  </head>
  <body>
    <header>
      <h1>Welcome to the book land</h1>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section>
        <h2>Cloud Computing</h2>
        <p>Description of cloud computing...</p>
      </section>

      <section>
        <h2>Artificial Intelligence</h2>
        <p>Overview of AI technologies...</p>
      </section>

      <div class="container">
    <h1>Latest Reviews</h1>
    
    <!-- Display reviews from database -->
    <div id="reviews-container">
        <!-- Reviews will be loaded here dynamically -->
        <?php include "get_reviewers.php"?>
    </div>
    
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
