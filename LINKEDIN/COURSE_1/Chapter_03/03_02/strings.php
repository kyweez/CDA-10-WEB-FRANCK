<html lang="en">

<head>
  <title>Strings</title>
</head>

<body>
  <?php

  echo "Hello world<br/>";
  echo 'Hello world<br/>';

  $greeting = "Hello";
  $target = "World";
  $phrase = $greeting . " " . $target;
  echo $phrase;
  ?>
  <br />
  <?php
  echo "$phrase again<br/>";
  echo '$phrase again<br/>';
  echo "{$phrase}again<br/>";
  ?>
</body>

</html>