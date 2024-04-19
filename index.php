<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Computing Books</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Books Management</h1>
        <nav>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="books.php">Read Books</a></li>
        </nav>
    </header>

    <main>
        <section>
            <h2 align="center">Top ranked Books</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#one">The Zen of CSS Design: Visual Enlightenment for the Web</a></td>

                        <td>Dave Shea, Molly E. Holzschlag</td>
                        <td>2005</td>
                    </tr>
                    <tr>
                        <td><a href="#two">Full-Stack React Projects- Second Edition</a></td>
                        <td>Shama Hoque</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td><a href="#three">PHP & MySQL: Server-side Web Development</a></td>
                        <td>Jon Duckett</td>
                        <td>2022</td>
                    </tr>
                </tbody>
            </table>

            <div class="page" id="one">
            <div class="bookHeader" style="background-color: #00877a; padding: 20px; text-align: center;">
                <h2 style="color:#fff">The Zen of CSS Design</h2>
                <ul style="list-style-type: none; padding: 0; align-items: center;text-align: center;">
                    <li><a href="#">Back to Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="books.php">Read Books</a></li>
                </ul>
            </div>
            <?php include "review.php" ?>
            </div>

            <div class="page" id="two">
                <div class="bookHeader" style="background-color: #00877a; padding: 20px; text-align: center;">
                    <h2 style="color:#fff">Full-Stack React Projects- Second Edition</h2>
                    <ul style="list-style-type: none; padding: 0; align-items: center;text-align: center;">
                        <li><a href="#">Back to Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="books.php">Read Books</a></li>
                    </ul>
                </div>

                <?php include "review.php" ?>
            </div>

            <div class="page" id="three">
            <div class="bookHeader" style="background-color: #00877a; padding: 20px; text-align: center;">
                <h2 style="color:#fff">PHP & MySQL: Server-side Web Development</h2>
                <ul style="list-style-type: none; padding: 0; align-items: center;text-align: center;">
                    <li><a href="#">Back to Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="books.php">Read Books</a></li>
                </ul>
            </div>
                <?php include "review.php" ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Munjerin Hossain</p>
    </footer>
</body>

</html>