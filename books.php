<!DOCTYPE html>
<html lang="en">

<!-- This page is static view-only. Only showing some collection of books in a image gallery: -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Read Books</title>
  <link rel="stylesheet" href="css/books.css" />
  <style>
    div.gallery {
      border: 1px solid #ccc;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: 100%;
    }

    div.desc {
      padding: 20px;
      text-align: center;
    }

    * {
      box-sizing: border-box;
    }

    .responsive {
      padding: 0 6px;
      float: left;
      width: 24.99999%;
      height: 24.99999%;
    }

    .detail {
      padding: 10px;
      text-align: center;
      /* float: left; */
      width: 100%;
      margin-right: 10px;
    }

    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }

    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
  </style>
</head>

<body>
  <header>
    <h1>Welcome to the Book Land</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./images/internet.jpg">
          <img src="./images/internet.jpg" alt="Internet" width="600" height="400">
        </a>
        <div class="desc">Internet & World Wide Web: How to Program, Fifth Edition</div>
        <p class="detail">This book is appropriate for both introductory and intermediate-level client-side and
          server-side programming courses.</p>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./images/cssbooks.jpg">
          <img src="./images/cssbooks.jpg" alt="CSS" width="600" height="400">
        </a>
        <div class="desc">The Zen of CSS Design: Visual Enlightenment for the Web</div>
        <p class="detail">Proving once and for all that standards-compliant design does not equal dull design, this
          inspiring tome uses examples from the landmark CSS Zen Garden site as the foundation for discussions on how to
          create beautiful, progressive CSS-based Web sites. </p>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./images/reactbook.png">
          <img src="./images/reactbook.png" alt="React" width="600" height="400">
        </a>
        <div class="desc">Full-Stack React Projects- Second Edition</div>
        <p class="detail">A practical, project-based guide to full-stack JavaScript web development combining the power
          of React with industry-tested server-side technologies</p>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./images/phpbooks.jpg">
          <img src="./images/phpbooks.jpg" alt="React" width="600" height="400">
        </a>
        <div class="desc">PHP & MySQL: Server-side Web Development</div>
        <p class="detail">Learn PHP, the programming language used to build sites like Facebook, Wikipedia and
          WordPress.</p>
      </div>
    </div>

    <div class="clearfix"></div>
  </main>

  <footer>
    <p>&copy; 2024 Munjerin Hossain</p>
  </footer>
</body>

</html>