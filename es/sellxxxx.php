

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





<div style="display:none;">

v1 = -v1- </br>
v2 = -v2- </br>
v3 = -v3- </br>
v4 = -v4- </br>
v5 = -v5- </br>
v6 = -v6- </br>
v7 = -v7- </br>
v8 = -v8- </br>
v9 = -v9- </br>
v10 = -v10- </br>
v11 = -v11- </br>
v12 = -v12- </br>
v13 = -v13- </br>
v14 = -v14- </br>
v15 = -v15- </br>
v16 = -v16- </br>
v17 = -v17- </br>
v18 = -v18- </br>
v19 = -v19- </br>
v20 = -v20- </br>
v21 = -v21- </br>
v22 = -v22- </br>
v23 = -v23- </br>
v24 = -v24- </br>
v25 = -v25- </br>

</br>


</div>


						<li>
							<figure>

								
								
								
								



<div class="imagecasa" style=" border-width: 1px 1px 0px 1px;">
										
<a href="inmo-sola.php?d6=-v2-">	<img src="-imgdefecto-" width="auto" height="auto" alt="-imgdefecto-"></a>

									</div>										

							
							
							

									  
<div class="imagecasacontainer" style="top:0px;  ">
									
										<div style=" position:alsolute; width:100%; height:20px; background:#c9c9c9; overflow:hidden; padding:0px 0px 10px 0px; ">									
																		
												<div style=" position:relative; width:100%; min-height:18px; background:transparent; padding:2px 0px 0px 0px; font-weight:700;   ">																		
																						
																						<a href="inmo-sola.php?d6=5690193">
																						<div style=" position:relative; width:35%; height:16px; background:transparent; float:left; font-size:16px; margin-left:5px;  ">
																						
																						PRICE:
																						
																						</div>								

																						<div style=" position:relative; margin-left:0px; width:60%; height:16px; background:transparent; float:left; font-size:16px;   ">
																						
																						-v5-
																						
																						</div>	
																						</a>
																						
												</div>																		
																		
																		
																		
										</div>									
								
								
								</div>										  
									  
									  
									  
<div style=" position:relative; top:0px; background-color:#ccc; padding:5px 5px 5px 5px;">

<h3 style=" font-size: 13px; min-height:30px;  max-height:30px; width:100%;  line-height:15px; font-weight:700; overflow:hidden; ">-v7-</h3>
								
								
							
								
								<div style=" position:relative; width:100%; height:15px; background:transparent; overflow:hidden; margin-top:0px; ">
								
								<div style=" width:38%; height:15px; background:transparent; float:left; font-size:11px; padding:0px 0px 0px 0px; text-transform:uppercase; overflow:hidden;  font-weight:700;">
								
								ID:
								
								</div>								

								<div style=" margin-left:0px; width:58%; height:15px; background:transparent; float:left; font-size:12px; padding:0px 0px 0px 0px; overflow:hidden; ">
								
								-v2-
								
								</div>	
								
								
								</div>								
								
								
								<div style=" position:relative; width:100%; height:15px; background:transparent; overflow:hidden; ">
								
								<div style=" width:38%; height:15px; background:transparent; float:left; font-size:11px; padding:0px 0px 0px 0px; text-transform:uppercase; overflow:hidden; font-weight:700; ">
								
								Zip Code:
								
								</div>								

								<div style=" margin-left:0px; width:58%; height:15px; background:transparent; float:left; font-size:12px; padding:0px 0px 0px 0px; overflow:hidden; ">
								
								-v24-
								
								</div>	
								
								
								</div>										
								
								
								
								
								
								<div style=" position:relative; width:100%; height:15px; background:transparent; overflow:hidden; ">
								
								<div style=" width:38%; height:15px; background:transparent; float:left; font-size:11px; padding:0px 0px 0px 0px; text-transform:uppercase; overflow:hidden; font-weight:700; ">
								
								County:
								
								</div>								

								<div style=" margin-left:0px; width:58%; height:15px; background:transparent; float:left; font-size:12px; padding:0px 0px 0px 0px; overflow:hidden; ">
								
								-v11-
								
								</div>	
								
								
								</div>							
							
							
							
							
							
								<div style=" position:relative; width:100%; height:15px; background:transparent; overflow:hidden; ">
								
								<div style=" width:38%; height:15px; background:transparent; float:left; font-size:11px; padding:0px 0px 0px 0px; text-transform:uppercase; overflow:hidden; font-weight:700; ">
								
								City:
								
								</div>								

								<div style=" margin-left:0px; width:58%; height:15px; background:transparent; float:left; font-size:12px; padding:0px 0px 0px 0px; overflow:hidden; ">
								
								-v10-
								
								</div>	
								
								
								
						
								
								</div>		



								<div style=" position:relative; width:100%; height:15px; background:transparent; overflow:hidden; ">
								
								<div style=" width:60%; height:15px; background:transparent; float:left; font-size:10px; padding:0px 0px 0px 0px; text-transform:uppercase; overflow:hidden; font-weight:700; ">
								
								Bedrooms:
								
								</div>								

								<div style=" margin-left:0px; width:40%; height:15px; background:transparent; float:left; font-size:12px; padding:0px 0px 0px 0px; overflow:hidden; ">
								
								-v13-
								
								</div>	
								
								
								
						
								
								</div>	



								<div style=" position:relative; width:100%; height:15px; background:transparent; overflow:hidden; ">
								
								<div style=" width:60%; height:15px; background:transparent; float:left; font-size:10px; padding:0px 0px 0px 0px; text-transform:uppercase; overflow:hidden; font-weight:700; ">
								
								Bathrooms:
								
								</div>								

								<div style=" margin-left:0px; width:40%; height:15px; background:transparent; float:left; font-size:12px; padding:0px 0px 0px 0px; overflow:hidden; ">
								
								-v14-
								
								</div>	
								
								
								
						
								
								</div>	

								
							
								
<a href="inmo-sola.php?d6=-v2-">
<div style=" position:relative; width:100%; height:10px; background:transparent; font-size:16px; padding:10px 0px 0px 0px;  ">

</div>	
<button class="button btn-cart" style=" font-size:12px;">MORE DETAILS</button>		              					
</a>								
								
					
							
							
</div>
								
						
																
								
								
								
								
								
								
							</figure>
						</li>


<li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6" style=" display:none;">



								
												
							

							
</li>











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
	  
	  
		
		
        <div class="center">
          <div class="container">
            <div class="row">
              <!-- BEGIN site-->
              <div class="site site--main" style="margin-top:20px;">
                <header class="site__header">
                  <h1 class="site__title">Sell</h1>
                  <h2 class="site__headline">Meet the best way to sell your propierty</h2>
                </header>
                <div class="site__main">
                  <div class="widget js-widget widget--main widget--no-margin">
                    <div class="widget__content">
                      <article class="article article--list article--details">
                        <div class="article__body">
                          <h4><p>
						  
						  Our platform is available for you to effectively buy /sale your real estate. We make 
						  sure you get the best advice for commercializing your real estate through our online web portal.  
						  
						  </p>
						  
<p>
						  
We highlight every single detail of your home as added value for potential buyers/sellers to find in your option, exactly what they’re looking for. 
						  
						  </p>						  
						  
						  
						  
						  <br>
						  <blockquote>WITH US YOU’LL SAVE 1.5%  ON THE COMMISSION VALUE  </blockquote>
                          <br>
                          <br>						  
						   <!-- Photo by: <a href="http://www.freepik.com">Designed by Pressfoto / Freepik</a> --><img src="assets/media-demo/workers/buy_house.jpg" alt="">
                          <br>
						  <br>
						  <p><strong>Selling  on our platform is very simple:</strong></p>
                          <ul>
                              1.	You must fill in the main data of the property in the form on the right side of 
							  your screen. Please note that you should include information such as address, zip code, your full name, phone number and e-mail address.</li>
                            <br>
						    <br>
							2.	Upon receipt of this information, we will contact you as soon as possible to start the selling/ buying process.
							
							</br>
                            <br>
							3.	We will list your real property on our website for visitors to know your real estate and request information.
							
							</br>
							<br>
							4.	Once we receive the request for information, we'll immediately manage the sales process.
							
							</br>
                          </ul>
                          <br>
						  <p><i>WE ARE JUST A CLICK AWAY: Just fill out the form you'll find below.</i></p>
						 </h4>
                        </div>

                      </article>
                    </div>
                  </div>
                </div>
                <!-- END site-->
              </div>
              <!-- BEGIN SIDEBAR-->
              <div class="sidebar" style="margin-top:35px;">
                <div class="widget js-widget widget--sidebar widget--dark">
                  <div class="widget__header">
                    <h2 class="widget__title">SELL FORM</h2>
                    <h5 class="widget__headline">Send us your contact information.</h5>
                  </div>
                  <div class="widget__content">
                    <div class="listing listing--sidebar">
					
					
					
					
<!-- FORM: HEAD SECTION -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="assets/css/wforms-layout.css" rel="stylesheet" type="text/css" />
    <!--[if IE 8]>
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-layout-ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 7]>
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-layout-ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-layout-ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <link href="assets/css/default" rel="stylesheet" type="text/css" />
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-jsonly.css" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
    <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.10/js/wforms.js"></script>
    <script type="text/javascript">
        wFORMS.behaviors.prefill.skip = false;
    </script>
        <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.10/js/localization-en_US.js"></script>

<!-- FORM: BODY SECTION -->
<div class="wFormContainer" style="max-width: 100%; width:auto;" >

  <style type="text/css">
                #tfa_1,
                *[id^="tfa_1["] {
                    width: 480px !important;
                }
                #tfa_1-D,
                *[id^="tfa_1["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_1-L,
                label[id^="tfa_1["] {
                    width: 250px !important;
                }
            
                #tfa_3,
                *[id^="tfa_3["] {
                    width: 380px !important;
                }
                #tfa_3-D,
                *[id^="tfa_3["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_2,
                *[id^="tfa_2["] {
                    width: 180px !important;
                }
                #tfa_2-D,
                *[id^="tfa_2["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_5,
                *[id^="tfa_5["] {
                    width: 680px !important;
                }
                #tfa_5-D,
                *[id^="tfa_5["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_5,
                *[id^="tfa_5["] {
                    height: 220px
                }
                #tfa_5-D,
                *[id^="tfa_5["][class~="field-container-D"] {
                    height: auto !important;
                }
                #tfa_5-L,
                label[id^="tfa_5["],
                *[id^="tfa_5["][id$="-L"] {
                    height: auto !important;
                }
            </style><div class=""><div class="wForm" id="tfa_0-WRPR" dir="ltr">
<div class="codesection" id="code-tfa_0"></div>
<form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="tfa_0">
<div class="oneField field-container-D     " id="tfa_1-D">
<label id="tfa_1-L" for="tfa_1" class="label preField "><span style="color: rgb(44, 62, 80); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px; font-weight: 600; text-transform: uppercase; background-color: rgb(246, 246, 246);">YOUR NAME</span></label><br><div class="inputWrapper"><input type="text" id="tfa_1" name="tfa_1" value="" placeholder="" title="YOUR NAME" class=""></div>
</div>
<div class="oneField field-container-D     " id="tfa_3-D">
<label id="tfa_3-L" for="tfa_3" class="label preField "><span style="color: rgb(44, 62, 80); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px; font-weight: 600; text-transform: uppercase; background-color: rgb(246, 246, 246);">E-MAIL</span></label><br><div class="inputWrapper"><input type="text" id="tfa_3" name="tfa_3" value="" placeholder="" title="E-MAIL" class=""></div>
</div>
<div class="oneField field-container-D     " id="tfa_2-D">
<label id="tfa_2-L" for="tfa_2" class="label preField "><span style="color: rgb(44, 62, 80); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px; font-weight: 600; text-transform: uppercase; background-color: rgb(246, 246, 246);">TELEPHONE</span></label><br><div class="inputWrapper"><input type="text" id="tfa_2" name="tfa_2" value="" placeholder="" title="TELEPHONE" class=""></div>
</div>
<div class="oneField field-container-D     " id="tfa_5-D">
<label id="tfa_5-L" for="tfa_5" class="label preField "><span style="color: rgb(44, 62, 80); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px; font-weight: 600; text-transform: uppercase; background-color: rgb(246, 246, 246);">MESSAGE</span></label><br><div class="inputWrapper"><textarea id="tfa_5" name="tfa_5" title="MESSAGE" class=""></textarea></div>
</div>
<div class="actions" id="tfa_0-A"><input type="submit" class="primaryAction" value="SEND"></div>
<div style="clear:both"></div>
<input type="hidden" value="455237" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="1237e026f2b1b993fa33eb6a547302f3" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="4" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
</form>
</div></div>



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
