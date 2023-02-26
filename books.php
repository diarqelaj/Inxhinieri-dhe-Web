<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="js\script.js"></script>
  <header>
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $author; ?></h2>
  </header>
  <main>
    <div class="book-info">
      <img src="<?php echo $cover_image; ?>" alt="Book Cover">
      <div class="details">
        <p><strong>ISBN:</strong> <?php echo $isbn; ?></p>
        <p><strong>Genre:</strong> <?php echo $genre; ?></p>
        <p><strong>Publication Date:</strong> <?php echo $publication_date; ?></p>
        <p><strong>Publisher:</strong> <?php echo $publisher; ?></p>
        <p><strong>Pages:</strong> <?php echo $pages; ?></p>
      </div>
    </div>
    <div class="description">
      <h3>Description</h3>
      <p><?php echo $description; ?></p>
    </div>
  </main>
  <footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $publisher; ?></p>
  </footer>
</bodt>
</html>
