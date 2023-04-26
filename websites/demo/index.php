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
        'name' => 'The Catcher in the Rye',
        'author' => 'J.D. Salinger',
        'year' => 1951,
        'bookURL' => 'https://www.goodreads.com/book/show/5107.The_Catcher_in_the_Rye',
        'authorURL' => 'https://www.goodreads.com/author/show/819789.J_D_Salinger'
        ],
        [
        'name' => 'Franny and Zooey',
        'author' => 'J.D. Salinger',
        'year' => 1961,
        'bookURL' => 'https://www.goodreads.com/book/show/5113.Franny_and_Zooey',
        'authorURL' => 'https://www.goodreads.com/author/show/819789.J_D_Salinger'
        ],
        [
        'name' => 'Nine Stories',
        'author' => 'J.D. Salinger',
        'year' => 1953,
        'bookURL' => 'https://www.goodreads.com/book/show/5439.Nine_Stories',
        'authorURL' => 'https://www.goodreads.com/author/show/819789.J_D_Salinger'
        ],
        [
        'name' => 'Raise High the Roof Beam, Carpenters & Seymour: An Introduction',
        'author' => 'J.D. Salinger',
        'year' => 1963,
        'bookURL' => 'https://www.goodreads.com/book/show/5120.Raise_High_the_Roof_Beam_Carpenters_Seymour_An_Introduction',
        'authorURL' => 'https://www.goodreads.com/author/show/819789.J_D_Salinger'
        ],
        [
        'name' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'year' => 1960,
        'bookURL' => 'https://www.goodreads.com/book/show/2657.To_Kill_a_Mockingbird',
        'authorURL' => 'https://www.goodreads.com/author/show/1825.Harper_Lee'
        ],
        [
        'name' => 'Go Set a Watchman',
        'author' => 'Harper Lee',
        'year' => 2015,
        'bookURL' => 'https://www.goodreads.com/book/show/24817626-go-set-a-watchman',
        'authorURL' => 'https://www.goodreads.com/author/show/1825.Harper_Lee'
        ],
        [
        'name' => '1984',
        'author' => 'George Orwell',
        'year' => 1949,
        'bookURL' => 'https://www.goodreads.com/book/show/5470.1984',
        'authorURL' => 'https://www.goodreads.com/author/show/3706.George_Orwell'
        ],
        [
        'name' => 'Animal Farm',
        'author' => 'George Orwell',
        'year' => 1945,
        'bookURL' => 'https://www.goodreads.com/book/show/170448.Animal_Farm',
        'authorURL' => 'https://www.goodreads.com/author/show/3706.George_Orwell'
        ],
        [
        'name' => 'Homage to Catalonia',
        'author' => 'George Orwell',
        'year' => 1938,
        'bookURL' => 'https://www.goodreads.com/book/show/9646.Homage_to_Catalonia',
        'authorURL' => 'https://www.goodreads.com/author/show/3706.George_Orwell'
        ],
        [
        'name' => 'Down and Out in Paris and London',
        'author' => 'George Orwell',
        'year' => 1933,
        'bookURL' => 'https://www.goodreads.com/book/show/29579.Down_and_Out_in_Paris_and_London',
        'authorURL' => 'https://www.goodreads.com/author/show/3706.George_Orwell'
        ],
        [
        'name' => 'Burmese Days',
        'author' => 'George Orwell',
        'year' => 1934,
        'bookURL' => 'https://www.goodreads.com/book/show/22688.Burmese_Days',
        'authorURL' => 'https://www.goodreads.com/author/show/3706.George_Orwell'
        ],
        [
        'name' => 'One Hundred Years of Solitude',
        'author' => 'Gabriel García Márquez',
        'year' => 1967,
        'bookURL' => 'https://www.goodreads.com/book/show/320.One_Hundred_Years_of_Solitude',
        'authorURL' => 'https://www.goodreads.com/author/show/13450.Gabriel_Garc_a_M_rquez'
        ],
        [
        'name' => 'Love in the Time of Cholera',
        'author' => 'Gabriel García Márquez',
        'year' => 1985,
        'bookURL' => 'https://www.goodreads.com/book/show/9712.Love_in_the_Time_of_Cholera',
        'authorURL' => 'https://www.goodreads.com/author/show/13450.Gabriel_Garc_a_M_rquez'
        ],
        [
        'name' => 'Chronicle of a Death Foretold',
        'author' => 'Gabriel García Márquez',
        'year' => 1981,
        'bookURL' => 'https://www.goodreads.com/book/show/11411.Chronicle_of_a_Death_Foretold',
        'authorURL' => 'https://www.goodreads.com/author/show/13450.Gabriel_Garc_a_M_rquez'
        ],
        [
        'name' => 'The Autumn of the Patriarch',
        'author' => 'Gabriel García Márquez',
        'year' => 1975,
        'bookURL' => 'https://www.goodreads.com/book/show/9720.The_Autumn_of_the_Patriarch',
        'authorURL' => 'https://www.goodreads.com/author/show/13450.Gabriel_Garc_a_M_rquez'
        ],
        [
        'name' => 'The General in His Labyrinth',
        'author' => 'Gabriel García Márquez',
        'year' => 1989,
        'bookURL' => 'https://www.goodreads.com/book/show/9721.The_General_in_His_Labyrinth',
        'authorURL' => 'https://www.goodreads.com/author/show/13450.Gabriel_Garc_a_M_rquez'
        ],
        [
        'name' => 'Beloved',
        'author' => 'Toni Morrison',
        'year' => 1987,
        'bookURL' => 'https://www.goodreads.com/book/show/6149.Beloved',
        'authorURL' => 'https://www.goodreads.com/author/show/3534.Toni_Morrison'
        ],
        [
        'name' => 'Song of Solomon',
        'author' => 'Toni Morrison',
        'year' => 1977,
        'bookURL' => 'https://www.goodreads.com/book/show/11346.Song_of_Solomon',
        'authorURL' => 'https://www.goodreads.com/author/show/3534.Toni_Morrison'
        ],
        [
        'name' => 'The Bluest Eye',
        'author' => 'Toni Morrison',
        'year' => 1970,
        'bookURL' => 'https://www.goodreads.com/book/show/11335.The_Bluest_Eye',
        'authorURL' => 'https://www.goodreads.com/author/show/3534.Toni_Morrison'
        ],
        [
        'name' => 'Sula',
        'author' => 'Toni Morrison',
        'year' => 1973,
        'bookURL' => 'https://www.goodreads.com/book/show/11345.Sula',
        'authorURL' => 'https://www.goodreads.com/author/show/3534.Toni_Morrison'
        ],
        [
        'name' => 'Jazz',
        'author' => 'Toni Morrison',
        'year' => 1992,
        'bookURL' => 'https://www.goodreads.com/book/show/11340.Jazz',
        'authorURL' => 'https://www.goodreads.com/author/show/3534.Toni_Morrison'
        ],
        [
        'name' => 'Slaughterhouse-Five',
        'author' => 'Kurt Vonnegut',
        'year' => 1969,
        'bookURL' => 'https://www.goodreads.com/book/show/4981.Slaughterhouse_Five',
        'authorURL' => 'https://www.goodreads.com/author/show/2778055.Kurt_Vonnegut'
        ],
        [
        'name' => 'Cat\'s Cradle',
        'author' => 'Kurt Vonnegut',
        'year' => 1963,
        'bookURL' => 'https://www.goodreads.com/book/show/135479.Cat_s_Cradle',
        'authorURL' => 'https://www.goodreads.com/author/show/2778055.Kurt_Vonnegut'
        ],
        [
        'name' => 'Breakfast of Champions',
        'author' => 'Kurt Vonnegut',
        'year' => 1973,
        'bookURL' => 'https://www.goodreads.com/book/show/4998.Breakfast_of_Champions',
        'authorURL' => 'https://www.goodreads.com/author/show/2778055.Kurt_Vonnegut'
        ],
        [
        'name' => 'Mother Night',
        'author' => 'Kurt Vonnegut',
        'year' => 1961,
        'bookURL' => 'https://www.goodreads.com/book/show/9592.Mother_Night',
        'authorURL' => 'https://www.goodreads.com/author/show/2778055.Kurt_Vonnegut'
        ],
        [
        'name' => 'Player Piano',
        'author' => 'Kurt Vonnegut',
        'year' => 1952,
        'bookURL' => 'https://www.goodreads.com/book/show/9593.Player_Piano',
        'authorURL' => 'https://www.goodreads.com/author/show/2778055.Kurt_Vonnegut'
        ],
        [
        'name' => 'The Handmaid\'s Tale',
        'author' => 'Margaret Atwood',
        'year' => 1985,
        'bookURL' => 'https://www.goodreads.com/book/show/38447.The_Handmaid_s_Tale',
        'authorURL' => 'https://www.goodreads.com/author/show/3472.Margaret_Atwood'
        ],
        [
        'name' => 'Oryx and Crake',
        'author' => 'Margaret Atwood',
        'year' => 2003,
        'bookURL' => 'https://www.goodreads.com/book/show/46756.Oryx_and_Crake',
        'authorURL' => 'https://www.goodreads.com/author/show/3472.Margaret_Atwood'
        ],
        [
        'name' => 'The Blind Assassin',
        'author' => 'Margaret Atwood',
        'year' => 2000,
        'bookURL' => 'https://www.goodreads.com/book/show/11595.The_Blind_Assassin',
        'authorURL' => 'https://www.goodreads.com/author/show/3472.Margaret_Atwood'
        ],
        [
        'name' => 'Alias Grace',
        'author' => 'Margaret Atwood',
        'year' => 1996,
        'bookURL' => 'https://www.goodreads.com/book/show/11279.Alias_Grace',
        'authorURL' => 'https://www.goodreads.com/author/show/3472.Margaret_Atwood'
        ],
        [
        'name' => 'The Testaments',
        'author' => 'Margaret Atwood',
        'year' => 2019,
        'bookURL' => 'https://www.goodreads.com/book/show/42973319-the-testaments',
        'authorURL' => 'https://www.goodreads.com/author/show/3472.Margaret_Atwood'
        ]
      ];

      function filter($items, $fn)
      {
          $filteredItems = [];
          foreach($items as $item) {
              if($fn($item)) {
                  $filteredItems[] = $item;
              }
          }
          return $filteredItems;
      }

    $filteredBooks = array_filter(
        $books,
        function ($book) {
            $key = 'year';
            $value = 1970;
            return $book[$key] >= $value;
        }
    );

        ?>

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

    <h2>Filtered by the <?php echo $key ?> >= <?php echo $value ?></h2>
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
