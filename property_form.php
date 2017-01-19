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

<div class="form-group">
  <label for="in-datetime" class="control-label">DATE RANGE</label>
  <input type="text" id="in-datetime" name="in-datetime" data-start-date="12/03/2015" data-end-date="12/22/2015" data-time-picker="false" data-single-picker="false" class="js-datetimerange form-control">
</div>

<div class="form-group">
    <label for="price" class="control-label">PRICE RANGE</label>
    <select class="form-control" name="price" id="price">
        <option value="-" selected>All</option>
        <option value="1-75">$1 - $75.000</option>
        <option value="75-150">$75.000 - $150.000</option>
        <option value="150-300">$150.000 - $300.000</option>
        <option value="300-600">$300.000 - $600.000</option>
        <option value="600-900">$600.000 - $900.000</option>
        <option value="900-mas"> + $900.000</option>
    </select>
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
