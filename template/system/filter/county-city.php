<?php

$county = $_GET['param1'];

include("../../../datosiniciales.php");

try {
  $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  exit;
}

$query = $mysql->prepare("SELECT DISTINCT dato10 FROM datoscasas WHERE dato11=:county ORDER BY dato10 ASC;");
$query->execute([':county' => $county]);
$rows = $query->fetchAll();

foreach ($rows as $row){
  echo '<option value="'.$row['dato10'].'">'.$row['dato10'].'</option>';
}
