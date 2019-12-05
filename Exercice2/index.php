<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les conditions, exercice 2</title>
</head>
<!-- Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes. -->
<body>
  <!-- Première façon de l'écrire -->
  <p>
    <?php
    $isEasy = true;
    if ($isEasy == true) // si la valeur est égale à true
    {
      echo 'C\'est facile !!';
    }
    elseif ($isEasy == false) // sinon si
    {
      echo 'C\'est difficile !!';
    }
    ?>
  </p>
  <!-- Seconde façon de l'écrire, plus rapide, dites ternaire -->
  <p>
    <?php
    $isEasy = true;
    // ? (true) si ça c'est vrai, alors on affiche C'est facile, : (sinon) on affiche C'est difficile
    echo $isEasy ? 'C\'facile !!' : 'C\'est difficile';
    ?>
  </p>
</body>
</html>
