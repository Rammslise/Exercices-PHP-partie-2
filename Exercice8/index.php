<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Les conditions, exercice 8</title>
</head>
<!-- ternaire à traduire :
<php
echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
?> -->
<body>
  <p>
    <?php
    $isOk = true;
    if ($isOk)
    {
      echo 'C\'est ok';
    }
    else {
      echo 'C\'est pas bon';
    }
    ?>
  </p>
</body>
</html>
