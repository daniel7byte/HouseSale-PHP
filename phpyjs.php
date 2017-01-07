<?php
//otro
?>
<script type="text/javascript">
	/*	$(document).keypress(function (e) {
    if (e.which == 13) {
        alert('enter key is pressed');
    }
});*/
        var requestUrlpru = "http://localhost:3422/WebSite1/pru.asmx/prubd";
		var d2anterior = "";
	    var d3anterior = "";
		var dmanda = "";
        function recargarpagina() {
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			//alert(document.getElementById('d1').value+' -- '+document.getElementById('d2').value+' -- '+document.getElementById('d3').value);
			//alert(d1.value+' -- '+d2.value+' -- '+d3.value);
			if(document.getElementById('d1').value=="") { document.getElementById('d2').value = "";document.getElementById('d3').value=""; }
			document.getElementById('formufiltro').submit();
            //window.location.assign(requestUrlpru);
        }
		function logicakeyfiltrod1(e){
			var pag = document.getElementById('pag');
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			if(d1.value.length>4 && d1.value.length<6) {
			//alert("largo es "+d1.value.length);
			//if(d3.value==""&&d2.value=="")
			 btnPedirObjetoAjax_OnClick('', 'filtrosinmod1', 'd1,d2,d3', 'idarregloarchivos', 'd3,d2', '', 'idsusuariosconocidos', '');
			}
			else if(d1.value.length<1) {
			//alert("largo es "+d1.value.length);
			if(d3.value==""&&d2.value=="")
			 btnPedirObjetoAjax_OnClick('', 'filtrosinmod1', 'd1,d2,d3', 'idarregloarchivos', 'd3,d2', '', 'idsusuariosconocidos', '');
			}
			else {
			d2.value ="";
			d2.innerHTML = "<option value='' ><?php echo $nodatosdl; ?></option>";
			d3.value ="";
			d3.innerHTML = "<option value='' ><?php echo $nodatosdl; ?></option>";
			}
			if (e.keyCode == 13) {
			//alert("enter");
			return false;
			if(d1.value=="") { d2.value = "";d3.value=""; }
			pag.value = '0';
			document.getElementById('formufiltro').submit();
			}
			//alert(d1.value+' -- '+d2.value+' -- '+d3.value);
		}
		function logicafiltrod1(){
			var pag = document.getElementById('pag');
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			var d1vaci = document.getElementById('d1vaci');
			var d2vaci = document.getElementById('d2vaci');
			var d3vaci = document.getElementById('d3vaci');
			//alert(d1.value+' -- '+d2.value+' -- '+d3.value);
			if(d1.value=="") { d2.value = "";d3.value=""; dmanda ="";
			d1.innerHTML=d1vaci.innerHTML;d2.innerHTML=d2vaci.innerHTML;d3.innerHTML=d3vaci.innerHTML; }
			else //pag.value = '0';
			btnPedirObjetoAjax_OnClick('', 'filtrosinmod1', 'd1,d2,d3', 'idarregloarchivos', 'd3,d2', '', 'idsusuariosconocidos', '');
			
			//document.getElementById('formufiltro').submit();
            
		}
		function logicafiltrod2(){
			var pag = document.getElementById('pag');
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			var d1vaci = document.getElementById('d1vaci');
			var d2vaci = document.getElementById('d2vaci');
			var d3vaci = document.getElementById('d3vaci');
			
			//pag.value = '0';
			//alert(d1.value+' -- '+d2.value+' -- '+d3.value);
			if(d2.value=="") { d2.value = "";d3.value="";dmanda ="";
			d2.innerHTML=d2vaci.innerHTML;d3.innerHTML=d3vaci.innerHTML; }
			//else if(d3.value!="") {}
			else {
			if(dmanda=="") dmanda ="d2";
			if(dmanda=="d2") 
			btnPedirObjetoAjax_OnClick('', 'filtrosinmod2', 'd1,d2,d3', 'idarregloarchivos', 'd3', '', 'idsusuariosconocidos', '');
			
			}
			 
			//document.getElementById('formufiltro').submit();
            
		}
		function logicafiltrod3(){
			var pag = document.getElementById('pag');
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			var d1vaci = document.getElementById('d1vaci');
			var d2vaci = document.getElementById('d2vaci');
			var d3vaci = document.getElementById('d3vaci');
			
			//pag.value = '0';
			//alert(d1.value+' -- '+d2.value+' -- '+d3.value);
			if(d3.value=="") { d2.value = "";d3.value=""; dmanda ="";
			d2.innerHTML=d2vaci.innerHTML;d3.innerHTML=d3vaci.innerHTML; }
			//else if(d2.value!="" && d2.value==d2anterior) {}
			else {
			if(dmanda=="") dmanda ="d3";
			if(dmanda=="d3") 
			btnPedirObjetoAjax_OnClick('', 'filtrosinmod3', 'd1,d2,d3', 'idarregloarchivos', 'd2', '', 'idsusuariosconocidos', '');
		    
			}
			
			//document.getElementById('formufiltro').submit();
            
		}
		function logicafiltrod4(){
			var pag = document.getElementById('pag');
			var dfilterprice = document.getElementById('filter_price_from');
			var d4 = document.getElementById('d4');
			var d5 = document.getElementById('d5');
			//alert("holaaaa "+ dfilterprice.value);
			if (dfilterprice.value=="") { d4.value = "";d5.value=""; }
			else if (dfilterprice.value=="1-75") { d4.value = "1";d5.value="75000"; }
			else if (dfilterprice.value=="75-150") { d4.value = "75000";d5.value="150000"; }
			else if (dfilterprice.value=="150-300") { d4.value = "150000";d5.value="300000"; }
			else if (dfilterprice.value=="300-600") { d4.value = "300000";d5.value="600000"; }
			else if (dfilterprice.value=="600-900") { d4.value = "600000";d5.value="900000"; }
			else if (dfilterprice.value=="900-mas") { d4.value = "900000";d5.value=""; }
			else {d4.value = "";d5.value="";}
			             
		}
		//<b onclick="anteriorpag();" >anterior</b><b onclick="siguientepag();" >siguiente</b>
		function anteriorpag(){
			var pag = document.getElementById('pag');
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			var d4 = document.getElementById('d4');
			var d5 = document.getElementById('d5');
			var a = parseInt(pag.value);
			a = a -1;
			if (a<0) { a=0;return; }
			pag.value = a;
			d1.value='<?php echo $d1p; ?>' ; d2.value = '<?php echo $d2p; ?>';d3.value='<?php echo $d3p; ?>'; 
			d4.value='<?php echo $d4p; ?>' ; d5.value = '<?php echo $d5p; ?>';
			//alert('anterior pagina '+pag.value);
			//if(d3.value=="") { d2.value = ""; }
			document.getElementById('formufiltro').submit();
            
		}
		function siguientepag(){
			var pag = document.getElementById('pag');
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			var d4 = document.getElementById('d4');
			var d5 = document.getElementById('d5');
			var countulti = document.getElementById('countulti');
			//alert('siguiente pagina '+countulti.value);
			var a = parseInt(pag.value);
			var b = parseInt(countulti.value);
			if(b < <?php echo $limitepagina; ?>) return;//a = a;
			else a = a +1;
			pag.value = a;
			d1.value='<?php echo $d1p; ?>' ; d2.value = '<?php echo $d2p; ?>';d3.value='<?php echo $d3p; ?>'; 
			d4.value='<?php echo $d4p; ?>' ; d5.value = '<?php echo $d5p; ?>';
			//alert('siguiente pagina '+pag.value);
			document.getElementById('formufiltro').submit();
            
		}
		function irapagina(numpag){
			var pag = document.getElementById('pag');
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			var d4 = document.getElementById('d4');
			var d5 = document.getElementById('d5');
			pag.value = numpag;
			d1.value='<?php echo $d1p; ?>' ; d2.value = '<?php echo $d2p; ?>';d3.value='<?php echo $d3p; ?>'; 
			d4.value='<?php echo $d4p; ?>' ; d5.value = '<?php echo $d5p; ?>';
			document.getElementById('formufiltro').submit();
		}
		function botonbuscar(){
			var pag = document.getElementById('pag');
			pag.value = "0";
			var d1 = document.getElementById('d1');
			var d2 = document.getElementById('d2');
			var d3 = document.getElementById('d3');
			var d4 = document.getElementById('d4');
			var d5 = document.getElementById('d5');
			var d6 = document.getElementById('d6');
			if(d6.value.length>0) { d1.value = "";d2.value = "";d3.value = "";d4.value = "";d5.value = ""; }
			document.getElementById('formufiltro').submit();
		}
</script>