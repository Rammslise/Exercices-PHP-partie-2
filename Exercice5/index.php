<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les conditions, exercice 5</title>
</head>
<body>
  <!-- Ternaire à traduire:
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'; -->
  <p>
    <?php
    $gender = 'Homme';
    if ($gender == 'Homme')
    {
      echo 'C\'est un développeur !';
    }
    elseif ($gender == 'Femme')
    {
      echo 'C\'est une développeuse !';
    }
    ?>
  </p>
</body>
</html>
