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

    $books = [
    [
    'name' => "Do Android Dream of Electric Sheep?",
    'author' => 'Philip K. Dick',
    'releaseYear' => 1968,
    'purchaseURL' => "https://www.amazon.com/Blade-Runner-Philip-K-Dick/dp/1524796972/",
    ],

    [
    'name' => "Dark Matter",
    'author' => 'Blake Crouch',
    'releaseYear' => 2016,
    'purchaseURL' => "https://www.amazon.com/Dark-Matter-Novel-Blake-Crouch/dp/1101904240",
    ],

    [
    'name' => "Project Hail Mary",
    'author' => 'Andy Weir',
    'releaseYear' => 2021,
    'purchaseURL' => "https://www.amazon.com/Project-Hail-Mary-Andy-Weir/dp/0593135202/",
    ],

    [
    'name' => "The Martian",
    'author' => 'Andy Weir',
    'releaseYear' => 2011,
    'purchaseURL' => "https://www.amazon.com/Martian-Novel-Andy-Weir/dp/0804139024",
    ],
    ];

  ?>

  <h1>
    Book Recommendations
  </h1>

  <ul>
    <?php foreach ($books as $book) : ?>
    <li>
      <a href="<?= $book['purchaseURL'] ?>">
        <?php echo "Name: " . $book['name'] ?>
        <?php echo "Author: " . $book['author'] ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>

  <h2><a href="./hw.html">Homework Directory</a></h2>
</body>

</html>
