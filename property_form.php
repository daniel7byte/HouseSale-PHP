<div class="form-group">
    <label for="in-contract-type" class="control-label" style="font-size: 16px;"><?php echo FORM_LABEL1; ?></label>
    <select id="" data-placeholder="Contract type" class="form-control">
        <option>Georgia</option>
    </select>
</div>

<div class="form-group">
    <label for="zipcode" class="control-label"><?php echo FORM_LABEL2; ?></label>
    <input class="form-control" type='text' name="zipcode" id="zipcode" value="">
</div>

<div class="form-group">
    <label for="county" class="control-label"><?php echo FORM_LABEL3; ?></label>
    <select class="form-control" name="county" id="county">
        <option value="-"><?php echo FORM_SELECT_ALL; ?></option>
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
    <label for="city" class="control-label"><?php echo FORM_LABEL4; ?></label>
    <select id="city" name="city" class="form-control">
        <option value="-"><?php echo FORM_SELECT_ALL; ?></option>
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
    <label for="price" class="control-label"><?php echo FORM_LABEL6; ?></label>
    <input type="hidden" value="1" name="price-min" id="price-min" style="width:100%" class="form-control">
    <input type="hidden" value="9999999" name="price-max" id="price-max" style="width:100%" class="form-control">
    <div class="range-prices">
        <div class="price-from">$<span>1</span></div>
        <div class="divisor">-</div>
        <div class="price-to">$<span>9999999</span></div>
    </div>
    <div id="price-selector"></div>
</div>

<div class="form-group" style="display:block;">
    <label for="id" class="control-label">ID</label>
    <input class="form-control" type='text' name="id" id="id" value="">
</div>

<div class="form-group">
    <label for="systemFiltro" class="control-label"><?php echo FORM_LABEL7; ?></label>
    <select class="form-control" name="systemFiltro" id="systemFiltro">
        <option value="" selected><?php echo FORM_SELECT_ALL; ?></option>
        <option value="1">FMLS</option>
        <option value="0">GAMLS</option>
    </select>
</div>
