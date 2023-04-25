<!DOCTYPE html>
<html lang="en">

<head>
  <title>6 - Array</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../style.css" rel="stylesheet">
</head>

<body>
  <?php
    $userNames = ['aleena', 'mary', 'tj'];
    ?>

  <h1>6 - Array</h1>
  <p>Create an array of any three usernames - perhaps for a "Top Performing Users" section of your website. Then, create
    a loop that displays each username within a list item.</p>
  <ul>
    <?php foreach($userNames as $userName) : ?>
    <li>
      <?php echo $userName ?>
    </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>
