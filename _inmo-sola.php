

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
        return "" . parent::current(). "";
    }

    function beginChildren() {
        //echo "";
    }

    function endChildren() {
        //echo "" . "\n";
    }
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sqlquery = " SELECT * FROM $dbname.datoscasas d where 1=1 ";
	if($d6){
	$sqlquery = $sqlquery. " and dato2='$d6' ";
	}
    $stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
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
$dire = $dire.'/';
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
//include("phpyjs.php");
//include("phpyjs.php");
///aqui creo el dato para el googlemaps 173+Colonial+Hills+Road,+Barrow,+Winder
///https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyB1KRT7rPItfcj9Q91a83yX02CFXePrcAU
$diremaps = $v7.",+".$v10.",+".$v11;
		$areemplazar = array(' ',"-v5-");
		$remplazo   = array("+",$v5);
		$diremaps = str_replace($areemplazar, $remplazo, $diremaps);
?>



<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8">
 <?php include("head-index.php"); ?>

 <script src="jsjj/general.js" type="text/javascript"></script>
<script src="jsjj/ajax.js" type="text/javascript"></script>


     <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        min-height: 500px; max-width:800px;    position:relative!important;  background-color:#fff; z-index:2000;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAqX8qzk0P4Hn8FfgF0rewnZzhCAg008E&signed_in=true"></script>

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
				initialize();
            }
        };
        xmlhttp.open("GET", "https://maps.googleapis.com/maps/api/geocode/xml?address=3240+Strawberry+Ln+#3240+Decatur+GA+30034+EE. UU,+GA&key=AIzaSyAAqX8qzk0P4Hn8FfgF0rewnZzhCAg008E", true);
        xmlhttp.send();

}
	ajaxmapsgeoencoding();
//setTimeout(function(){alert('ya pasaron 3 segundos')},3000); // 3000ms = 3s
//for(var i=0;i<500000;i=i+1){}
//alert(latlng+" desde aqui se ve o no");
//alert(lat+" desde aqui se ve");//document.getElementById('lat').value
//alert(document.getElementById('lat').value+" desde aqui se ve value");
// In the following example, markers appear when the user clicks on the map.
// Each marker is labeled with a single alphabetical character.
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var labelIndex = 0;

function initialize() {
	var bangalore = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
  //var bangalore = { lat: 12.97, lng: 77.59 };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,

    center: bangalore,
	mapTypeId: google.maps.MapTypeId.HYBRID
  });

  // This event listener calls addMarker() when the map is clicked.
  google.maps.event.addListener(map, 'click', function(event) {
    addMarker(event.latLng, map);
  });

  // Add a marker at the center of the map.
  addMarker(bangalore, map);
}

// Adds a marker to the map.
function addMarker(location, map) {
  // Add the marker at the clicked location, and add the next-available label
  // from the array of alphabetical characters.
  var marker = new google.maps.Marker({
    position: location,
    label: labels[labelIndex++ % labels.length],
    map: map
  });


}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>








  </head>
  <body class="property_details_agent menu-default hover-default ">


        <!-- BEGIN svg-->
<?php include("svg.php"); ?>
      <!-- END svg-->




    <div class="box js-box">



      <!-- BEGIN HEADER-->
<?php include("header.php"); ?>
      <!-- END HEADER-->


      <!-- BEGIN NAVBAR-->
      <div id="header-nav-offset"></div>
      <nav id="header-nav" class="navbar navbar--header">
        <div class="container">




        </div>
      </nav>
      <!-- END NAVBAR-->
      <div class="site-wrap js-site-wrap">




        <div class="center">
          <div class="container">




            <div class="row housem" style="">
              <div class="site site--main" style=" width:100%!important;">
                <div class="property" style="max-width:99%!important;">
				<?php echo $diremaps; ?></br> 3240+Strawberry+Ln+#3240+Decatur+GA+30034+EE. UU
                  <h1 class="property__title"><?php echo $v7; ?><span class="property__city" style="font-size: 20px;">ID (<?php echo $v2; ?>) , County (<?php echo $v11; ?>) , City (<?php echo $v10; ?>) , ZipCode (<?php echo $v24; ?>)</span></h1>
                  <div class="property__header" style="max-width:99%!important;">
                    <div class="property__price"><strong class="property__price-value">$<?=number_format($v5)?></strong></div>
                    <h4 class="property__commision"><strong></strong></h4>
                    <div class="property__actions">

                    </div>
                  </div>
                  <div class="clearfix"></div>











                  <div class="property__slider" style="max-width:99.9%!important;">



     <!-- #region Jssor Slider Begin -->

    <!-- Generated by Jssor Slider Maker. -->
    <!-- This demo works without jquery library. -->

    <script type="text/javascript" src="assets/js/jssor.slider.min.js"></script>
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


    <div id="jssor_1" style="position: relative;  top: 0px; left: 0px; width: 700px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
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
                  </div>

                  <div class="property__plan" style="max-width:800px!important;">

                    <dl class="property__plan-item">
                      <dt class="property__plan-icon property__plan-icon--window">
                        <svg>
                          <use xlink:href="#icon-window"></use>
                        </svg>
                      </dt>
                      <dd class="property__plan-title">Bedrooms</dd>
                      <dd class="property__plan-value"><?php echo $v12; ?></dd>
                    </dl>
                    <dl class="property__plan-item">
                      <dt class="property__plan-icon property__plan-icon--bathrooms">
                        <svg>
                          <use xlink:href="#icon-bathrooms"></use>
                        </svg>
                      </dt>
                      <dd class="property__plan-title">Bathrooms</dd>
                      <dd class="property__plan-value"><?php echo $v13; ?></dd>
                    </dl>


                  </div>









                  <div class="widget js-widget widget--details" style="max-width:800px!important;">
                    <div class="widget__content">


					     <div id="map"></div>






                    </div>
                  </div>
                </div>
                <!-- end of block .property-->
              </div>
              <!-- BEGIN SIDEBAR-->



              <div class="sidebar"  style=" float:left; max-width:24.9%!important;">
                <div class="widget js-widget widget--sidebar widget--first-no-head" style=" width:100%!important;">







                <div class="widget js-widget widget--sidebar">





                  <div class="widget__header">
                    <h4 class="widget__title" style="font-size:16px;">Contact  AGENT</h4>

                  </div>


                  <div class="widget__content">



                        <div class="worker__intro-row">
                          <div class="worker__intro-col">
                            <div class="worker__contacts">
                              <div class="tel"><span class="type">Tel.</span><a href="tel:+44(0)2035102390" class="uri value">+1 404 957 3940</a></div>

                              <div class="email"><span class="type">Email</span><a href="mailto:rs@realtyspace.com" class="uri value">info@joygle.com</a></div>
                              <div class="skype"><span class="type">Skype</span><a href="skype:Walkenboy?call" class="uri value">Joygle</a></div>
                            </div>
                            <!-- end of block .worker__contacts-->
                          </div>
<br><br>
                        </div>




<!-- FORM: HEAD SECTION -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-layout.css" rel="stylesheet" type="text/css" />
    <!--[if IE 8]>
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-layout-ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 7]>
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-layout-ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <link href="https://www.tfaforms.com/form-builder/4.3.0/css/wforms-layout-ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <link href="https://www.tfaforms.com/themes/get/20107" rel="stylesheet" type="text/css" />
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
                    width: 100%!important;
                }
                #tfa_1-D,
                *[id^="tfa_1["][class~="field-container-D"] {
                    width: auto !important;
                }

                #tfa_2,
                *[id^="tfa_2["] {
                    width: 100%!important;
                }
                #tfa_2-D,
                *[id^="tfa_2["][class~="field-container-D"] {
                    width: auto !important;
                }

                #tfa_3,
                *[id^="tfa_3["] {
                    width: 100%!important;
                }
                #tfa_3-D,
                *[id^="tfa_3["][class~="field-container-D"] {
                    width: auto !important;
                }

                #tfa_5,
                *[id^="tfa_5["] {
                    width: 100%!important;
                }
                #tfa_5-D,
                *[id^="tfa_5["][class~="field-container-D"] {
                    width: auto !important;
                }

                #tfa_4,
                *[id^="tfa_4["] {
                    width: 100%!important;
                }
                #tfa_4-D,
                *[id^="tfa_4["][class~="field-container-D"] {
                    width: auto !important;
                }

                #tfa_4,
                *[id^="tfa_4["] {
                    height: 300px
                }
                #tfa_4-D,
                *[id^="tfa_4["][class~="field-container-D"] {
                    height: auto !important;
                }
                #tfa_4-L,
                label[id^="tfa_4["],
                *[id^="tfa_4["][id$="-L"] {
                    height: auto !important;
                }
            </style><div class=""><div class="wForm" id="tfa_0-WRPR" dir="ltr">
<div class="codesection" id="code-tfa_0"></div>
<form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="tfa_0">
<div style="width: 100%!important; " class="oneField field-container-D     " id="tfa_1-D">
<label id="tfa_1-L" for="tfa_1" class="label preField ">Name:</label><br><div style="width: 100%!important; " class="inputWrapper">
<input style="width: 100%!important; " type="text" id="tfa_1" name="tfa_1" value="" placeholder="" title="Name:" class=""></div>
</div>
<div style="width: 100%!important; " class="oneField field-container-D     " id="tfa_2-D">
<label id="tfa_2-L" for="tfa_2" class="label preField ">Email:</label><br><div style="width: 100%!important; " class="inputWrapper">
<input style="width: 99% !important; " type="text" id="tfa_2" name="tfa_2" value="" placeholder="" title="Email:" class=""></div>
</div>
<div style="width: 100%!important; " class="oneField field-container-D     " id="tfa_3-D">
<label id="tfa_3-L" for="tfa_3" class="label preField ">Tel:</label><br><div style="width: 100%!important; " class="inputWrapper">
<input style="width: 99% !important; " type="text" id="tfa_3" name="tfa_3" value="" placeholder="" title="Tel:" class=""></div>
</div>
<div style="width: 100%!important; " class="oneField field-container-D     " id="tfa_5-D">
<label id="tfa_5-L" for="tfa_5" class="label preField ">Propertie ID:&nbsp;</label><br><div style="width: 100%!important; " class="inputWrapper">
<input style="width: 99% !important; " type="text" id="tfa_5" name="tfa_5" value="<?php echo $v2; ?>" placeholder="" title="Propertie ID: " class="" readonly></div>
</div>
<div style="width: 100%!important; " class="oneField field-container-D     " id="tfa_4-D">
<label id="tfa_4-L" for="tfa_4" class="label preField ">Message:</label><br><div style="width: 100%!important; " class="inputWrapper">
<textarea style="padding-top:5px!important;" id="tfa_4" name="tfa_4" title="Message:" class=""></textarea></div>
</div>
<div class="actions" id="tfa_0-A"><input type="submit" class="primaryAction" value="SEND"></div>
<div style="clear:both"></div>
<input type="hidden" value="457388" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="1d7b067f0e7c6b33f10c607d1d2f8077" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="1" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
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
        <!-- BEGIN AFTER CENTER SECTION-->
        <!-- END AFTER CENTER SECTION-->



<!-- Footer -->
<?php include("footer.php"); ?>
<!-- End Footer -->





      </div>
    </div>

    <!-- BEGIN SCRIPTS and INCLUDES-->

  </body>
</html>
