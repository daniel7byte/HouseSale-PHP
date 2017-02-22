<?php

$city = $_GET['param1'];

include("../../../datosiniciales.php");

try {
  $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  exit;
}

$query = $mysql->prepare("SELECT DISTINCT dato11 FROM datoscasas WHERE dato10=:city ORDER BY dato11 ASC;");
$query->execute([':city' => $city]);
$rows = $query->fetchAll();

foreach ($rows as $row){
  echo '<option value="'.$row['dato11'].'">'.$row['dato11'].'</option>';
}
