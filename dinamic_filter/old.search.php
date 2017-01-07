<?php

$id = $_POST['id'];
$zipcode = $_POST['zipcode'];
$county = $_POST['county'];
$city = $_POST['city'];
$price = $_POST['price'];

include("../datosiniciales.php");

try {
  $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  exit;
}

if($id != ''){

$query = $mysql->prepare("SELECT * FROM datoscasas WHERE dato2 LIKE :id ");
$query->execute([':id' => "%$id%"]);
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

<?php endforeach;

}elseif($zipcode != ''){

  // START

  switch ($price) {

    default:

    case '-':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato24 LIKE :zipcode");
      $queryOne->execute([
        ':zipcode' => "%$zipcode%"
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;

    case '1-75':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato24 LIKE :zipcode AND dato5 <= :price");
      $queryOne->execute([
        ':zipcode' => "%$zipcode%",
        ':price' => '75000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '75-150':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato24 LIKE :zipcode AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':zipcode' => "%$zipcode%",
        ':priceA' => '75000',
        ':priceB' => '150000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '150-300':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato24 LIKE :zipcode AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':zipcode' => "%$zipcode%",
        ':priceA' => '150000',
        ':priceB' => '300000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '300-600':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato24 LIKE :zipcode AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':zipcode' => "%$county%",
        ':priceA' => '300000',
        ':priceB' => '600000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '600-900':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato24 LIKE :zipcode AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':zipcode' => "%$zipcode%",
        ':priceA' => '600000',
        ':priceB' => '900000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '900-mas':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato24 LIKE :zipcode AND dato5 >= :price");
      $queryOne->execute([
        ':zipcode' => "%$zipcode%",
        ':price' => '900000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
  }

  // FIN


}else{

  switch ($price) {

    default:

    case '-':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city");
      $queryOne->execute([
        ':county' => "%$county%",
        ':city' => "%$city%"
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;

    case '1-75':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 <= :price");
      $queryOne->execute([
        ':county' => "%$county%",
        ':city' => "%$city%",
        ':price' => '75000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '75-150':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':county' => "%$county%",
        ':city' => "%$city%",
        ':priceA' => '75000',
        ':priceB' => '150000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '150-300':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':county' => "%$county%",
        ':city' => "%$city%",
        ':priceA' => '150000',
        ':priceB' => '300000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '300-600':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':county' => "%$county%",
        ':city' => "%$city%",
        ':priceA' => '300000',
        ':priceB' => '600000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '600-900':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :priceA AND dato5 <= :priceB");
      $queryOne->execute([
        ':county' => "%$county%",
        ':city' => "%$city%",
        ':priceA' => '600000',
        ':priceB' => '900000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
    case '900-mas':

      $queryOne = $mysql->prepare("SELECT * FROM datoscasas WHERE dato11 LIKE :county AND dato10 LIKE :city AND dato5 >= :price");
      $queryOne->execute([
        ':county' => "%$county%",
        ':city' => "%$city%",
        ':price' => '900000'
      ]);

      $rowsOne = $queryOne->fetchAll();

      foreach ($rowsOne as $row):

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

      <?php

      endforeach;

      break;
  }

}
