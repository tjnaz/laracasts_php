<!-- ************ -->
<!-- [2023-04-25] -->
<!-- ************ -->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>7 - Associative Array</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../style.css" rel="stylesheet">
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
    ];

  ?>

  <h1>7 - Associative Array</h1>
    <h5><a href="../index.php">Go Home</a></h5>
    <h5><a href="../hw.html">Go to Homework</a></h5>

    <p>Extend the book list from this episode's example to also include and display the release year immediately after the book's title.</p>

  <ul>
  <ul>
    <?php foreach ($books as $book) : ?>

    <li>
      <a href="<?= $book['purchaseURL'] ?>">
        <?php echo "Name: " . $book['name'] ?><br>
        <?php echo "Year: " . $book['releaseYear'] ?>
      </a>
    </li>

    <?php endforeach; ?>
  </ul>

  </ul>
</body>

</html>
