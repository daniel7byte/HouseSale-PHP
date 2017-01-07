<?php
//otro
include("datosiniciales.php");
//$sqlqueryini = " SELECT * FROM ".$dbname.".datoscasas d where 1=1 ";
$selectzip = '';
$selectcountry = '';
$selectcity = '';
//$sqlqueryori = $sqlquery;$sqlquery = $sqlqueryini;
//$sqlquery = " SELECT ".$nomdato." FROM ".$dbname.".datoscasas d where 1=1 ";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$nomdato = "dato24";
	$areemplazar = array('*');
    $remplazo   = array($nomdato);
	//if($d6) 
	 $sqlquery = $sqlqueryini . " group by ".$nomdato." ";
	//else $sqlquery = str_replace($areemplazar, $remplazo, $sqlqueryori) . " group by ".$nomdato." ";
	//create table filtrocounty SELECT dato11 FROM ".$dbname.".datoscasas d group by dato11
	//$sqlquery = sqlquery . " SELECT dato24 FROM ".$dbname.".datoscasas d group by dato24 ";
    $stmt = $conn->prepare($sqlquery);
	//if($esdesa) echo $sqlquery;
    $stmt->execute();
	   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//$selectzip = $selectzip . "<option></option>";
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $selectzip = $selectzip . "<option value='" .$resultado[$nomdato] . "'>" .$resultado[$nomdato] ."</option>";
    }
	$nomdato = "dato11";
		$areemplazar = array('*');
    $remplazo   = array($nomdato);
	//if($d6) 
	 $sqlquery = $sqlqueryini . " group by ".$nomdato." ";
	//else $sqlquery = str_replace($areemplazar, $remplazo, $sqlqueryori) . " group by ".$nomdato." ";
	//$sqlquery = str_replace($areemplazar, $remplazo, $sqlqueryori) . " group by dato11 ";
	//create table filtrocounty SELECT dato11 FROM ".$dbname.".datoscasas d group by dato11
	//$sqlquery = " SELECT dato11 FROM ".$dbname.".datoscasas d group by dato11 ";
    $stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
    $stmt->execute();
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//$selectcountry = $selectcountry . "<option></option>";
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $selectcountry = $selectcountry . "<option value='" .$resultado[$nomdato] . "'>" .$resultado[$nomdato] ."</option>";
    }
	$nomdato = "dato10";
		$areemplazar = array('*');
    $remplazo   = array($nomdato);
	//if($d6) 
	 $sqlquery = $sqlqueryini . " group by ".$nomdato." ";
	//else $sqlquery = str_replace($areemplazar, $remplazo, $sqlqueryori) . " group by ".$nomdato." ";
	//create table filtrocity SELECT dato10 FROM ".$dbname.".datoscasas d group by dato10
	//$sqlquery = " SELECT dato10 FROM ".$dbname.".datoscasas d group by dato10 ";
    $stmt = $conn->prepare($sqlquery);
	//echo $sqlquery;
    $stmt->execute();
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//$selectcity = $selectcity . "<option></option>";
	while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $selectcity = $selectcity . "<option value='" .$resultado[$nomdato] . "'>" .$resultado[$nomdato] ."</option>";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

                    <form  method="get" action="leer-inmo-visual.php" id="formufiltro" name="formufiltro" class="form form--flex form--search js-search-form form--sidebar">
					
					
                      <div class="row">
                        <div class="form-group">
                          <label for="in-keyword" class="control-label">ID</label>
                          <input class="form-control" type='text' id='d6' name='d6' value="<?php if($d6){ echo $d6; } ?>" >
                        </div>
                        <div class="form-group">
                          <label for="in-contract-type" class="control-label">ZIP CODE</label>
      <!-- btnPedirObjetoAjax_OnClick('', 'filtrosinmo', 'd1,d2,d3', 'idarregloarchivos', 'd1,d2r,d3r', '', 'idsusuariosconocidos', ''); -->
<select class="form-control" id='d1' name="d1"  onchange="logicafiltrod1();"  >
			
                        <option><?php if($d1){ echo $d1; } else echo $d1; ?></option>
						 <option value="" >Todos</option>
						 <?php echo $selectzip; ?>
</select>	
<script >
					//alert('<?php echo $d1; ?>');
</script>
	<!--input class="clearable" style="width: 98%; padding: 4px 5px;" type="text" id='d1' name="d1" onkeyup="logicakeyfiltrod1(event);" onclick="logicakeyfiltrod1(event);" value="<?php if($d1){ echo $d1; } else echo $d1; ?>" /-->
<script >
                    var d1 = document.getElementById('d1');
					//alert('<?php echo $d1; ?>');
					if(d1.value!="<?php echo $d1; ?>"){
					//alert("locambio");
					d1.value="<?php echo $d1; ?>";
					}
</script>
                        </div>
						
						
						

 <div class="form-group">
                          <label for="in-tenure-type" class="control-label">COUNTY</label>
<select class="form-control"  id='d3' name='d3'  onchange="logicafiltrod3();"   >
					
                        <option><?php if($d3){ echo $d3; } ?></option>
                              <option value="" >Todos</option>
                              <?php echo $selectcountry; ?>
                              								
								
</select>
                        </div>
						
                        <div class="form-group">
                          <label for="in-bedrooms-type" class="control-label">CITY</label>
<select  class="form-control" id='d2' name='d2'  onchange="logicafiltrod2();"   >
				
                        <option><?php if($d2){ echo $d2; } ?></option>
                             <option value="" >Todos</option>
                          <?php echo $selectcity; ?>					
								
</select>	
                        </div>
						
						
                        <div class="form-group">
                          <label for="in-bedrooms-type" class="control-label">PRICE RANGE</label>
	<select  class="form-control"  onchange="logicafiltrod4();"  id="filter_price_from" name="filter_price_from"   >
		<option value="" >All</option>	
		<option value="1-75" >$1 - $75.000</option>
		<option value="75-150" >$75.000 - $150.000</option>
		<option value="150-300" >$150.000 - $300.000</option>	
		<option value="300-600" >$300.000 - $600.000</option>	
		<option value="600-900" >$600.000 - $900.000</option>
		<option value="900-mas" > + $900.000</option>		
	</select>		

	<div  style="display:none" >
		<input class="clearable" style="width: 98%;" id='pag' name="pag"  value="<?php echo $pag; ?>" />
		<input class="clearable" style="width: 98%;"   id='countulti' value="<?php echo $countulti; ?>" />
		<input class="clearable" style="width: 98%;"   id='prueba' value="<?php if($d1){ echo $d1; } else echo $d1; ?>" />
		
		Curr Price Inicial <input type='text'  id='d4' name='d4' value="<?php if($d4){ echo $d4; } ?>" />
		Curr Price Final <input type='text' id='d5' name='d5' value="<?php if($d5){ echo $d5; } ?>" />
		<div id='d1vaci' style="display:none;" >
					<option><?php if($d1){ echo $d1; } else echo $d1; ?></option>
						 <option value="" >Todos</option>
                               <?php echo $selectzip; ?>
					</div>		
		<div id='d3vaci' style="display:none;" >
					<option><?php if($d3){ echo $d3; } ?></option>
                              <option value="" >Todos</option>
                              <?php echo $selectcountry; ?>
					</div>
		<div id='d2vaci' style="display:none;" >
					<option><?php if($d2){ echo $d2; } ?></option>
                             <option value="" >Todos</option>
                          <?php echo $selectcity; ?>	
					</div>			
		</div>
		
                        </div>						
						
						
						


 <div class="form__buttons form__buttons--double">
                          
                          <button type="submit" class="form__submit" onclick="botonbuscar();">Search</button>
                          
                        </div>
                      </div>
                    </form>
                    <!-- end of block-->