<!DOCTYPE html>
<html lang="en">
  <head lang="en">
     <meta charset="UTF-8">
    <title>Joygle - Real Estate - Georgia</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"><![endif]-->
 <?php include("head-index.php"); ?>
      <script src="dinamic_filter/jquery-3.1.1.min.js"></script>
      <script src="dinamic_filter/magic.js"></script>
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
        <div class="widget js-widget">
          <div class="widget__content">
            <div class="banner js-banner banner--wide" >
              <div style="background-image: url(&quot;assets/media-demo/banner/banner-1.jpg&quot;); with:99.9%!important; height:100%!important; " class="banner__item">

                <div class="container" >
                  <div class="row">
                    <div class="banner__caption">
                      <h1 class="banner__title" style="color:#fff!important; ">FIND YOUR NEXT HOME HERE</h1>
                      <h3 class="banner__subtitle" style="color:#fff!important;">We have more than 30.000 homes available for you in the state of Georgia.
					  Choose your best option at a price that is right for you and you will save 1.5% with us.</h3>



                    </div>
                    <div class="banner__search" style="background-color:#ccc;">
                      <h4 class="banner__sidebar-title">FIND YOUR NEXT HOME HERE</h4>

                      <?php

                        include("datosiniciales.php");

                        try {
                            $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        } catch (Exception $e) {
                            echo "Error: " . $e->getMessage();
                            exit;
                        }

                        ?>


                      <!-- BEGIN SEARCH-->


                        <form method="post" action="leer-inmo-visual.php" id="formufiltro" name="formufiltro" >
                            <div class="row" style="background-color:#ccc; padding:12px;">
                                <div class="form-group">
                                    <label for="in-contract-type" class="control-label" style="font-size: 16px;">STATE</label>
                                    <select id="" data-placeholder="Contract type" class="form-control">
                                        <option>Georgia</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="in-contract-type" class="control-label" style="font-size: 16px;">ZIP CODE</label>
                                    <input class="form-control" type='text' name="zipcode" id="zipcode" value="">
                                </div>

                                <div class="form-group">
                                    <label for="in-contract-type" class="control-label" style="font-size: 16px;">COUNTY</label>
                                    <select class="form-control" name="county" id="county">
                                        <option value="">All</option>
                                        <?php
                                        $queryCounty = $mysql->prepare("SELECT DISTINCT dato11 FROM datoscasas ORDER BY dato11 ASC;");
                                        $queryCounty->execute();
                                        $rowsCounty = $queryCounty->fetchAll();
                                        foreach ($rowsCounty as $row):
                                            ?>
                                            <option value="<?=$row['dato11']?>"><?=$row['dato11']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="in-contract-type" class="control-label" style="font-size: 16px;">CITY</label>
                                    <select class="form-control" name="city" id="city">
                                        <option value="">All</option>
                                        <?php
                                        $queryCounty = $mysql->prepare("SELECT DISTINCT dato10 FROM datoscasas ORDER BY dato10 ASC;");
                                        $queryCounty->execute();
                                        $rowsCounty = $queryCounty->fetchAll();
                                        foreach ($rowsCounty as $row):
                                            ?>
                                            <option value="<?=$row['dato10']?>"><?=$row['dato10']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="in-contract-type" class="control-label" style="font-size: 16px;">PRICE RANGE</label>
                                    <select  class="form-control" name="price" id="price">
                                        <option value="-" selected>All</option>
                                        <option value="1-75">$1 - $75.000</option>
                                        <option value="75-150">$75.000 - $150.000</option>
                                        <option value="150-300">$150.000 - $300.000</option>
                                        <option value="300-600">$300.000 - $600.000</option>
                                        <option value="600-900">$600.000 - $900.000</option>
                                        <option value="900-mas"> + $900.000</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="in-contract-type" class="control-label" style="font-size: 16px;">ID</label>
                                    <input class="form-control" type='text' name="id" id="id" value="">
                                </div>


                                <div class="action">
                                    <button class="form__submit"  onclick="botonbuscar();" >SEARCH</button>
                                    <button type="reset" class="form__submit" style="background: #a0a0a0;" id="reset" onclick="">Reset</button>
                                </div>

                            </div>

                        </form>


                      <!-- END SEARCH-->





                      <!-- END SEARCH-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>





          <div class="widget js-widget widget--landing widget--gray">
              <div class="widget__header">
                  <h2 class="widget__title">Real estates</h2>
                  <h5 class="widget__headline">Our agents are licensed professionals that specialise in searching, evaluating and negotiating the purchase of property on behalf of the buyer. They will sell you real estate. Insights, tips & how-to guides on selling property and preparing your home or investment property for sale and working to maximise your sale price.</h5>
              </div>
              <div class="widget__content">
                  <div class="tab tab--properties">
                      <div class="tab-content">


                          <div id="tab-popular" class="tab-pane in active">
                              <div class="listing listing--grid">

                                  <?php
                                  $query = $mysql->prepare("SELECT * FROM banderas ORDER BY id ASC;");
                                  $query->execute();
                                  $rows = $query->fetchAll();
                                  foreach ($rows as $row):
                                  ?>
                                      
                                      <?php
                                      $query = $mysql->prepare("SELECT * FROM datoscasas WHERE dato2 = :dato2;");
                                      $query->execute([':dato2' => $row['casa_id']]);
                                      $rows = $query->fetchAll();
                                      foreach ($rows as $row):
                                      ?>

                                          <div class="listing__item">
                                              <div class="properties properties--grid">
                                                  <div class="properties__thumb">
                                                      <a href="inmo-sola.php?d6=<?=$row['dato2']?>" class="item-photo">
                                                          <img style="max-height:191px;" src="<?=$imgdefecto?>" width="auto" height="auto" alt="<?=$imgdefecto?>">
                                                          <figure class="item-photo__hover item-photo__hover--params">

                                                          </figure>
                                                      </a>
                                                  </div>
                                                  <!-- end of block .properties__thumb-->
                                                  <div class="properties__details">
                                                      <div class="properties__info">
                                                          <a href="inmo-sola.php?d6=<?=$row['dato2']?>" class="properties__address"><span class="properties__address-street"><?=$row['dato8']?></span><span class="properties__address-city"><?=$row['dato7']?></span></a>

                                                          <span class="properties__address-city">County(<?=$row['dato11']?>) , City(<?=$row['dato10']?>) , Bdrms(<?=$row['dato12']?>) , Baths(<?=$row['dato13']?>) , ZipCode(<?=$row['dato24']?>) , ID:(<?=$row['dato2']?>)</span>

                                                          <div class="properties__offer">
                                                              <div class="properties__offer-column">

                                                              </div>
                                                              <div class="properties__offer-column">
                                                                  <div class="properties__offer-value">
                                                                      <strong>$<?=number_format($row['dato5'])?></strong><span class="properties__offer-period"></span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 65 Sq Ft</span><span class="properties__params">Land Size - 110 Sq Ft</span></div>
                                                      </div>
                                                  </div>
                                                  <!-- end of block .properties__info-->
                                              </div>
                                              <!-- end of block .properties__item-->
                                          </div>

                                      <?php endforeach; ?>

                                  <?php endforeach; ?>

                              </div>
                          </div>


                      </div>
                  </div>
              </div>
          </div>






          <div class="widget js-widget">
          <div class="widget__content">
            <!-- BEGIN SECTION FEATURE-->
            <section class="feature">
              <div class="feature__picture"></div>
              <!-- end of .feature__picture-->
              <div class="container">
                <div class="feature__content">
                  <div class="feature__header">
                    <h3 data-sr="enter right ease-in-out 150px" class="feature__title">WHY SHOULD YOU USE JOYGLE</h3>
                    <h4 data-sr="enter right ease-in-out 250px" class="feature__headline">Our efficient platform provides all the necessary tools for you to buy/sell
					real estate the best and fastest way.  With us you’ll get the following benefits:</h4>
                  </div>
                  <!-- end of block .feature__header-->
                  <div class="feature__list">
                    <div data-sr="enter right ease 150px" class="feature__item">
                      <svg class="feature__icon feature__icon--money-save">
                        <use xlink:href="#icon-money-save"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">Big savings</h3>
                        <div class="feature__text">
                          <p>Our commission is one of the lowest in the market: 4.5%.</p>
                        </div>
                      </div>
                    </div>
                    <!-- end of block .feature__item-->
                    <div data-sr="enter right ease 250px" class="feature__item">
                      <svg class="feature__icon feature__icon--good-sales">
                        <use xlink:href="#icon-good-sales"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">We facilitate sales</h3>
                        <div class="feature__text">
                          <p>We take care of your real property for you to have peace of mind.</p>
                        </div>
                      </div>
                    </div>
                    <!-- end of block .feature__item-->
                    <div data-sr="enter right ease 150px" class="feature__item">
                      <svg class="feature__icon">
                        <use xlink:href="#icon-comfort"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">User Friendly</h3>
                        <div class="feature__text">
                          <p>Our simple, easy to use search engine offers different filters to find your home according to your needs.</p>
                        </div>
                      </div>
                    </div>
                    <!-- end of block .feature__item-->
                    <div data-sr="enter right ease 250px" class="feature__item">
                      <svg class="feature__icon">
                        <use xlink:href="#icon-easy"></use>
                      </svg>
                      <div class="feature__item-content">
                        <h3 class="feature__item-title">Various options</h3>
                        <div class="feature__text">
                          <p>We have more than 30.000.000  housing options available in the market.</p>
                        </div>
                      </div>
                    </div>
                    <!-- end of block .feature__item-->
                  </div>
                  <!-- end of block .feature__list-->
                </div>
                <!-- end of .feature__content-->
              </div>
            </section>
            <!-- END SECTION FEATURE-->
          </div>
        </div>













        <div class="widget js-widget">
          <div class="widget__content">
            <!-- BEGIN BLOCK GO SUBMIT-->
            <div data-sr="flip 45deg over 0.5s" class="gosubmit">
              <div class="container">
                <div class="gosubmit__title">
                  <div class="gosubmit__title__row gosubmit__title__row--second"style="text-align: left!important;"><span class="gosubmit__title__option" style="text-align: left!important;">We </span>Buy and <span class="gosubmit__title__option"></span></div>
                  <div class="gosubmit__title__row gosubmit__title__row--first"> </div>

                  <div class="gosubmit__title__row gosubmit__title__row--second"><span class="gosubmit__title__option">Sell </span>Your  Propierty<span class="gosubmit__title__option"></span></div>
                  <div class="gosubmit__title__row gosubmit__title__row--third"></div>
                </div>
                <!-- end of block .gosubmit__title--><a href="contact.php" class="gosubmit__btn">Contact US</a>
              </div>
            </div>
            <!-- END BLOCK GO SUBMIT-->
          </div>
        </div>
        <div class="center">
          <div class="container">
          </div>
        </div>
        <!-- END CENTER SECTION-->
        <!-- BEGIN AFTER CENTER SECTION-->
        <div class="widget js-widget widget--landing">
          <div class="widget__header">
            <h2 class="widget__title"><span class="title-thin">GET TO KNOW</span>  OUR STRATEGIC ALLIES</h2>
            <h5 class="widget__headline">We work with you to provide you with a better experience.</h5>
          </div>
          <div class="widget__content"  style="height:120px;">
            <!-- BEGIN PARTNERS-->
            <div id="partners-slider" class="partners">
              <div class="partners__slider js-slick-slider">
			  <a class="partners__item"><img src="assets/media-demo/partners/logo-company-1.png" alt=""></a>
			  <a class="partners__item"><img src="assets/media-demo/partners/logo-company-2.png" alt=""></a>
			  <a class="partners__item"><img src="assets/media-demo/partners/logo-company-3.png" alt=""></a>


              </div>
              <div class="partners__controls">

              </div>
              <!-- end of block .partners__controls-->
            </div>
            <!-- end of block .partners-->
          </div>
        </div>
        <!-- END PARTNERS-->
        <div class="widget js-widget">
          <div class="widget__content">

          </div>
        </div>
        <!-- END AFTER CENTER SECTION-->


      </div>

<!-- Footer -->
<?php include("footer.php"); ?>
<!-- End Footer -->













 <?php include("jsfooter.php"); ?>


















</body>
</html>
