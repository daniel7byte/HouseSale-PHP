<?php
include("datosiniciales.php");
try {
if (isset($_GET["Action"])) $Action = $_GET["Action"]; else $Action = '';//accion a realizar o funcion a buscar
if (isset($_GET["arraydatos"])) $arraydatos = $_GET["arraydatos"]; else $arraydatos = '';//todos los datos pasados separados con raya abajo _
if (isset($_GET["obj"])) $obj = $_GET["obj"]; else $obj = '';//country
if (isset($_GET["divobj"])) $divobj = $_GET["divobj"]; else $divobj = '';//divs donde se pondran las repuestas
//if (isset($_GET["d5"])) $d5 = $_GET["d5"]; else $d5 = '';//curr price inicial
} catch (Exception $e) {
echo 'Falta alguna de las variables de entrada: ',  $e->getMessage(), "\n";
}
$respuesta = '';
$sqlqueryori =  " SELECT * FROM ".$dbname.".datoscasas d ";
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
/*         ----------------------        filtrosinmod1          ----------------------         */
if ($Action == 'filtrosinmod1')  {
try {
$da1=$arraydatosProce[0];
$tda1=strlen($arraydatosProce[0]);
$da2=$arraydatosProce[1];
$tda2=strlen($arraydatosProce[1]);
$da3=$arraydatosProce[2];
$tda3=strlen($arraydatosProce[2]);
}
    catch(PDOException $e) {
    echo "Error selectcountry: " . $e->getMessage();
   }
$selectzip = '';
$selectcountry = '';
$selectcity = '';
//$sqlqueryori = $sqlquery;
try {$nomdato = "dato10";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//create table filtrocity SELECT dato10 FROM ".$dbname.".datoscasas d group by dato10
	$sqlquery = " SELECT ".$nomdato." FROM ".$dbname.".datoscasas d where 1=1 ";
    $sqlquerywhere = "";
	if( $da3!="" ) {
	$sqlquerywhere .= " and dato11='".$da3."' ";
	}
	if( $da2!="" ) {
	$sqlquerywhere .= " and dato10='".$da2."' ";
	}
	if($tda1==5) $sqlquerywhere .= " and dato24='".$da1."' ";
	//else $sqlquery = " SELECT dato10 FROM ".$dbname.".datoscasas d ";
	$areemplazar = array('-rem-');
    $remplazo   = array($sqlquerywhere);
	$sqlquery = $sqlquery .$sqlquerywhere . " group by ".$nomdato." ";
	$stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
    $stmt->execute();
	$countulti = $stmt->rowCount();
	if($countulti == 0) $selectcountry = $selectcountry . "<option value=\"\" >".$nodatosdl."</option>";
	else {
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$selectcountry = $selectcountry . "<option value=\"\" >Todos</option>";
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $selectcountry = $selectcountry . "<option value='" .$resultado[$nomdato] . "'>" .$resultado[$nomdato] ."</option>";
    }
	}
}
catch(PDOException $e) {
    echo "Error conexion db: " . $e->getMessage();
}
try {$nomdato = "dato11";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//create table filtrocity SELECT dato10 FROM ".$dbname.".datoscasas d group by dato10
	$sqlquery = " SELECT ".$nomdato." FROM ".$dbname.".datoscasas d where 1=1 ";
    $sqlquerywhere = "";
	if( $da2!="" ) {
	$sqlquerywhere .= " and dato10='".$da2."' ";
	}
	if( $da3!="" ) {
	$sqlquerywhere .= " and dato11='".$da3."' ";
	}
	if($tda1==5) $sqlquerywhere .= " and dato24='".$da1."' ";
	//else $sqlquery = " SELECT ".$nomdato." FROM ".$dbname.".datoscasas d ";
	$areemplazar = array('-rem-');
    $remplazo   = array($sqlquerywhere);
	//$sqlquery = str_replace($areemplazar, $remplazo, $sqlquery) . " group by ".$nomdato." ";
	$sqlquery = $sqlquery .$sqlquerywhere . " group by ".$nomdato." ";
	$stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
    $stmt->execute();
	$countulti = $stmt->rowCount();
	if($countulti == 0) $selectcity = $selectcity . "<option value=\"\" >".$nodatosdl."</option>";
	else {
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$selectcity = $selectcity . "<option value=\"\" >Todos</option>";
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $selectcity = $selectcity . "<option value='" .$resultado[$nomdato] . "'>" .$resultado[$nomdato] ."</option>";
    }
	}
}
catch(PDOException $e) {
    echo "Error conexion db: " . $e->getMessage();
}
$respuesta .= "<result>" ;
$respuesta .="<obj0>";
$respuesta .=$selectcity;
//" <option>".$arraydatosProce[0]."</option><option value=\"\" >Todos</option> <option value=\"primero\" >primero</option>";
$respuesta .= "</obj0>";
$respuesta .= "<obj1>";
$respuesta .=$selectcountry;
//" <option>".$arraydatosProce[0]."</option><option value=\"\" >Todos</option> <option value=\"primero\" >primero</option>";
$respuesta .= "</obj1>";
$respuesta .= "<obj2>";
$respuesta .=$sqlquery;
//" <option>".$arraydatosProce[0]."</option><option value=\"\" >Todos</option> <option value=\"primero\" >primero</option>";
$respuesta .= "</obj2>";
$respuesta .= "</result>";
$conn = null;
echo $respuesta;}
/*        ---------------------         filtrosinmod3        ----------------------           */
if ($Action == 'filtrosinmod3')  {
try {
$da1=$arraydatosProce[0];
$tda1=strlen($arraydatosProce[0]);
$da2=$arraydatosProce[1];
$tda2=strlen($arraydatosProce[1]);
$da3=$arraydatosProce[2];
$tda3=strlen($arraydatosProce[2]);
}
    catch(PDOException $e) {
    echo "Error selectcountry: " . $e->getMessage();
   }
$selectzip = '';
$selectcountry = '';
$selectcity = '';
//$sqlqueryori = $sqlquery;
try {$nomdato = "dato10";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//create table filtrocity SELECT dato10 FROM ".$dbname.".datoscasas d group by dato10
	$sqlquery = " SELECT ".$nomdato." FROM ".$dbname.".datoscasas d where 1=1 ";
    $sqlquerywhere = "";
	if( $da3!="" ) {
	$sqlquerywhere .= " and dato11='".$da3."' ";
	}
	if($tda1==5) $sqlquerywhere .= " and dato24='".$da1."' ";
	//else $sqlquery = " SELECT dato10 FROM ".$dbname.".datoscasas d ";
	$areemplazar = array('-rem-');
    $remplazo   = array($sqlquerywhere);
	$sqlquery = $sqlquery .$sqlquerywhere . " group by ".$nomdato." ";
	$stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
    $stmt->execute();
	$countulti = $stmt->rowCount();
	if($countulti == 0) $selectcountry = $selectcountry . "<option value=\"\" >".$nodatosdl."</option>";
	else {
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$selectcountry = $selectcountry . "<option value=\"\" >Todos</option>";
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $selectcountry = $selectcountry . "<option value='" .$resultado[$nomdato] . "'>" .$resultado[$nomdato] ."</option>";
    }
	}
}
catch(PDOException $e) {
    echo "Error conexion db: " . $e->getMessage();
}
$respuesta .= "<result>" ;
$respuesta .="<obj0>";
$respuesta .=$selectcountry;
//" <option>".$arraydatosProce[0]."</option><option value=\"\" >Todos</option> <option value=\"primero\" >primero</option>";
$respuesta .= "</obj0>";
$respuesta .= "<obj1>";
$respuesta .=$sqlquery;
//" <option>".$arraydatosProce[0]."</option><option value=\"\" >Todos</option> <option value=\"primero\" >primero</option>";
$respuesta .= "</obj1>";
$respuesta .= "</result>";
$conn = null;
echo $respuesta;}
/*        ---------------------         filtrosinmod2        ----------------------           */
if ($Action == 'filtrosinmod2')  {
try {
$da1=$arraydatosProce[0];
$tda1=strlen($arraydatosProce[0]);
$da2=$arraydatosProce[1];
$tda2=strlen($arraydatosProce[1]);
$da3=$arraydatosProce[2];
$tda3=strlen($arraydatosProce[2]);
}
    catch(PDOException $e) {
    echo "Error selectcity: " . $e->getMessage();
   }
$selectzip = '';
$selectcountry = '';
$selectcity = '';
//$sqlqueryori = $sqlquery;
try {$nomdato = "dato11";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//create table filtrocity SELECT dato10 FROM ".$dbname.".datoscasas d group by dato10
	$sqlquery = " SELECT ".$nomdato." FROM ".$dbname.".datoscasas d where 1=1 ";
    $sqlquerywhere = "";
	if( $da2!="" ) {
	$sqlquerywhere .= " and dato10='".$da2."' ";
	}
	if($tda1==5) $sqlquerywhere .= " and dato24='".$da1."' ";
	//else $sqlquery = " SELECT ".$nomdato." FROM ".$dbname.".datoscasas d ";
	$areemplazar = array('-rem-');
    $remplazo   = array($sqlquerywhere);
	//$sqlquery = str_replace($areemplazar, $remplazo, $sqlquery) . " group by ".$nomdato." ";
	$sqlquery = $sqlquery .$sqlquerywhere . " group by ".$nomdato." ";
	$stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
    $stmt->execute();
	$countulti = $stmt->rowCount();
	if($countulti == 0) $selectcity = $selectcity . "<option value=\"\" >".$nodatosdl."</option>";
	else {
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$selectcity = $selectcity . "<option value=\"\" >Todos</option>";
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $selectcity = $selectcity . "<option value='" .$resultado[$nomdato] . "'>" .$resultado[$nomdato] ."</option>";
    }
	}
}
catch(PDOException $e) {
    echo "Error conexion db: " . $e->getMessage();
}
$respuesta .= "<result>" ;
$respuesta .="<obj0>";
$respuesta .=$selectcity;
//" <option>".$arraydatosProce[0]."</option><option value=\"\" >Todos</option> <option value=\"primero\" >primero</option>";
$respuesta .= "</obj0>";
$respuesta .= "<obj1>";
$respuesta .=$sqlquery;
//" <option>".$arraydatosProce[0]."</option><option value=\"\" >Todos</option> <option value=\"primero\" >primero</option>";
$respuesta .= "</obj1>";
$respuesta .= "</result>";
$conn = null;
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