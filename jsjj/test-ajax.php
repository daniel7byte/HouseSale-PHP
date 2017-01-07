<?php
$servername = "localhost";
$username = "root";
$password = "";
//$password = "@Soporte7805";
$dbname = "inmobiliaria";
try {
if (isset($_GET["d1"])) $d1 = $_GET["d1"]; else $d1 = '';//zip
if (isset($_GET["d2"])) $d2 = $_GET["d2"]; else $d2 = '';//ciudad
if (isset($_GET["d3"])) $d3 = $_GET["d3"]; else $d3 = '';//country
if (isset($_GET["d4"])) $d4 = $_GET["d4"]; else $d4 = '';//curr price inicial
if (isset($_GET["d5"])) $d5 = $_GET["d5"]; else $d5 = '';//curr price inicial
} catch (Exception $e) {
echo 'Falta alguna de las variables de entrada: ',  $e->getMessage(), "\n";
}
$imgdefecto = "assets/img/img-default.png";

if ($d1 == 'ho') echo 'buenas';
elseif ($d1 == 'la') echo 'tardes';
else echo $d1;

?>