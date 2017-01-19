<!DOCTYPE html>
<html>
  <head lang="en">
    <?php include("head-listados.php"); ?>
    <script src="dinamic_filter/jquery-3.1.1.min.js"></script>
    <script src="dinamic_filter/magic.js"></script>
  </head>
  <body class="properties_listing_grid menu-default hover-default ">

    <!-- BEGIN svg-->
    <?php include("svg.php"); ?>
    <!-- END svg-->

    <div class="box js-box">

    <!-- BEGIN HEADER-->
    <?php include("header.php"); ?>
    <!-- END HEADER-->

      <div class="site-wrap js-site-wrap">
        <div class="center">
          <div class="container" style="margin-top:20px;">
            <div class="row">


              <div class="site site--main">
                <header class="site__header">
                  <h1 class="site__title" style="font-size: 28px!important;">Results for</h1>
                  <h6 class="site__headline"><strong id="search-string">
                  <?php if (!isset($_POST)): ?>
                  <?=$_POST['zipcode']?> + <?=$_POST['county']?> + <?=$_POST['city']?> + <?=$_POST['price']?>
                  <?php endif;?>
                  </strong></h6>
                </header>

                  <img id="loading" src="dinamic_filter/ellipsis.gif" style="display: none;" alt="">

                  <p style="display: none;" id="noRecords">No records found</p>


                <div class="site__main">
                  <div class="widget js-widget widget--main">
                    <div class="widget__content">
                      <div class="listing listing--grid js-properties-list" id="articles">

                        <?php

                        include("datosiniciales.php");

                        try {
                          $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        } catch (Exception $e) {
                          echo "Error: " . $e->getMessage();
                          exit;
                        }

                        ?>

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

                                                  <img style="max-height:191px;" src="<?=( file_exists($dire.$row['dato2'].'_0.jpg') ? $dire.$row['dato2'].'_0.jpg' : $imgdefecto )?>" width="auto" height="auto" alt="<?=$imgdefecto?>">

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

                  <?php

                  if (!isset($_POST)){

                      ?>
                      <script>
                          $( document ).ready(function() {
                              search("<?=($_POST['id'] != '' ? $_POST['id'] : '')?>", "<?=($_POST['zipcode'] != '' ? $_POST['zipcode'] : '')?>", "<?=($_POST['county'] != '' ? $_POST['county'] : '')?>", "<?=($_POST['city'] != '' ? $_POST['city'] : '')?>", "<?=($_POST['price'] != '' ? $_POST['price'] : '')?>");
                          });
                      </script>
                      <?php

                  }

                  ?>

              </div>
              <!-- END site-->
              <!-- BEGIN SIDEBAR-->
              <div class="sidebar" style="margin-top:15px;">
                <div class="widget js-widget widget--sidebar">
                  <div class="widget__header">
                    <h2 class="widget__title">Find</h2>
                    <a class="widget__btn js-widget-btn widget__btn--toggle">Show filter</a>
                  </div>
                  <div class="widget__content">

                    <!-- BEGIN SEARCH-->
                    <form method="post" action="" id="searchForm" name="" class="form form--flex form--search js-search-form form--sidebar">
                      <div class="row" id="filter">

                        <div class="form-group">
                          <label for="in-keyword" class="control-label">ID</label>
                          <input class="form-control" type='text' name="" id="id" value="">
                        </div>

                        <div class="form-group">
                          <label for="in-contract-type" class="control-label">ZIP CODE</label>
                          <input class="form-control" type='text' name="" id="zipcode" value="">
                        </div>

                        <div class="form-group">
                          <label for="in-tenure-type" class="control-label">COUNTY</label>
                          <select class="form-control" name="county" id="county">
                            <option value="-">All</option>
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
                          <label for="in-bedrooms-type" class="control-label">CITY</label>
                            <select class="form-control" name="city" id="city">
                              <option value="-">All</option>
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
                          <label for="in-bedrooms-type" class="control-label">PRICE RANGE</label>
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

                        <div class="form__buttons form__buttons--double">
                          <button class="form__submit" id="search" onclick="return false;">Search</button>
                          <button type="reset" class="form__submit" style="background: #a0a0a0;" id="reset" onclick="">Reset</button>
                        </div>

                      </div>
                    </form>
                    <!-- END SEARCH-->



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
    <?php include("jsfooter.php"); ?>
  </body>
</html>
