<div class="form-group">
    <label for="in-contract-type" class="control-label" style="font-size: 16px;">STATE</label>
    <select id="" data-placeholder="Contract type" class="form-control">
        <option>Georgia</option>
    </select>
</div>

<div class="form-group">
    <label for="zipcode" class="control-label">ZIP CODE</label>
    <input class="form-control" type='text' name="zipcode" id="zipcode" value="">
</div>

<div class="form-group">
    <label for="county" class="control-label">COUNTY</label>
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
    <label for="city" class="control-label">CITY</label>
    <select id="city" name="city" class="form-control">
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

<div class="form-group" style="min-width:100% !important">
    <label for="price" class="control-label">PRICE RANGE</label>
    <input type="hidden" name="price-min" id="price-min" style="width:100%" class="form-control">
    <input type="hidden" name="price-max" id="price-max" style="width:100%" class="form-control">
    <div class="range-prices">
        <div class="price-from">$<span>150000</span></div>
        <div class="divisor">-</div>
        <div class="price-to">$<span>750000</span></div>
    </div>
    <div id="price-selector"></div>
</div>

<div class="form-group" style="display:none;">
    <label for="id" class="control-label">ID</label>
    <input class="form-control" type='text' name="id" id="id" value="">
</div>

<div class="form-group">
    <label for="systemFiltro" class="control-label">SYSTEM</label>
    <select class="form-control" name="systemFiltro" id="systemFiltro">
        <option value="" selected>All</option>
        <option value="1">FMLS</option>
        <option value="0">GAMLS</option>
    </select>
</div>
