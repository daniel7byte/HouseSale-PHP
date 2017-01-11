

<?php
include("datosiniciales.php");
$sqlqueryini = " SELECT * FROM ".$dbname.".datoscasas d where 1=1 ";
try {
if (isset($_GET["d1"])) $d1 = $_GET["d1"]; else $d1 = '';//zip
if (isset($_GET["d2"])) $d2 = $_GET["d2"]; else $d2 = '';//ciudad
if (isset($_GET["d3"])) $d3 = $_GET["d3"]; else $d3 = '';//country
if (isset($_GET["d4"])) $d4 = $_GET["d4"]; else $d4 = '';//curr price inicial
if (isset($_GET["d5"])) $d5 = $_GET["d5"]; else $d5 = '';//curr price inicial
if (isset($_GET["d6"])) $d6 = $_GET["d6"]; else $d6 = '';//id casa
if (isset($_GET["pag"])) $pag = $_GET["pag"]; else $pag = '0';//pagina actual
if (isset($_GET["sta"])) $sta = $_GET["sta"]; else $sta = 'A';//estado casas
} catch (Exception $e) {
//echo 'Falta alguna de las variables de entrada: ',  $e->getMessage(), "\n";
}
if($pag == "") $pag = '0';
$templatelistado = '














';
$listado = '';

//echo "<form action='leer-inmo.php' method='get' >";
//echo "Zip <input type='text' value='$d1' id='d1' name='d1' >";
//echo "City <input type='text' value='$d2' id='d2' name='d2' >";
//echo "Country <input type='text' value='$d3' id='d3' name='d3' >";
//echo "Curr Price Inicial <input type='text' value='$d4'  id='d4' name='d4' >";
//echo "Curr Price Final <input type='text' value='$d5'  id='d5' name='d5' >";
//echo "<input type='submit' value='boton filtrar' >";
//echo "</form>";
//echo " $d1 $d2 $d3 ";

//echo "<table style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>#</th><th>ML#</th><th>Type</th><th>?</th><th>Curr Price</th><th>status</th><th>Adress</th><th>Subd/Complex</th><th>Area</th><th>City</th><th>Country</th><th>Total Bedrooms</th><th>Total Full Baths</th><th>Total Half Baths</th><th>Year Built</th><th>Photo Count</th><th>Docs</th><th>List Date</th><th>Expiration Date</th><th>Closing Date</th><th>Descripcion</th><th>Descripcion ingles</th><th>Google Map</th><th>Zip Code</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
$vpag = 0;
$vpag += $pag;
//$vpag = $vpag + 1;//correcion por que comienza en 0
//$vpagfin = $vpag*400;
$vpagini = $vpag*$limitepagina;
$sqlqueryFinal = "  and dato6='".$sta."' order by dato5,dato24 limit ".$vpagini.",".$limitepagina." "; //primeros 400 datos
//$sqlqueryFinal = " order by dato24 limit 400,800 "; //segundos 400 datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sqlquery = $sqlqueryini;
	if($d1){ $sqlquery = $sqlquery. " and dato24='$d1' "; }
	if($d2){ $sqlquery = $sqlquery. " and dato10='$d2' "; }
	if($d3){ $sqlquery = $sqlquery. " and dato11='$d3' "; }
    if($d4){ $sqlquery = $sqlquery. " and dato5>=$d4 "; }
    if($d5){ $sqlquery = $sqlquery. " and dato5<=$d5 "; }
	if($d6){ $sqlquery = $sqlquery. " and dato2=$d6 "; }
    $stmt = $conn->prepare($sqlquery.$sqlqueryFinal);
	//if($esdesa) echo $sqlquery.$sqlqueryFinal;
    $stmt->execute();
	$sqlqueryori = $sqlquery;
	$countulti = $stmt->rowCount();
	//if($countulti < $limitepagina) $pag = 0;
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
	if($countulti == 0) $listado = $divbusquedacero;
	else
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //echo $arr['name'];
	//echo $v;
	/*$i = 0;//sector para ver lo de los precios
	$cont = strlen($resultado['dato5'])/3;
	while($i<$cont) {
		$i++;
		try {	$v5 = substr($resultado['dato5'],-(3*$i)) .$v5; } catch(PDOException $e) {  break 1;  }
	}	*/
		$v2 = $resultado['dato2'];
		//setlocale(LC_MONETARY, 'en_US');
		$v5 = "$".number_format($resultado['dato5']);
		//$v5 = "$".$resultado['dato5'];
		//$v5 = $cont;
		$v6 = $resultado['dato6'];
		$v7 = $resultado['dato7'];
		$v8 = $resultado['dato8'];
		$v9 = $resultado['dato9'];
		$v10 = $resultado['dato10'];
		$v11 = $resultado['dato11'];
		$v12 = $resultado['dato12'];
		$v13 = $resultado['dato13'];
		$v14 = $resultado['dato14'];
		$v15 = $resultado['dato15'];
		$v16 = $resultado['dato16'];
		$v17 = $resultado['dato17'];
		$v24 = $resultado['dato24'];
		
		$imgtemplate = '';
		$diretmp = '';
$diretmp = $dire.$v24.'/';
$nomfiche = $v2;
$extension = ".jpg";
$cont = 0;

$archivoveri = $diretmp.$nomfiche."_".$cont.$extension;
//echo $archivoveri;
if (file_exists($archivoveri)) {
    $imgtemplate = $archivoveri;
	//echo "El fichero $archivoveri existe";
} else {
     $imgtemplate = $imgdefecto;
	//break 1;
}
		
		//$areemplazar = array('-v5-', "-v6-", "-v7-", "-v8-", "-v12-", "-v2-", "-v24-", "-v10-", "-v11-","-imgdefecto-");
		//$remplazo   = array($v5, $v6, $v7, $v8, $v12,  $v2, $v24,$v10, $v11, $imgtemplate);
		$areemplazar = array('-v2-',"-v5-","-v6-","-v7-","-v8-","-v9-","-v10-","-v11-","-v12-","-v13-","-v14-","-v15-","-v16-","-v17-","-v24-","-imgdefecto-","-archivoveri-");
		$remplazo   = array($v2,$v5,$v6,$v7,$v8,$v9,$v10,$v11,$v12,$v13,$v14,$v15,$v16,$v17,$v24,$imgtemplate,$archivoveri);
		$listado = $listado . str_replace($areemplazar, $remplazo, $templatelistado);
		//$listado = $listado . $v7."--".$v8."d<br/><img src='".$archivoveri."' /><br/>";
		
    }
}
catch(PDOException $e) {
   // echo "Error: " . $e->getMessage();
}
$conn = null;
//echo "</table>";
///aqui estaban los filtros

$d1p = $d1;//zip todos estod datos guardados para usar en la paginacion
$d2p = $d2;//ciudad
$d3p = $d3;//country
$d4p = $d4;//curr price inicial
$d5p = $d5;//curr price inicial
$d6p = $d6;//id casa
$d1 = '';//zip
$d2 = '';//ciudad
$d3 = '';//country
$d4 = '';//curr price inicial
$d5 = '';//curr price inicial
$d6 = '';//id casa
include("phpyjs.php");
?>
<script src="jsjj/general.js" type="text/javascript"></script> 
<script src="jsjj/ajax.js" type="text/javascript"></script>


<!DOCTYPE html>
<html lang="en">
  <head lang="en">
     <meta charset="UTF-8">
    <title>Joygle - Real Estate - Georgia</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"><![endif]--> 
 <?php include("head-index.php"); ?> 
  </head>

<body class="index menu-default hover-default scroll-animation">
<div id="pagexxx" style="display:none; position:relative; min-height:600px; background-color:lime;"> 


  </div>


  
  
  
        <!-- BEGIN svg-->
<?php include("svg.php"); ?> 
      <!-- END svg-->
  
  
     



    <div class="box js-box">




	  
      <!-- BEGIN HEADER-->
<?php include("header.php"); ?> 
      <!-- END HEADER-->
	  
	  
	  
      <!-- BEGIN NAVBAR-->
      <div id="header-nav-offset"></div>
	  
	  
      <nav id="header-nav" class="navbar navbar--header navbar--overlay">

      </nav>
      <!-- END NAVBAR-->
      <div class="site-wrap js-site-wrap">
	  
	  
		
		
        <div class="center" style="margin-top:40px;">
          <div class="container">
            <div class="widget js-widget widget--landing">
              <div class="widget__header">
                <h2 class="widget__title">Send Ok</h2>
                <h5 class="widget__headline">Thank You. We will get in touch with you.</h5>
              </div>


				
				
				
				
				
				
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END CENTER SECTION-->
		
		





		
		
		








		
		
<!-- Footer --> 
<?php include("footer.php"); ?> 	  
<!-- End Footer --> 		
		
		
		
		
		

      </div>

	  
	  
    <button type="button" class="scrollup js-scrollup"></button>
    <!-- end of block .scrollup-->	  
	  
	  
	  
	
 <?php include("jsfooter.php"); ?> 	
 
  
	  
	  
	  
	  
	  

  
  
  
  






</body>
</html>
