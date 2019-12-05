<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les conditions, exercice 7</title>
</head>
<!-- ternaire à traduire :
echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?> -->
<body>
  <p>
    <?php
    $isOk = false;
    if (! $isOk) {
      echo 'C\'est pas bon';
    }
    else {
      echo 'C\'est ok';
    }
    ?>
  </p>
</body>
</html>
