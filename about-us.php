

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
            <div class="row">
              <!-- BEGIN site-->
              <div class="site site--main">
                <header class="site__header">
                  <h1 class="site__title">About Us</h1>
                  <h2 class="site__headline">Meet our company</h2>
                </header>
                <div class="site__main">
                  <div class="widget js-widget widget--main widget--no-margin">
                    <div class="widget__content">
                      <article class="article article--list article--details">
                        <div class="article__body">
                        <h4> 
						 <p style="text-align:justify;"><strong>JOYGLE</strong> 
						 
						 
 is an online platform that works with a group of specialists in the real estate market, who are highly trained to fulfill their dreams and improve their quality of life. Joygle operates with the most popular applications suites of real estate in the USA, has a complete specialized channel for fulfilling our customers dreams and satisfying your family’s needs.						 
						 
						 
						 
						 </p>
						 
						 <p style="text-align:justify;">
						 
With Joygle you can get all the comprehensive advice to buy/sell and live in a house: purchase, sale, rent, financing, and much more. 

						 </p>						 
						 
						 
						  <br>
                          <img src="assets/media-demo/workers/agents.jpg" alt="">
						    <!-- <a href="http://www.freepik.com/free-photos-vectors/negocios">Negocios fotografía designed by Pressfoto - Freepik.com</a>e-->
                          <br>
						  <br>
						  <p>
						  
We have the must secure and reliable data base in the housing market today with more than 30 thousand homes in Georgia alone. 
						  
						  
						  </p>
                          <br>
						  <blockquote>
						  
						  “We are the best choice to provide you with excellent data and knowledge about the place of your dreams; 
						  we make it possible to connect with the best local professionals that will help you make your life easier.”
						  
						  </blockquote>
                          </br>
						  <p>
						  
We work together with strategic partners.  They allow us allow us to obtain accurate information of real estate to which you 
can access through us, or otherwise acquire real property through timely credit management. Some of these partners are:
						  
						  </p>
                          <ul>
                            <li>FMLS</li>
                            <li>GAMLS</li>
                            <li>HOMESTAR</li>
                          </ul>
						  <br>
                          <p><i>
						  
Remember that we do not only sell homes, we rather provide with timely advice to make your experience with us full of confidence to end in a successful conclusion of negotiations.
						  
						  </i></p>
                        </h4>
						</div>

                      </article>
                    </div>
                  </div>
                </div>
                <!-- END site-->
              </div>
              <!-- BEGIN SIDEBAR-->
              <div class="sidebar">
                <div class="widget js-widget widget--sidebar widget--dark">
                  <div class="widget__header">
                    <h2 class="widget__title">Our agents</h2>
                    <h5 class="widget__headline">They will be able to attend you immediately.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show worker</a>
                  </div>
                  <div class="widget__content">
                    <div class="listing listing--sidebar">
                      <div class="listing__item">
                        <div data-sr="enter bottom move 80px, scale(0), over 0s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--sidebar">
                          <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-1.jpg" alt="Christopher Pakulla" class="photo"  style="with:99.9%; max-height:200px" />
                              <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                          <h3 class="worker__name fn">Pablo Cardona</h3>
                          <div class="worker__post">Manager</div><a href="tel:+14049573940" class="worker__tel uri">+1 404 957 3940</a>
                        </div>
                        <!-- end of block .worker-->
                      </div>
                      <div class="listing__item">
                        <div data-sr="enter bottom move 80px, scale(0), over 0.3s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--sidebar">
                          <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-2.jpg" alt="Lisa Wemert" class="photo"  style="with:99.9%; max-height:200px"/>
                              <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                          <h3 class="worker__name fn">Alejandra Sandoval</h3>
                          <div class="worker__post">Realtor</div><a href="tel:+14046379484" class="worker__tel uri">+1 404 637 9484</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SIDEBAR-->
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- END CENTER SECTION-->







		
		
		








		
		
<!-- Footer --> 
<?php include("footer.php"); ?> 	  
<!-- End Footer --> 		
		
		
		
		
		

      </div>

	  
	  

	  
	  
	
 <?php include("jsfooter.php"); ?> 	
 
  
	  
	  
	  
	  
	  

  
  
  
  






</body>
</html>
