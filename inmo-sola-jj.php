

<?php
include("datosiniciales.php");
try {
if (isset($_GET["d1"])) $d1 = $_GET["d1"]; else $d1 = '';//zip
if (isset($_GET["d2"])) $d2 = $_GET["d2"]; else $d2 = '';//ciudad
if (isset($_GET["d3"])) $d3 = $_GET["d3"]; else $d3 = '';//country
if (isset($_GET["d4"])) $d4 = $_GET["d4"]; else $d4 = '';//curr price inicial
if (isset($_GET["d5"])) $d5 = $_GET["d5"]; else $d5 = '';//curr price inicial
if (isset($_GET["d6"])) $d6 = $_GET["d6"]; else $d6 = '';//id casa
} catch (Exception $e) {
echo 'Falta alguna de las variables de entrada: ',  $e->getMessage(), "\n";
}
//echo " $d1 ";

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

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sqlquery = " SELECT * FROM inmobiliaria.datoscasas d where 1=1 ";
	if($d6){
	$sqlquery = $sqlquery. " and dato2='$d6' ";
	}
    $stmt = $conn->prepare($sqlquery);
	echo $sqlquery;
    $stmt->execute();

     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $v2 = $resultado['dato2'];
		$v5 = $resultado['dato5'];
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
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;



$imginicial = '';
$imgtemplate = '';
$dire = $dire.$v24.'/';
$nomfiche = $d6;
$extension = ".jpg";
$cont = 0;
$imginicial = $dire.$nomfiche."_".$cont.$extension;
while ($cont<30){
$archivoveri = $dire.$nomfiche."_".$cont.$extension;
//echo $archivoveri;
if (file_exists($archivoveri)) {
    $imgtemplate .= '
	
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="'.$archivoveri.'" />
                <img data-u="thumb" src="'.$archivoveri.'" />
            </div>	
	
	

	
	';
	//echo "El fichero $archivoveri existe";
} else {
    if ($cont==0) $imginicial = $imgdefecto;
	break 1;
}
//echo "<br/>";
$cont++;
}

///este sector resetea los valores
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
///aqui creo el dato para el googlemaps 173+Colonial+Hills+Road,+Barrow,+Winder
///https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyB1KRT7rPItfcj9Q91a83yX02CFXePrcAU
$diremaps = $v7.",+".$v10.",+".$v11;
		$areemplazar = array(' ',"-v5-");
		$remplazo   = array("+",$v5);
		$diremaps = str_replace($areemplazar, $remplazo, $diremaps);
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Concasa Real Estate - Buy and Sell Homes - List v2</title>
<script src="jsjj/general.js" type="text/javascript"></script> 
<script src="jsjj/ajax.js" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=es"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer_compiled.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAqX8qzk0P4Hn8FfgF0rewnZzhCAg008E">
</script>
<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
<input id="lat" type="text" value="no" />
<input id="lng" type="text" value="no" />
<script>
var latlng = "000";
        var lat = "-25.363";// -25.363, lng: 131.044
        var lng = "131.044";
function ajaxmapsgeoencoding() {
		
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				//alert(xmlhttp.responseText);
				latlng = ExtraerXML(xmlhttp.responseText,"location");
				//alert(latlng);//<lat>37.4224980</lat>     <lng>-122.0843999</lng>
				lat = ExtraerXML(latlng,"lat");
				lng = ExtraerXML(latlng,"lng");
				//alert(ExtraerXML(latlng,"lat"));
                latlng = ExtraerXML(latlng,"lat")+","+ExtraerXML(latlng,"lng");
				//alert(latlng+"--"+lat+lng);//<lat>37.4224980</lat>     <lng>-122.0843999</lng>
				document.getElementById("lat").value = lat;
				document.getElementById("lng").value = lng;
				//document.getElementById("txtHint").innerHTML = latlng;
				initMap();
            }
        };
        xmlhttp.open("GET", "https://maps.googleapis.com/maps/api/geocode/xml?address=<?php echo $diremaps; ?>&key=AIzaSyAAqX8qzk0P4Hn8FfgF0rewnZzhCAg008E", true);
        xmlhttp.send();
    
}
</script>
 <?php include("head-index.php"); ?> 

</head>

<body class="category-page">
<div id="page"> 




<!-- Header -->
<?php include("header.php"); ?> 
<!-- end header --> 
  
  



  
  <!-- Main Container -->
  <section class="main-container col2-left-layout bounceInUp animated">
    <div class="container">
      <div class="row">
	  
	  
		
<!-- Categorias -->		
<?php include("busqueda-iz-house.php"); ?> 	
<!-- Fin Categorias -->				
	  
	  
	  
  <!-- Contenidos Centro -->		  



  <div class="col-sm-9 col-sm-push-3" >
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  

                  

                </div>
              </div>
            </div>
          </div>
          <article class="col-main" style="width:90%; margin:auto 0; background-color:#fff;">
            <h2 class="page-heading"> <span class="page-heading-title"><?php echo $v7; ?></span> </h2>
            <div class="display-product-option">
              <div class="pager hidden-xs">

              </div>

            </div>
			

			
			
			
			
            <div class="category-products" >
              <ul class="products-grid" >
			  

  
 <div class="panel-region-top" >
 
  
  
     <!-- #region Jssor Slider Begin -->

    <!-- Generated by Jssor Slider Maker. -->
    <!-- This demo works without jquery library. -->

    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: false,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/galeria/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l {margin-left:10px; background-position: -10px -40px; }
        .jssora05r {margin-right:10px; background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn {   background-position: -310px -40px; }

        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01 .p            (normal)
        .jssort01 .p:hover      (normal mouseover)
        .jssort01 .p.pav        (active)
        .jssort01 .p.pdn        (mousedown)
        */
        .jssort01 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }
        
        .jssort01 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('img/t01.png') -722px -722px no-repeat;
            _background: none;
        }
        
        .jssort01 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 68px;
            height: 68px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p.pdn .c {
            background-position: 50% 50%;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
        }
        
        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 72px;
            height /**/: 72px;
        }
        
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 700px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/galeria/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 722px; height: 356px; overflow: hidden;">
		
		
<?php echo $imgtemplate; ?>   
		
		
		
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:722px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>

    <!-- #endregion Jssor Slider End -->
 
  
  
  
</div>  
  
  
  
  
  
  
  
<div class="panel-region-top">

	</br>  </br> 
	
            <div class="">
                <div class="span3">
                    <!-- <h2>Overview</h2> -->

                    <table>
                        <tbody>
                        <tr>
                            <th>Price:</th>
                            <td class="price">
                                <?php echo '$'.$v5; ?>
                            </td>
							
                            <th>ID:</th>
                            <td><strong><?php echo $v2; ?></strong></td>							
							
                        </tr>

                        <tr>
                            <th>ID:</th>
                            <td><strong><?php echo $v2; ?></strong></td>
                        </tr>							
						
						
						
                        <tr>
                            <th>ZIPCODE</th>
                            <td><strong><?php echo $v24; ?></strong></td>
                        </tr>

						
					
						
						
                        <tr>
                            <th>County</th>
                            <td>
                                <?php echo $v11; ?>
                                                    
                            </td>
                        </tr>

                        <tr>
                            <th>City:</th>
                            <td><?php echo $v10; ?></td>
                        </tr>




                        <tr>
                            <th>Bedrooms:</th>
                            <td><?php echo $v13; ?></td>
                        </tr>

                        <tr>
                            <th>Bathrooms:</th>
                            <td><?php echo $v12; ?></td>
                        </tr>
						
						
                        </tbody>
                    </table>
                </div>
                <!-- /.span2 -->






				</div>
            <!-- /.row -->
			
				  



			 
  
  </div>
 
  
  


				</ul>
            </div>
 

<div style=" position:relative; width:99.9%; min-height:25px; margin-top:15px;">	</div>


 
 		<h4 style="margin: 10px 0;">Contact an advisor</h4>	
				
        <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="tfa_0">
            <div class="control-group">
                <label class="control-label" for="inputName">
                    Name:
                    <span class="form-required" title="This field is required.">*</span>
                </label>

                <div class="controls">
                    <input style="width:190px;" type="text" id="inputName" name="Name:" required="required">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="control-group">
                <label class="control-label" for="inputPhone">
                    Phone:
                    <span class="form-required" title="This field is required.">*</span>
                </label>

                <div class="controls">
                    <input style="width:190px;" type="text" id="inputPhone" name="Phone:" required="required">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->



            <div class="control-group">
                <label class="control-label" for="inputEmail">
                    Email:
                    <span class="form-required" title="This field is required.">*</span>
                </label>

                <div class="controls">
                    <input style="width:190px;" type="email" id="inputEmail" name="Email:" required="required">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="control-group">
                <label class="control-label" for="inputMessage">
                    Message:
                    <span class="form-required" title="This field is required.">*</span>
                </label>

                <div class="controls">
                    <textarea style="width:190px; height:150px;" id="inputMessage" name="Message:" required="required"></textarea>
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->

			
            <div class="control-group" style="display:none;">

                <div class="controls">
				<input type="text" id="tfa_3" name="ID FMLS:" value="<?php echo $v2; ?>" placeholder="" title="ID:" class="">
             
                </div>
                
            </div>			
			
<div id="map" style="width:100%; height:500px;">jjjj</div>
<script>
ajaxmapsgeoencoding();
//setTimeout(function(){alert('ya pasaron 3 segundos')},3000); // 3000ms = 3s
//for(var i=0;i<500000;i=i+1){}
//alert(latlng+" desde aqui se ve o no");
//alert(lat+" desde aqui se ve");//document.getElementById('lat').value
//alert(document.getElementById('lat').value+" desde aqui se ve value");
function initMap() {
  // var myLatLng = {lat: -25.363, lng: 131.044};
 //var myLatLng = {"lat:" +parseFloat(lat), "lng:"+ parseFloat(lng)};//google.maps.LatLng(parseFloat(loc[4]), parseFloat(loc[5]));
	//var myLatLng = "{lat:"+document.getElementById('lat').value+", lng:"+lng+"}";//google.maps.LatLng(parseFloat(loc[4]), parseFloat(loc[5]));
//	var southWest = new google.maps.LatLng(17.85, -67.35);
var myLatLng = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

    </script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAqX8qzk0P4Hn8FfgF0rewnZzhCAg008E&signed_in=true&callback=initMap"></script>

	
			
			
            <div class="form-actions">
               
                <button class="btn btn-primary arrow-right">Send</button>
            </div>
			
			<input type="hidden" value="405259" name="tfa_dbFormId" id="tfa_dbFormId">
<input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
<input type="hidden" value="4aeadf90dbe8076fd36315aa4f096abe" name="tfa_dbControl" id="tfa_dbControl">
<input type="hidden" value="5" name="tfa_dbVersionId" id="tfa_dbVersionId">
<input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
            <!-- /.form-actions -->
        </form>
   
 
 
 
 
 
 
 
 
 
 
 
 

			</article>
          <!--	///*///======    End article  ========= //*/// --> 
		  
		  
  
		  
        </div>


 
<div id="body-container" style="display:none;">
      
        <div class="tabs"></div>                      
              
                <div id="content">
          <div class="panel">
      <div class="panel-region-top">
     


  </div>
  
  
  
  
  
 
  <div class="breadcrumbs" style="  width:730px; height:27px; margin-bottom:10px; text-transform:uppercase; font-size: 14px;   ">
  <p class="current" style="float:left;" >LIST OF PROPERTIES</p> 
  </div>   
  
  
  
<div  style="  width:730px; min-height:27px; margin-bottom:20px; margin-top:15px; text-transform:uppercase; font-size: 14px;   ">
		
			<div class="wp-pagenavi" style=" min-height:20px; ">
			
			
			<?php 
			$paginacion = '';
			$paginacionantes = '';
			$paginaciondespues = '';
			$contpagi =0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$areemplazar = array('*');
    $remplazo   = array("count(dato2) as numregi");
	$sqlquery = str_replace($areemplazar, $remplazo, $sqlqueryori) ;//. " group by dato24 ";
    $stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
    $stmt->execute();
	   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//$selectzip = $selectzip . "<option></option>";
	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
	$contpagi = $resultado['numregi'];
	$numpaginas = round($contpagi/$limitepagina);
	if($pag > 0) {
	$i=$pag-1;
	$cantpagina = $cantipaginacion;
	while($i>-1 && $cantpagina > 0) {
	//$paginacionantes = "<a href=\"#\" class=\"page smaller\">".$i."</a>".$paginacionantes;
	$paginacionantes = "<span onclick=\"irapagina(".$i.");\" class=\"page smaller\">".($i+1)."</span>".$paginacionantes;
	$i--;
	$cantpagina--;
	}
	}
	else $paginacionantes = "";
	if($pag < $numpaginas) {
	$i=$pag+1;
	$cantpagina = $cantipaginacion;
	while($i<$numpaginas+1 && $cantpagina > 0) {
	//$paginaciondespues = $paginaciondespues."<a href=\"#\" class=\"page larger\">".$i."</a>";
	$paginaciondespues = $paginaciondespues."<span onclick=\"irapagina(".$i.");\" class=\"page larger\">".($i+1)."</span>";
	$i++;
	$cantpagina--;
	}
	}
	else $paginaciondespues = "";
	$paginacion = $paginacionantes . "<span class=\"current\">".($pag+1)."</span>" .$paginaciondespues ;
    //echo $contpagi."   ".$numpaginas."  ".$paginacion;echo $pag; 
	}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
			
			?>

			
			
			<div style="float:right;">
			
				<span class="pages">Page <?php echo ($pag+1); ?> of <?php echo $numpaginas; ?></span>
				<a href="#"  onclick="irapagina(0);" class="first"  >« First</a>

				<?php echo $paginacion; ?>

				<a href="#"  onclick="irapagina(<?php echo $numpaginas; ?>);"  class="last">Last »</a>
				
			</div>
				
				
			</div>

</div> 
  
  
   
  
      <div class="panel-region-top" style="min-height:458px;">

			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						
						
					

						
						
<?php echo $listado; ?>				
						
						
						
						
						
						
						
						
						
						
						
						



		
					</ul>
				</section><!-- // grid-wrap -->
				
				
		

			
			
			</div>
			<!-- // grid-gallery -->
			
			 
  <div class="clearfix"></div>
  </div>
 
 
  
   
  
  
  
  
<div  style="  width:730px; min-height:27px; margin-bottom:20px; margin-top:15px; text-transform:uppercase; font-size: 14px;   ">
		
			<div class="wp-pagenavi" style=" min-height:20px; ">
			

			
			
			<div style="float:right;">
			
				<span class="pages">Page <?php echo ($pag+1); ?> of <?php echo $numpaginas; ?></span>
				<a href="#"  onclick="irapagina(0);" class="first"  >« First</a>

				<?php echo $paginacion; ?>

				<a href="#"  onclick="irapagina(<?php echo $numpaginas; ?>);"  class="last">Last »</a>
				
			</div>
				
				
			</div>

</div> 
  
  
  
  
  
  
  
  
  
  
  
 </br> 
  <div class="breadcrumbs" style="  width:730px; height:27px; margin-bottom:10px; text-transform:uppercase; font-size: 14px;   "><p class="current">PROFESSIONAL SALES TEAM</p></div>   
<div class="" style="   width:722px; height:69px;  text-transform:uppercase; font-size: 14px;   "><img src="img/team-sales.jpg" alt="" ></div>    
  
    
  <div class="clearfix"></div>
</div> 

       </div>
	   
	   
	   
	   

<!-- bottom -->
                
</div>




		</div>
    </div>
  </section>
  <!-- Main Container End --> 
  

  
<!-- Footer --> 
<?php include("footer.php"); ?> 	  
<!-- End Footer --> 

  
  </div>



<?php include("jsfooter.php"); ?> 	
 






</body>
</html>
