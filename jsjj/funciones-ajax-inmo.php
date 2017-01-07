<?php
$servername = "localhost";
$username = "root";
$password = "";
//$password = "@Soporte7805";
$dbname = "inmobiliaria";
try {
if (isset($_GET["Action"])) $Action = $_GET["Action"]; else $Action = '';//accion a realizar o funcion a buscar
if (isset($_GET["arraydatos"])) $arraydatos = $_GET["arraydatos"]; else $arraydatos = '';//todos los datos pasados separados con raya abajo _
if (isset($_GET["obj"])) $obj = $_GET["obj"]; else $obj = '';//country
if (isset($_GET["divobj"])) $divobj = $_GET["divobj"]; else $divobj = '';//divs donde se pondran las repuestas
//if (isset($_GET["d5"])) $d5 = $_GET["d5"]; else $d5 = '';//curr price inicial
} catch (Exception $e) {
echo 'Falta alguna de las variables de entrada: ',  $e->getMessage(), "\n";
}
$imgdefecto = "assets/img/img-default.png";
$respuesta = '';
$arraydatosProce = explode("_", $arraydatos);
//----------------------SELECCIONADOR DE LA ACCION ----------------------------------
if ($Action == 'responder')  {$respuesta .= "<result>" ;
$respuesta .="<obj0>";
$respuesta .="lo que uno quiera";
//$respuesta .= resulTmp;
$respuesta .= "</obj0>";
$respuesta .= "<obj1>";
$respuesta .= "ha";
$respuesta .= "</obj1>";
$respuesta .= "</result>";
echo $respuesta;}
if ($Action == 'filtrosinmo')  {$respuesta .= "<result>" ;
$respuesta .="<obj0>";
$respuesta .=" <option>".$arraydatosProce[0]."</option>
						 <option value=\"\" >Todos</option>
						 <option value=\"primero\" >primero</option>";
$respuesta .= "</obj0>";
$respuesta .= "<obj1>";
$respuesta .= "ha";
$respuesta .= "</obj1>";
$respuesta .= "<obj2>";
$respuesta .= "ha";
$respuesta .= "</obj2>";
$respuesta .= "</result>";
echo $respuesta;}
//elseif ($Action == 'la') echo 'tardes'; 
/*else {
	$respuesta .= "<result>" ;
$respuesta .="<obj0>";
$respuesta .='No existe funcion para la siguiente acccion '.$Action;
$respuesta .= "</obj0>";
}*/
//-----------------------FUNCIONES PARA AJAX ----------------------------
function responder () { 

}
function filtrosinmo () { 

}
//echo $respuesta;
?>