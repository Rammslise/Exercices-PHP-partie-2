<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les conditions, exercice 6</title>
</head>
<!--Traduire ternaire:
<php
echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?> -->
<body>
  <p>
    <?php
    $age = 18;
    if ($age >= 18) {
      echo 'Tu es majeur';
    }
    else {
      echo 'Tu n\'es pas majeur';
    }
    ?>
  </p>
</body>
</html>
