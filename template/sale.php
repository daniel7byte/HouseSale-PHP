<?php

    /* ------------------------------------------------------------------------------------------------
     * Filtro: Si el usuario no viene através del formulario. Se expulsa.
     * ------------------------------------------------------------------------------------------------
     */
     if(empty($_GET) OR $_GET["key"] !== "j.%0a2ede56f6523e16b6a2794c26921580%") {
         header("Location:./");
     }

    include("../datosiniciales.php");

    try {
        $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta charset="UTF-8">
    <title>Property Mapping | Joygle</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://use.fontawesome.com/9e7d1bdf6f.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1LHwSTnFdkSm9dA8CrIpicTLLCUJ7i7w" ></script>
    <script src="assets/js/gmaps.min.js"></script>
    <script type="text/javascript">
        var map;
        $(document).ready(function(){
            map = new GMaps({
                div: '#map',
                lat: 33.756944,
                lng: -84.390278,
                zoom: 7
            });


            //Ejemplos Geocoding
            load("Calle 11 # 13 - 31, La Union, Valle del Cauca, Colombia");
            load("Calle 2A # 42 - 51 El Lido, Cali, Valle del Cauca, Colombia");
            load("Caracas, Venezuela");
            // Fin de Ejemplos Geocoding

            function load(str){
                GMaps.geocode({
                    address: str.trim(),
                    callback: function(results, status){
                        if(status=='OK'){
                            var latlng = results[0].geometry.location;
                            // map.setCenter(latlng.lat(), latlng.lng());
                            map.addMarker({
                                lat: latlng.lat(),
                                lng: latlng.lng()
                            });
                        }
                    }
                });
            }

        });
    </script>
</head>
<body class="sale-template">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="./" class="navbar-brand"><img src="http://demo.joygle.com/img/logo-joygle-big.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Mortgage</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">Find an Agent</a></li>
                    <li><a href="#">Local Scoop</a></li>
                    <li><a href="#">More <span class="caret"></span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main relative">
        <section class="filter-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="#" class="form-inline">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="input-button">
                                            <input type="text" name="search">
                                            <button type="button"><span class="fa fa-search"></span></button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default">Any Price <span class="caret"></span></button>
                                        <button type="button" class="btn btn-default">All Beds <span class="caret"></span></button>
                                        <button type="button" class="btn btn-default">All Home types <span class="caret"></span></button>
                                        <button type="button" class="btn btn-default">More <span class="caret"></span></button>
                                        <button type="button" class="btn btn-joygle">Save Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="pre-search">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h3>New York, NY Homes For Sale & Real Estate</h3>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="allies">
                            <ul class="allies__list">
                                <li class="allies__item"><img src="http://www.joygle.com/assets/media-demo/partners/logo-company-2.png" alt=""></li>
                                <li class="allies__item"><img src="http://www.joygle.com/assets/media-demo/partners/logo-company-1.png" alt=""></li>
                                <li class="allies__item"><img src="http://www.joygle.com/assets/media-demo/partners/logo-company-4.png" alt=""></li>
                                <li class="allies__item"><img src="http://www.joygle.com/assets/media-demo/partners/logo-company-5.png" alt=""></li>
                                <li class="allies__item"><img src="http://www.joygle.com/assets/media-demo/partners/logo-company-3.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="flex">
            <section class="section card-section">
                <div class="container">
                    <div class="row">
                        <?php require_once("system/filter/search-grid.php"); ?>
                    </div>
                </div>
            </section>
            <section class="section">
                <div id="map"></div>
            </section>
        </div>
    </main>
    <script>
    // Fixing height of main tag
    ((d)=>{
        let   clientWindow = d.querySelector('.flex')
        clientWindow.style.maxHeight = 'calc(100% - '+ clientWindow.offsetTop +'px)'
    })(document)
    </script>
</body>
</html>
