<html lang="en">

<head>
  <title>Variables</title>
</head>

<body>
  <?php
  phpinfo();
  // ini_set();

  $var1 = 10;
  echo $var1;
  echo "<br/>";

  $var2 = 100;
  echo $var2;
  echo "<br/>";

  $var1 = 200;
  echo $var1;
  echo "<br/>";

  echo $var1 + $var2;
  echo "<br/>";

  echo $var1 . $var2;
  echo "<br/>";

  $var1 = "Coucou ";
  $var2 = "c'est nous !";
  echo $var1 . $var2;
  echo "<br/>";

  echo $var1 + $var2;
  echo "<br/>";
  ?>
</body>

</html>