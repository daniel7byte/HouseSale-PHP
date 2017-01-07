<div class="listing__item contador">
    <div class="properties properties--list">
        <div class="properties__thumb"><a href="property_details.php?id=<?=$row['dato2']?>" class="item-photo"><img src="<?=( file_exists('../'.$dire.$row['dato2'].'_0.jpg') ? $dire.$row['dato2'].'_0.jpg' : $imgdefecto )?>" alt=""/></a>
        </div>
        <!-- end of block .properties__thumb-->
        <div class="properties__details">
            <div class="properties__info"><a href="property_details.php?id=<?=$row['dato2']?>" class="properties__address"><span class="properties__address-street"><?=$row['dato7']?></span><span class="properties__address-city"><?=$row['dato8'] . ', ' . $row['dato10'] . ', '. $row['dato11'] . ', GA ' . $row['dato24'] . ', US'?></span></a>
                <div class="properties__offer">
                    <div class="properties__offer-column">

                    </div>
                    <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$<?=number_format($row['dato5'])?></strong>
                        </div>
                    </div>
                </div>
                <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 65 Sq Ft</span><span class="properties__params">Land Size - 110 Sq Ft</span></div>
            </div>
            <div class="properties__intro">
                <p>My home is bright and spacious. Very good transport links. Close to the Olympic village, Westfield and the centre of town. The house has all the mod cons and wifi is included. The room is for a single person occupancy.</p>
            </div><a href="property_details.php?id=<?=$row['dato2']?>" class="properties__more">View details</a>
        </div>
        <!-- end of block .properties__info-->
    </div>
    <!-- end of block .properties__item-->
</div>
