<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Variables PHP</title>
</head>

<body>
  <!-- Tableaux -->
  <!-- Exercice 1 -->
  <?php
  echo "Exercice. 1" . "<br><br>";
  $tablo = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
  echo "Le tableau est créé";
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 2 -->
  <?php
  echo "Exercice. 2" . "<br><br>";
  echo $tablo[2];
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 3 -->
  <?php
  echo "Exercice. 3" . "<br><br>";
  echo $tablo[5];
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 4 -->
  <?php
  echo "Exercice. 4" . "<br><br>";
  $tablo[7] = 'août';
  echo "La valeur 'aout' a été remplacée par la valeur 'août'"
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 5 -->
  <?php
  echo "Exercice. 5" . "<br><br>";
  $Normandie = [76 => 'Seine-Maritime', 61 => 'Orne', 14 => 'Calvados', 50 => 'Manche', 27 => 'Eure']
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 6 -->
  <?php
  echo "Exercice. 6" . "<br><br>";
  echo $Normandie[76];
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 7 -->
  <?php
  echo "Exercice. 7" . "<br><br>";
  $Normandie[35] = 'Ille-et-Vilaine';
  print_r($Normandie);
  // Méthode push
  // ($Normandie += [13 => 'Bouches du Rhône']);
  // print_r($Normandie);
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 8 -->
  <?php
  echo "Exercice. 8" . "<br><br>";
  for ($i = 0; $i <= 11; $i++) {
    echo $tablo[$i] . "<br>";
  }
  echo "<br>";
  // Boucle forEach
  foreach ($tablo as $value) {
    echo "$value<br>";
  }
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 9 -->
  <?php
  echo "Exercice. 9" . "<br><br>";
  echo $Normandie[14] . "<br>";
  echo $Normandie[27] . "<br>";
  echo $Normandie[61] . "<br>";
  echo $Normandie[50] . "<br>";
  echo $Normandie[35] . "<br>";
  echo $Normandie[76] . "<br>";
  ?>
  <br>
  <br>
  <br>
  <!-- Exercice 10 -->
  <?php
  echo "Exercice. 10" . "<br><br>";
  foreach ($Normandie as $key => $value) {
    echo "Le département $value a le numéro $key<br>";
  }
  ?>
  <script src="assets/js/script.js"></script>
</body>

</html>