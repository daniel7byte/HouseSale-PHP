<?php

include("../../../datosiniciales.php");

try {
  $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  exit;
}

?>

<?php

if ($_GET['param1'] == 'county'):

?>

    <option value="-">All</option>
    <?php
    $queryCounty = $mysql->prepare("SELECT DISTINCT dato11 FROM datoscasas ORDER BY dato11 ASC;");
    $queryCounty->execute();
    $rowsCounty = $queryCounty->fetchAll();
    foreach ($rowsCounty as $row):
    ?>
    <option value="<?=$row['dato11']?>"><?=$row['dato11']?></option>
    <?php endforeach; ?>

<?php

elseif ($_GET['param1'] == 'city'):

?>

  <option value="-">All</option>
  <?php
  $queryCounty = $mysql->prepare("SELECT DISTINCT dato10 FROM datoscasas ORDER BY dato10 ASC;");
  $queryCounty->execute();
  $rowsCounty = $queryCounty->fetchAll();
  foreach ($rowsCounty as $row):
  ?>
  <option value="<?=$row['dato10']?>"><?=$row['dato10']?></option>
  <?php endforeach; ?>

<?php endif; ?>
