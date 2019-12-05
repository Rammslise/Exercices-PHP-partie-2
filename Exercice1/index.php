<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Les conditions, exercice 1</title>
  </head>
  <!-- Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.-->
  <body>
    <!-- Les conditions permettent de donner des ordres différents à PHP selon le cas,
    elles affichent des choses différentes en fonction du visiteur -->
<p>
<?php
//on définit la variable age par une valeur ici int (nbre entier)
$age = 29;
if ($age >= 18) //si $age est supérieur ou égal à 18
{
  echo 'Vous êtes majeur.';
}
else // sinon
{
  echo 'Vous êtes mineur.';
}
 ?>
</p>
  </body>
</html>
