<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Les conditions, exercice 3</title>
</head>
<!-- Créer deux variables age et gender. La variable gender peut prendre comme valeur :
    Homme
    Femme
En fonction de l'âge et du genre afficher la phrase correspondante :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
Gérer tous les cas. -->
<body>
  <p>
    <?php
    $age = 18;
    $gender = 'Homme';
  /*  if ($age >= 18 && $gender == 'Femme')
    {
      echo 'Vous êtes une femme et vous êtes majeur.';
    }
    elseif ($age <= 18 && $gender == 'Femme')
    {
      echo 'Vous êtes une femme et vous êtes mineur.';
    }
    ?>
  </p>
  <p>
    <?php
    $age = 16;
    $gender = 'Femme';
   if ($age <= 18 && $gender == 'Homme')
    {
      echo 'Vous êtes un homme et vous êtes mineur.';
    }
    elseif ($age >= 18 && $gender == 'Homme' )
    {
      echo 'Vous êtes un homme et vous êtes majeur.';
    } */
    echo $gender == 'Homme' ? 'Vous êtes un homme' : 'Vous êtes une femme';
    echo $age >= 18 ? ' et vous êtes majeur ' : ' et vous êtes mineur';
    ?>
  </p>
</body>
</html>
