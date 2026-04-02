<?php
$id = "";
$titre = "";
$type = "";
$annee = "";
$note = "";
$texte = "";

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $lines = file("donnees.txt");
  foreach ($lines as $line) {
    list($i, $t, $ty, $an, $n, $tx) = explode("|", trim($line));
    if ($i == $id) {
      $titre = $t;
      $type = $ty;
      $annee = $an;
      $note = $n;
      $texte = $tx;
    }
  }
}
?>
<form class="w3-container" method="post" onsubmit="return check()">
  <?php if ($id != "") echo "<p>ID: $id</p>"; ?>
  <input type="hidden" name="id" value="<?= $id ?>">
  <p><label>Titre</label><input class="w3-input" name="titre" value="<?= $titre ?>"></p>
  <p><label>Type</label>
    <select class="w3-select" name="type">
      <option value="film" <?= $type=="film"?"selected":"" ?>>Film</option>
      <option value="série" <?= $type=="série"?"selected":"" ?>>Série</option>
    </select>
  </p>
  <p><label>Année</label><input class="w3-input" name="annee" type="number" value="<?= $annee ?>"></p>
  <p><label>Note (1 à 4)</label><input class="w3-input" name="note" type="number" min="1" max="4" value="<?= $note ?>"></p>
  <p><label>Critique</label><textarea class="w3-input" name="texte"><?= $texte ?></textarea></p>
  <p><input type="submit" class="w3-button w3-theme-action" value="Valider"></p>
</form>
<script>
function check() {
  let f = document.forms[0];
  if (!f.titre.value || !f.annee.value || !f.note.value || !f.texte.value) {
    alert("Tous les champs doivent être remplis.");
    return false;
  }
  return true;
}
</script>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $titre = $_POST["titre"];
  $type = $_POST["type"];
  $annee = $_POST["annee"];
  $note = $_POST["note"];
  $texte = $_POST["texte"];
  if ($id == "") {
    $lines = file("donnees.txt");
    $max = 0;
    foreach ($lines as $line) {
      $parts = explode("|", $line);
      if ((int)$parts[0] > $max) $max = (int)$parts[0];
    }
    $id = $max + 1;
    $new = "$id|$titre|$type|$annee|$note|$texte\n";
    file_put_contents("donnees.txt", $new, FILE_APPEND);
    echo "<p>Critique ajoutée ! <a href='index.php?page=critiques'>Retour</a></p>";
  } else {
    $lines = file("donnees.txt");
    $newLines = [];
    foreach ($lines as $line) {
      $parts = explode("|", trim($line));
      if ($parts[0] == $id) {
        $newLines[] = "$id|$titre|$type|$annee|$note|$texte\n";
      } else {
        $newLines[] = $line;
      }
    }
    file_put_contents("donnees.txt", implode("", $newLines));
    echo "<p>Critique modifiée ! <a href='index.php?page=critiques'>Retour</a></p>";
  }
}
?>