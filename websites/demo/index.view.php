<!DOCTYPE html>
<html lang="en">

<head>
  <title>Demo</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <h1>
    Book Recommendations
  </h1>

  <h2>All Books</h2>
  <ol>
    <?php foreach ($books as $book) : ?>
    <li>
      <?php echo $book['name'] ?>
      <?php echo $book['author'] ?>
    </li>
    <?php endforeach; ?>
  </ol>

  <?php
      $key = 'year';
      $value = 1970;
    ?>

  <h2>Filtered by the
    <?php echo $key ?> >=
    <?php echo $value ?>
  </h2>
  <ol>
    <?php foreach ($filteredBooks as $book) : ?>
    <li>
      <?php echo $book['name'] ?>
      <?php echo $book['author'] ?>
    </li>
    <?php endforeach; ?>
  </ol>


  <h2><a href="./hw.html">Homework Directory</a></h2>
</body>

</html>
