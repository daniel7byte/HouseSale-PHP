<section class="filter-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <form action="#" class="form-inline">
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="#" method="GET">
                                <div class="form-group">
                                    <select name="state" id="state" class="form-control">
                                        <option value="">Georgia</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="zipcode" class="form-control" placeholder="Zip Code">
                                    <!--<div class="input-button">
                                        <input type="text" name="search">
                                        <button type="button"><span class="fa fa-search"></span></button>
                                    </div>-->
                                </div>
                                <div class="form-group">
                                    <select name="county" id="county" class="form-control">
                                        <option value="">Select a county</option>
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
                                    <select name="city" id="city" class="form-control">
                                        <option value="">Select a city</option>
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
                                <div class="form-group" id="price-regulator">
                                    <input type="hidden" value="150000" name="price-min" id="price-min" style="width:100%" class="form-control">
                                    <input type="hidden" value="750000" name="price-max" id="price-max" style="width:100%" class="form-control">
                                    <div class="range-prices">
                                        <div class="price-from">$<span>150000</span></div>
                                        <div class="divisor">-</div>
                                        <div class="price-to"><div class="plus" id="plus">+</div>$<span>750000</span></div>
                                    </div>
                                    <div id="price-selector"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="zipcode" class="form-control" placeholder="ID">    
                                </div>
                                <div class="form-group">
                                    <select name="systemFiltro" id="systemFiltro" class="form-control">
                                        <option value="">System</option>
                                        <option value="1">FMLS</option>
                                        <option value="0">GAMLS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-joygle" value="Search"></input>
                                </div>
                                <!--
                                <button type="button" class="btn btn-default">Any Price <span class="caret"></span></button>
                                <button type="button" class="btn btn-default">All Beds <span class="caret"></span></button>
                                <button type="button" class="btn btn-default">All Home types <span class="caret"></span></button>
                                <button type="button" class="btn btn-default">More <span class="caret"></span></button>
                                <button type="button" class="btn btn-joygle">Save Search</button>
                                -->
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>