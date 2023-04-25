<!DOCTYPE html>
<html lang="en">

<head>
  <title>8 - Functions and Filters</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../style.css" rel="stylesheet">
</head>

<body>
  <?php

    $movies = [
    ["name" => "The Godfather", "year" => 1972],
    ["name" => "The French Connection", "year" => 1971],
    ["name" => "The Exorcist", "year" => 1973],
    ["name" => "Jaws", "year" => 1975],
    ["name" => "Rocky", "year" => 1976],
    ["name" => "Star Wars", "year" => 1977],
    ["name" => "The Terminator", "year" => 1984],
    ["name" => "The Breakfast Club", "year" => 1985],
    ["name" => "Top Gun", "year" => 1986],
    ["name" => "Die Hard", "year" => 1988],
    ["name" => "Batman", "year" => 1989],
    ["name" => "The Silence of the Lambs", "year" => 1991],
    ["name" => "Jurassic Park", "year" => 1993],
    ["name" => "Pulp Fiction", "year" => 1994],
    ["name" => "The Shawshank Redemption", "year" => 1994],
    ["name" => "Forrest Gump", "year" => 1994],
    ["name" => "Braveheart", "year" => 1995],
    ["name" => "The Matrix", "year" => 1999],
    ["name" => "Gladiator", "year" => 2000],
    ["name" => "Memento", "year" => 2000],
    ["name" => "The Lord of the Rings: The Fellowship of the Ring", "year" => 2001],
    ["name" => "Spider-Man", "year" => 2002],
    ["name" => "The Dark Knight", "year" => 2008],
    ["name" => "Inception", "year" => 2010],
    ["name" => "The Avengers", "year" => 2012],
    ["name" => "Gravity", "year" => 2013],
    ["name" => "Interstellar", "year" => 2014],
    ["name" => "Mad Max: Fury Road", "year" => 2015],
    ["name" => "La La Land", "year" => 2016],
    ["name" => "Parasite", "year" => 2019]
    ];

  function filterByYear(
      $movies,
      $year
  ) {
      $filteredMovies = [];
      foreach($movies as $movie) {
          if($movie['year'] >= $year) {
              $filteredMovies[] = $movie;
          }
      }
      return $filteredMovies;
  }

  ?>

  <h1>8 - Functions and Filters</h1>
  <h5><a href="../index.php">Go Home</a></h5>
  <h5><a href="../hw.html">Go to Homework</a></h5>

  <p>Create an array of your favorites movies, including their respective release dates. Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher. Display the results in an unordered list.</p>

  <h1> Movie Recommendations </h1>

    <h2>Movies from 1970 to 2020</h2>
  <ul>
    <?php foreach ($movies as $movie) : ?>

    <li>
        <?php echo "Name: " . $movie['name'] .", "?>
        <?php echo "Year: " . $movie['year'] ?>
    </li>

    <?php endforeach; ?>
  </ul>

    <?php $year = 2000; ?>
    <h2>Filtered by year of release = <?= $year ?></h2>

  <ul>
    <?php foreach (filterByYear($movies, $year) as $movie) : ?>

    <li>
        <?php echo "Name: " . $movie['name'] .", "?>
        <?php echo "Year: " . $movie['year'] ?>
    </li>

    <?php endforeach; ?>
  </ul>


  <h2><a href="./hw.html">Homework Directory</a></h2>
</body>

</html>
