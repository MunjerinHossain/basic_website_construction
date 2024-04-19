<!DOCTYPE html>
<html lang="en">
<!-- These individual div page will open single book page upon clicking on the hyperclick from the table: -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Computing Books</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>The Zen of CSS Design</h1>
        <nav>

            <ul style="list-style-type: none; padding: 0; align-items: center;text-align: center;">
                <li><a href="index.html">Back to Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="books.php">Read Books</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <!-- This PHP script will show the latest review dynamically, and will have a form to add review: -->

            <?php include "review.php" ?>

        </section>
    </main>

    <footer>
        <p>&copy; 2024 Munjerin Hossain</p>
    </footer>
</body>

</html>