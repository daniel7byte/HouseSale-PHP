<div class="listing__item contador">
  <div class="properties properties--grid">
    <div class="properties__thumb"><a href="property_details.php?id=<?=$row['dato2']?>" class="item-photo"><img src="dinamic_filter/getImages.php?id=<?=$row['dato2']?>&w=483&h=262&p=50" alt="" />
        <figure class="item-photo__hover item-photo__hover--params">
          <span class="properties__more">View details</span>
        </figure></a>
    </div>
    <div class="properties__details">
      <div class="properties__info"><a href="property_details.php?id=<?=$row['dato2']?>" class="properties__address"><span class="properties__address-street"><?=$row['dato7']?></span><span class="properties__address-city"><?=$row['dato8'] . ', ' . $row['dato10'] . ', '. $row['dato11'] . ', GA ' . $row['dato24'] . ', US'?></span></a>
        <div class="properties__offer">
          <div class="properties__offer-column">
            <div class="properties__offer-value"><strong>$<?=number_format($row['dato5'])?></strong><span class="properties__offer-period"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
