<!DOCTYPE html>
<html lang="en">

<head>
  <title>Demo</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <?php
    $books = ["Do Android Dream of Electric Sheep?", "The Langoliers", "Hail Mary"];
    ?>

  <h1>
    Book Recommendations
  </h1>

  <ul>
    <?php foreach ($books as $book) : ?>
    <li>
        <?php echo $book ?>
    </li>
    <?php endforeach; ?>
  </ul>

  <p>
    <?php echo $books[1]; ?>
  </p>
  <h2><a href="./hw.html">Homework Directory</a></h2>
</body>

</html>
