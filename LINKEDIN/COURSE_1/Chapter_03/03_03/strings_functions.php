<html lang="en">

<head>
  <title>Strings functions</title>
</head>

<body>
  <?php

  $first = "The quick brown fox";
  $second = " jumped over the lazy dog !";

  $third = $first;
  $third .= $second;

  echo $third;
  ?>
  <br/>
  Lowercase : <?php echo strtolower($third); ?><br>
  Upercase : <?php echo strtoupper($third); ?><br>
  Upercase first : <?php echo ucfirst($third); ?><br>
  Upercase words : <?php echo ucwords($third); ?><br>
  
</body>

</html>