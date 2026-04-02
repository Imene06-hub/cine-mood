<!DOCTYPE html>
<html>
<head>
  <title>Critiques</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .w3-card{
      background-color:rgb(255, 255, 192);
    }
   
    </style>
</head>
<body>

<div class="w3-container " >
  <h2 class="w3-center" style="font-family:Trebuchet MS">Liste des critiques</h2>

  <div class="w3-bar w3-light-grey w3-padding">
    <button class="w3-button w3-bar-item" onclick="filtrer(0)">Toutes</button>
    <button class="w3-button w3-bar-item" onclick="filtrer(1)">★</button>
    <button class="w3-button w3-bar-item" onclick="filtrer(2)">★★</button>
    <button class="w3-button w3-bar-item" onclick="filtrer(3)">★★★</button>
    <button class="w3-button w3-bar-item" onclick="filtrer(4)">★★★★</button>
  </div>

  <div class="w3-row-padding">
    <?php
    $f = fopen("donnees.txt", "r");
    $list = array();

    while (!feof($f)) {
      $l = fgets($f);
      if (trim($l) != "") {
        $p = explode("|", trim($l));
        if (count($p) >= 6) {
          $list[] = $p;
        }
      }
    }
    fclose($f);

    usort($list, function($a, $b) {
      return (int)$a[0] - (int)$b[0];
    });

    $i = 0;
    foreach ($list as $c) {
      $id = $c[0];
      $titre = $c[1];
      $type = $c[2];
      $annee = $c[3];
      $note = $c[4];
      $texte = $c[5];

      if ($i % 2 == 0) {
        echo '<div class="w3-row-padding w3-margin-top">';
      }

      echo '<div class="w3-col m6 note' . $note . '">';
      echo '<div class="w3-card w3-round-xlarge w3-padding w3-margin">';
      echo "<h4>$titre ($type - $annee)</h4>";
      echo "<p><strong>Note :</strong> " . str_repeat("★", $note) . "</p>";
      echo "<p>$texte</p>";
      echo "<a href='index.php?page=editcritique&id=$id'>Modifier</a> | ";
      echo "<a href='index.php?page=critiques&suppr=$id'>Supprimer</a>";
      echo '</div>';
      echo '</div>';

      if ($i % 2 == 1) {
        echo '</div>';
      }
      $i++;
    }

    if ($i % 2 == 1) {
      echo '</div>';
    }
    ?>
  </div>
</div>

<script>
function filtrer(note) {
  var cards = document.querySelectorAll('.w3-col');
  for (var i = 0; i < cards.length; i++) {
    if (note == 0 || cards[i].classList.contains("note" + note)) {
      cards[i].style.display = "block";
    } else {
      cards[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
