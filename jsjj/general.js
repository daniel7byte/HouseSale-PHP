// Archivo JScript

var variable = "";
var primeravez = "si";
function mostrarsubmenu(otromenu,nombresubmenu)
{
    if (variable!=otromenu)// || primeravez=="si")
    {
    if (primeravez=="si"){variable=otromenu;primeravez="no";}
    document.getElementById(variable +'normal').innerHTML = document.getElementById(variable +'claro').innerHTML;
    variable=otromenu;
    document.getElementById('submenu').innerHTML = document.getElementById(nombresubmenu).innerHTML;
    document.getElementById(otromenu +'normal').innerHTML = document.getElementById(otromenu +'oscuro').innerHTML;
    }
}
function ejecutarjs(funcionejecutar)
{
    //esta funcion se encarga de ejecutar cualquier funcion que se le pase
    try
    {
    eval(funcionejecutar);
    }
     catch (e) 
    {
        //alert (funcionejecutar);
    }
    
}
function ocultarsubmenu(otromenu,nombresubmenu)
{
/*
    if (variable!=otromenu)
    {
    variable=otromenu;
    //document.getElementById('submenu').innerHTML = document.getElementById(nombresubmenu).innerHTML;
    document.getElementById(otromenu +'normal').innerHTML = document.getElementById(otromenu +'claro').innerHTML;
    }
*/

}
function suministrarFormulario(querystring)
{/*
document.forms[0].action = querystring;
document.aspnetForm.action = querystring;
document.forms[0].submit();
*/
}
function LimpiarTexto(objeto)
{
objeto.value = "";
}
function limpia(elemento)
{
elemento.value = "";
}
function verifica(elemento)
{
/*if(elemento.value == "")elemento.value = "Escriba Aqui";*/
}
function VerificarSoloNumeros(e) {
                    //alert("puede que funcione");
                    tecla = (document.all) ? e.keyCode : e.which; // 2
                    if (tecla==8) return true; // 3
                    patron =/\d/; // 4
                    te = String.fromCharCode(tecla); // 5
                    return patron.test(te); // 6
                }
function CargarImagenGrande(elemento)
{
document.getElementById('divMostrarImagen').innerHTML = document.getElementById(elemento).innerHTML;
    
}
var nombreUltimoMenu = "";
var linkImagenUltimoMenu = "";
function GuardarInfoImagen(nombreObjeto,elemento)
{    
    nombreUltimoMenuClikeado = nombreObjeto;
    linkImagenUltimoMenu = elemento;
}
function LimpiarUltimaImagen()
{

    try
    {
    //alert(nombreUltimoMenuClikeado+linkImagenUltimoMenu.replace("_a",""));
    CargarImagen(nombreUltimoMenuClikeado,linkImagenUltimoMenu.replace("_a",""));
    }
    catch (e) 
    {
    }
}
function CargarImagen(nombreObjeto,elemento)
{
    //"http://beta.outlet.com.co/"
    //alert(nombreObjeto+""+elemento);
    //sector que guarda el ultimo objeto guardado
    
    //nombreUltimoMenuClikeado = nombreObjeto;
    //linkImagenUltimoMenu = elemento;
    var arrayVisores;
    
    if(document.getElementById(nombreObjeto))
    {
        arrayVisores = document.getElementById(nombreObjeto);
        arrayVisores.src = elemento;
    }
    else
    {
        //arrayVisores = document.getElementsByName(nombreObjeto);
        //arrayVisores[0].src = elemento;
        try
        {
        arrayVisores = document.getElementsByName(nombreObjeto);
        }
        catch (e) {}//arrayVisores = document.getElementsByClassName(nombreObjeto); }
        var i;
        i=0;
        for (i=0;i<arrayVisores.length;i++)
        {
        arrayVisores[i].src = elemento;
        }
    }    
}
function CambiarMenu(nombreObjeto,elemento)
{

    LimpiarUltimaImagen();
    CargarImagen(nombreObjeto,elemento);
    
}
function MostrarDivImagenGrande(elemento)
{
    document.getElementById('divisorMostrarImagen1').innerHTML = document.getElementById('divisorMostrarImagen').innerHTML;
    document.getElementById('divisorMostrarImagen1').style.display = "block";
    
}
function OcultarDivImagenGrande(elemento)
{
    document.getElementById('divisorMostrarImagen1').style.display = "none";
    
}
function TamVentana() {
  var Tamanyo = [0, 0];
  if (typeof window.innerWidth != 'undefined')
  {
    Tamanyo = [
        window.innerWidth,
        window.innerHeight
    ];
  }
  else if (typeof document.documentElement != 'undefined'
      && typeof document.documentElement.clientWidth !=
      'undefined' && document.documentElement.clientWidth != 0)
  {
 Tamanyo = [
        document.documentElement.clientWidth,
        document.documentElement.clientHeight
    ];
  }
  else   {
    //Tamanyo = [
    //    document.getElementsByTagName('body')[0].clientWidth,
     //   document.getElementsByTagName('body')[0].clientHeight
    //];
  }
  return Tamanyo;
}
function GetLeft(ele)
{
	if (ele.offsetParent)
		return ele.offsetLeft + GetLeft(ele.offsetParent);
	else
		return ele.offsetLeft;
}

function GetTop(ele)
{
	if (ele.offsetParent)
		return (ele.offsetTop + GetTop(ele.offsetParent));
	else
		return ele.offsetTop;
}
//var coordenadaX ;
//var coordenadaY ;
var tempX = 184;
var tempY = 200;

function MostrarDiv(elemento,mensaje)
{
    try
    {
    //getMouseXY();
    //muestraInformacion(document.onclick);
    document.getElementById(elemento).style.left = tempX.toString();
    document.getElementById(elemento).style.top = tempY.toString();
    //alert("Has pulsado el ratón en la posición: " + tempX.toString() + ", " + tempY.toString());
    try{
    document.getElementById('Txt'+ elemento).innerHTML = mensaje;//document.getElementById('divisorMostrarImagen').innerHTML;
    }catch(e){}
    document.getElementById(elemento).innerHTML = mensaje;
    document.getElementById(elemento).style.zIndex = "990"; 
    document.getElementById(elemento).style.display = "block";
    setTimeout("OcultarDiv('"+elemento+"');", 2500);
    }catch(e){}
    
}
function MostrarDivXY(elemento,mensaje,tmpX,tmpY,Index,event,objetousado,direImagen)
{
    var Tam = TamVentana(); 
    var varr=GetLeft(objetousado) + 400 + 422;
    var valorizq = GetLeft(objetousado) - 330;
    var valorder = GetLeft(objetousado) + 230;
    var valorfinal;
    //getMouseXY();
    //muestraInformacion(document.onclick);
    /*   
    if(valorizq < 0) valorfinal = valorder;
    else valorfinal = valorizq;
    //document.getElementById(elemento).style.left = valorderecha.toString();
    document.getElementById(elemento).style.left = valorfinal+'px';
    document.getElementById(elemento).style.top = tmpY+'px';
    document.getElementById(elemento + 'img').src = direImagen.toString();
    //alert("Has pulsado el ratón en la posición: " + tempX.toString() + ", " + tempY.toString());
       
   document.getElementById('Txt'+ elemento).innerHTML = 'es largo '+varr +' valorderecha ' + valorder+' La ventana mide: [' + Tam[0] + ', ' + Tam[1] + '] y mouse '+ event.clientX + '--' + event.clientY + 'y posision img '+ GetLeft(objetousado) + '--' + GetTop(objetousado);//mensaje;//document.getElementById('divisorMostrarImagen').innerHTML;
    document.getElementById(elemento).style.zIndex = "200";//Index;
    MostrarDivGeneralConValor(elemento,objetousado,tmpY);
    //document.getElementById(elemento).style.display = "block";
    //setTimeout("OcultarDiv('"+elemento+"');", 2500);
    */
}
function OcultarDiv(elemento)
{
    try{
    document.getElementById(elemento).style.display = "none";
    document.getElementById(elemento).style.zIndex = 0;
    OcultarDivGeneral(elemento);
    }
    catch(e) {}
}
function MostrarDivGeneralConValor(elemento,objetousado,tmpY)
{
    var nomDivGeneral = "divgeneral";
    var varr=GetLeft(objetousado) + 400 + 422;
    var valorizq = GetLeft(objetousado) - 330;
    var valorder = GetLeft(objetousado) + 230;
    var valorfinal;
    
    if(valorizq < 0) valorfinal = valorder;
    else valorfinal = valorizq;
    
    document.getElementById(nomDivGeneral).style.left = valorfinal+'px';;
    document.getElementById(nomDivGeneral).style.top = tmpY+'px';
    document.getElementById(nomDivGeneral).style.zIndex = document.getElementById(elemento).style.zIndex;
    document.getElementById(nomDivGeneral).innerHTML = document.getElementById(elemento).innerHTML;
    document.getElementById(nomDivGeneral).style.display = "block";
}
function OcultarDivGeneral(elemento)
{
    var nomDivGeneral = "divgeneral";
    document.getElementById(nomDivGeneral).style.zIndex = 0;
    document.getElementById(nomDivGeneral).style.display = "none";
    
}
function MostrarDivNormal(elemento)
{
    document.getElementById(elemento).style.display = "block";
    document.getElementById(elemento).style.zIndex = "990";
    
}
function OcultarDivNormal(elemento)
{
    document.getElementById(elemento).style.display = "none";
    document.getElementById(elemento).style.zIndex = "0";
    
}
function MostraroOcultarDivNormal(elemento)
{
    //se inicializa una varibale que indicara que alguna de las dos 
    //acciones ya se hizo para que no se repita la que sigue
    var verificador = 0;
    if ( verificador == 0 && document.getElementById(elemento).style.display == "block") 
    {
        //alert('SE ocultara');
        verificador = 1;
        OcultarDivNormal(elemento);
    }
    if ( verificador == 0 && document.getElementById(elemento).style.display == "none") 
    {
        //alert('se mostrara');
        verificador = 1;
        MostrarDivNormal(elemento);
    }
    
}
function PonerDivEnOtroDiv(elemento1,elemento2)
{
    ///alert(elemento1+elemento2);
    document.getElementById(elemento1).innerHTML = document.getElementById(elemento2).innerHTML ;
    //MostrarDiv(elemento1,"prueba");
    
}
function PonerDivEnOtroDivMensajes(elemento1,elemento2,mensaje)
{
    ///alert(elemento1+elemento2);
    document.getElementById(elemento1).innerHTML = document.getElementById(elemento2).innerHTML ;
    if(mensaje != "") MostrarDiv(elemento1,mensaje);
    
}
function PonerEnDivUnHtml(elemento1,mensaje)
{
    ///alert(elemento1+elemento2);
    document.getElementById(elemento1).innerHTML = mensaje;   
    
}
function manejadorEventos(elEvento) {
  var evento = elEvento || window.event;
}
function muestraInformacion(elEvento) {
  var evento = elEvento || window.event;
  var coordenadaX = evento.clientX;
  var coordenadaY = evento.clientY;
  //alert("Has pulsado el ratón en la posición: " + coordenadaX + ", " + coordenadaY);
}
//document.onclick = muestraInformacion;

 //<script language="JavaScript1.2">
//<!--
/*
// Detect if the browser is IE or not.
// If it is not IE, we assume that the browser is NS.
var IE = document.all?true:false;

// If NS -- that is, !IE -- then set up for mouse capture
if (!IE) document.captureEvents(Event.MOUSEMOVE);

document.onmousemove = getMouseXY;

function getMouseXY(e) {
  if (IE) { // grab the x-y pos.s if browser is IE
    tempX = event.clientX + document.body.scrollLeft;
    tempY = event.clientY + document.body.scrollTop;
  } else {  // grab the x-y pos.s if browser is NS
    tempX = e.pageX;
    tempY = e.pageY;
  }  
  // catch possible negative values in NS4
  if (tempX < 0){tempX = 0;}
  if (tempY < 0){tempY = 0;}  
  // show the position values in the form named Show
  // in the text fields named MouseX and MouseY
  //document.Show.MouseX.value = tempX
  //document.Show.MouseY.value = tempY
  return true;
}

//-->
//</script>



/*este tres funciones siguientes manejan las cokies que se utilizan en milista*/
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

//desde aqui es que parece que funcionan 
/*funciones que si funcionan en registro empresa para la cokie*/
function CojerValorCookieG(indice) {
	//indice indica el comienzo del valor
	var galleta = document.cookie
	//busca el final del valor, dado por ;, a partir de indice
	var finDeCadena = galleta.indexOf(";", indice)
	//si no existe el ;, el final del valor lo marca la longitud total de la cookie
	if (finDeCadena == -1)
		finDeCadena = galleta.length

	return unescape(galleta.substring(indice, finDeCadena))
	}
function CojerCookieG(nombre) {
	var galleta = document.cookie
	//construye la cadena con el nombre del valor
	var arg = nombre + "="
        var alen = arg.length			//longitud del nombre del valor
	var glen = galleta.length		//longitud de la cookie

	var i = 0
	while (i < glen) {
		var j = i + alen			//posiciona j al final del nombre del valor
		if (galleta.substring(i, j) == arg)	//si en la cookie estamo ya en nombre del valor		
			return CojerValorCookieG(j)	//devuleve el valor, que esta a partir de j

		i = galleta.indexOf(" ", i) + 1		//pasa al siguiente
		if (i == 0)
			break				//fin de la cookie
	}
	return null					//no se encuentra el nombre del valor
}

function GuardarCookieG (nombre, valor, caducidad) {
	if(!caducidad)
		caducidad = CaducaG(0)

	//crea la cookie: incluye el nombre, la caducidad y la ruta donde esta guardada
	//cada valor esta separado por ; y un espacio
	document.cookie = nombre + "=" + escape(valor) + "; expires=" + caducidad + "; path=/";
	//alert("se guardo con esto "+nombre + "=" + escape(valor) + "; expires=" + caducidad + "; path=/");
}

function CaducaG(dias) {
	var hoy = new Date()					//coge la fecha actual
	var msEnXDias = eval(dias) * 24 * 60 * 60 * 1000	//pasa los dias a mseg.

	hoy.setTime(hoy.getTime() + msEnXDias)			//fecha de caducidad: actual + caducidad
	return (hoy.toGMTString())
}

function BorrarCookieG(nombre) {
	//para borrar la cookie, se le pone una fecha del pasado mediante Caduca(-1)
	document.cookie = nombre + "=; expires=" + Caduca(-1) + "; path=/"
}

function IntroducirCookieG(nomCokie,datosCok,duraCokie) {
	//establece la cookie: la caducidad es de 31 dias
	var _31dias = CaducaG(31)				//crea la fecha de caducidad si 31 dias
	
	//alert("parece q se metio "+datosCok);
	if (datosCok != "") 
		GuardarCookieG(nomCokie, datosCok, _31dias)
}
function IntroducirCookie30diasG(nomCokie,datosCok) {
	//establece la cookie: la caducidad es de 31 dias
	var _31dias = CaducaG(31)				//crea la fecha de caducidad si 31 dias
	
	//alert("parece q se metio "+datosCok);
	if (datosCok != "") 
		GuardarCookieG(nomCokie, datosCok, _31dias)
}



/*funciones que se encargaran de abrir el visor de imagenes en una ventana separada*/
var winName="titulo";
var objVentVisorImagenes;
function Abrir_Ventana(a,w,h) 
{ 
    /*
    //para abrirla en pantalla completa
    alert("Para cerrar la ventana pulsa en tu teclado: ALT+F4") ;
    window.open("http://www.tutores.org","","fullscreen,scrollbars")

    //y esto para abrirla con una animacion 
    function expandingWindow(website) {
var heightspeed = 4; 
var widthspeed = 9; 
var leftdist = 0;
var topdist = 0; 
if (document.all) {
var winwidth = window.screen.availWidth - leftdist;
var winheight = window.screen.availHeight - topdist;
var sizer = window.open("","","left=" + leftdist + ",top=" + topdist + ",width=1,height=1,scrollbars=yes");
for (sizeheight = 1; sizeheight < winheight; sizeheight += heightspeed) {
sizer.resizeTo("1", sizeheight);
}
for (sizewidth = 1; sizewidth < winwidth; sizewidth += widthspeed) {
sizer.resizeTo(sizewidth, sizeheight);
}
sizer.location = website;
}
else
window.location = website;
}
</script>
<a href="http://www.tutores.org" onClick="expandingWindow('http://www.tutores.org/');return false;">Tutores.org</a> 
<br>
<a href="http://www.yahoo.com/" onClick="expandingWindow('http://www.yahoo.com/');return false;">Yahoo.com</a>     
    
    */    
    if(!objVentVisorImagenes)
    {
    theURL = a.getAttribute("href");
    var windowprops ="top=0,left=0,toolbar=no,location=no,status=no, menubar=no,scrollbars=yes, resizable=no,width=" + w + ",height=" + h;
    objVentVisorImagenes = window.open(theURL,winName,windowprops); 
    }
    else
    {
    objVentVisorImagenes.focus();
    }
} 
function Cerrar_Ventana() 
{ 
    window.close();
    if(objVentVisorImagenes)
    {
    objVentVisorImagenes.close();
    }
}
function Volver_Ventana_Anterior() 
{ 
    history.back();
    
}
function Abrir_Pagina(urlPagina) 
{
//alert(urlPagina);
window.location = urlPagina; 
/*
//este es un ejemplo de como preguntar algo para dependiendo de la respuesta del cliente se realize o no
var donde_ir= confirm("Quieres visitarnos?");
if (donde_ir== true)
{ 
window.location="http://www.tutores.org/";
} 
else 
{ 
window.location="http://www.google.com/";
}*/
}
function Abrir_VentanaGeneral(a,w,h) 
{ 
          
    
    theURL = a;
    var windowprops ="top=0,left=0,toolbar=yes,location=no,status=yes, menubar=yes,scrollbars=yes, resizable=yes,width=" + w + ",height=" + h;
    objVentVisorImagenes = window.open(theURL,winName,windowprops); 
    objVentVisorImagenes.focus();
    
} 

function ponervalorcajatexto(cajatextoid,valorponer,objcheckbox)
{
    var valortmp;
    var espaciador = ",";
    
    valortmp = document.getElementById(cajatextoid).value;
    if(objcheckbox.checked ) 
    {
    valortmp = valortmp +   valorponer + espaciador;
    }
    else
    {
    valortmp = valortmp.replace(valorponer + espaciador,"");
    }
    document.getElementById(cajatextoid).value = valortmp;
}
var tiendatimerID = 0;
var tiendacargado = false;
              
function ponertextoendivcambiante(numdatosborrados,iddivcambiar,cadenaarray,cadenaarraytele,cadenaarraydire,inicial,tiemporotacion,urlhrefreci)
{
    var nombre = "nombre";
    var otro = "otro";
    var otro1 = "otro";
    var urlhref = "urlhref";
    var urlonclick = "urlonclick";
    var espaciador = ",";
    var array,arraytele,arraydire;
    var i = inicial;
    
    //eval("alert('john');");
    
    array = cadenaarray.split(espaciador);
	arraytele = cadenaarraytele.split(espaciador);
	arraydire = cadenaarraydire.split(espaciador);
	
	if(numdatosborrados != 0)
	{
	//for(i=inicial;i<array.length;i++)
	//alert(tiemporotacion);
    ponertextoendiv(iddivcambiar+nombre,array[i]);
    ponertextoendiv(iddivcambiar+otro,arraytele[i]);
    ponertextoendiv(iddivcambiar+otro1,arraydire[i]);
    cambiarhref(iddivcambiar+urlhref,urlhrefreci);
    //cambiarhref(iddivcambiar+urlhref,"ListaTiendas.aspx?Empresa="+iddivcambiar);
    
    if(i<array.length-1) i++;
    else i=0;
    
    if (!tiendacargado) 
    {
           tiendatimerID = setTimeout("ponertextoendivcambiante('"+numdatosborrados+"','"+iddivcambiar+"','"+cadenaarray+"','"+cadenaarraytele+"','"+cadenaarraydire+"',"+i+","+tiemporotacion+",'"+urlhrefreci+"')", 7000);
    }
    }
}



function ponertextoendiv(iddivcambiar,mensajeponer)
{
    document.getElementById(iddivcambiar).innerHTML = mensajeponer ;
    
}
function cambiarhref(iddivcambiar,mensajeponer)
{
    document.getElementById(iddivcambiar).href = mensajeponer ;
    
}
function cambiarhrefonclick(iddivcambiar,mensajeponer)
{
    //alert(mensajeponer);
    document.getElementById(iddivcambiar).onClick = ""+mensajeponer+"" ;
    //document.getElementById(iddivcambiar).src = "css/ir.png" ;
    
    
}
function ejecutarcambiotxtdiv(numdatosborrados,iddivcambiar,cadenaarray,cadenaarraytele,cadenaarraydire,inicial,tiemporotacion,urlhrefreci)
{
    var nombre = "nombre";
    var tele = "tele";
    var dire = "dire";
    var urlhref = "urlhref";
    var urlonclick = "urlonclick";
    var espaciador = ",";
    var array,arraytele,arraydire;
    var i = inicial;
    
    try
    {
    //eval("alert('john');");
    
    array = cadenaarray.split(espaciador);
	arraytele = cadenaarraytele.split(espaciador);
	arraydire = cadenaarraydire.split(espaciador);
	
	if(numdatosborrados != 0)
	{
	//for(i=inicial;i<array.length;i++)
	//alert(tiemporotacion);
    ponertextoendiv(iddivcambiar+nombre,array[i]);
    ponertextoendiv(iddivcambiar+tele,arraytele[i]);
    ponertextoendiv(iddivcambiar+dire,arraydire[i]);
    cambiarhref(iddivcambiar+urlhref,urlhrefreci);
    cambiarhrefonclick(iddivcambiar+urlonclick,"Abrir_Pagina('"+urlhrefreci+"');");
    
    //cambiarhref(iddivcambiar+urlhref,"ListaTiendas.aspx?Empresa="+iddivcambiar);
    
    if(i<array.length-1) i++;
    else i=0;
    
    return i;
    }
    }
    catch (e)
    {
    //alert("hubo eror");
    }
}
function ciclocambiotxtdivzzz(cont1,cont2)
{
    //var cont1 = 0;
    //eval("alert('john');");
    cont1 = ejecutarcambiotxtdiv(2,12,'','','',cont1,200,'di.aspx/jj');
    cont2 = ejecutarcambiotxtdiv(2,12,'','','',cont2,200,'di.aspx/jj');
        
    if (!tiendacargado)
    {
           tiendatimerID = setTimeout("ciclocambiotxtdiv("+cont1+","+cont2+")", 7000);
    }
}
function ponerValorEnCajaTexto(nommbreObj,mensaje)
{

var valortmp;
    var espaciador = ",";
    
    try{
    document.getElementById(nommbreObj).value = mensaje;    
    }
    catch(e) { }
    
}
 function MostrarOcultarDiv(nomobj)
 {
    var objtmp;
    objtmp = document.getElementById(nomobj);
    var tamven = TamVentana();
    //var ancho = objtmp.style.width;
    
    //alert(GetLeft(objtmp)+" left --- arr"+GetTop(objtmp)+" ancho "+tamven[0]+ " alto"+ tamven[1] + " ancho "+ancho + " mitad "+tamven[0]/2);
    //MostrarDivTimeX('divbasura'," hahahahah si funciona",GetLeft(objtmp)+ancho,GetTop(objtmp)-40,2500);
    MostrarDivTimeX(nomobj,"solomostrar",tamven[0]/5,tamven[1]/5,0);
    //MostraroOcultarDivNormal('divcontactenos');
    
 }
 function MostrarDivMitadPantalla(nomobj)
 {
    var objtmp;
    objtmp = document.getElementById(nomobj);
    var tamven = TamVentana();
    var ancho = objtmp.style.width;
    
    //alert(GetLeft(objtmp)+" left --- arr"+GetTop(objtmp)+" ancho "+tamven[0]+ " alto"+ tamven[1] + " ancho "+ancho + " mitad "+tamven[0]/2);
    //MostrarDivTimeX('divbasura'," hahahahah si funciona",GetLeft(objtmp)+ancho,GetTop(objtmp)-40,2500);
    MostrarDivTimeX('divbasura'," hahahahah si funciona",tamven[0]/2,tamven[1]/2,2500);
    
 }
function MostrarDivTimeX(elemento,mensaje,coorX,coorY,tiempo)
{
    try
    {
    //getMouseXY();
    //muestraInformacion(document.onclick);
    if(coorX != 0)
    {  
    document.getElementById(elemento).style.left = coorX.toString()+"px";
    document.getElementById(elemento).style.top = coorY.toString()+"px";
    }
    if(mensaje != "solomostrar")
    {    
    document.getElementById(elemento).innerHTML = mensaje;
    }
    //alert("Has pulsado el ratón en la posición: " + tempX.toString() + ", " + tempY.toString());    
    //document.getElementById(elemento).style.zIndex = "990"; 
    //document.getElementById(elemento).style.display = "block";
    MostraroOcultarDivNormal(elemento);
    
    if(tiempo != 0)
    {
    setTimeout("OcultarDivTimeX('"+elemento+"');", tiempo);
    }
    }catch(e){}
    
}
function OcultarDivTimeX(elemento)
{
    try{
    document.getElementById(elemento).style.display = "none";
    document.getElementById(elemento).style.zIndex = "0";    
    }
    catch(e) {}
}
function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
	
	var valorObj;
	var objTmp;
	var objDdlTmp;
	var tamven = TamVentana();
	var izqui = tamven[0]/4;
	var arrib = tamven[1]/4;
	var demora = 5000;
	
	
  if(tecla==13) 
  {
    objTmp = document.getElementById("cajaBusqueda");
    objDdlTmp = document.getElementById("datoCiudad");
    valorObj = trim1(objTmp.value);
    //objTmp.onkeypress =  "return pulsar(event)";
    //alert("se presiono un enter"+objDdlTmp.value+" ddl ---- caja "+valorObj.length+" tam "+tamven[0]/2+" - "+tamven[1]/2);
    //if(valorObj != "" && valorObj.length > 2 && objDdlTmp.value != 1 )//
    if(valorObj == "" )//
    {
        MostrarDivTimeX('divalertacajatextobusque',"solomostrar",0,arrib,demora);//izqui
        return false;
    }
    else if( valorObj.length < 2 )//
    {
        MostrarDivTimeX('divalertacajatextobusque',"solomostrar",0,arrib,demora);
        return false;
    }
    else if( objDdlTmp.value == 1 )//
    {
        MostrarDivTimeX('divalertadroplistbusque',"solomostrar",0,arrib+50,demora);
        return false;
    }
    else
    {
//        MostrarDivTimeX("divbasura",
//        " Escriba palabra a buscar y seleccione una ciudad en la cual desea buscar",100,111,2500);
        MostrarDivTimeX('divcargando',"solomostrar",izqui,arrib,0);
        try{ document.forms[0].submit(); } catch (e) {}
        return true;
        
    }
    
  }
  else
  {
    //alert(tecla); 
    //return false;
  }
}
function pulsarclick(e) {
//	tecla=(document.all) ? e.keyCode : e.which;
	
	var valorObj;
	var objTmp;
	var objDdlTmp;
	var tamven = TamVentana();
	var izqui = tamven[0]/4;
	var arrib = tamven[1]/4;
	var demora = 5000;
	
//  if(tecla==13) 
//  {
	objTmp = document.getElementById("cajaBusqueda");
	alert("va bien");
    objDdlTmp = document.getElementById("datoCiudad");
    alert("va bien 1");
    valorObj = trim1(objTmp.value);
    //objTmp.onkeypress =  "return pulsar(event)";
    //alert("se presiono un enter"+objDdlTmp.value+" ddl ---- caja "+valorObj.length);
    if(valorObj == "" )//
    {alert("vacio");
        MostrarDivTimeX('divalertacajatextobusque',"solomostrar",0,tamven[1]/2,demora);
        return false;
    }
    else if( valorObj.length < 2 )//
    {
        alert("menor 2");
        MostrarDivTimeX('divalertacajatextobusque',"solomostrar",0,tamven[1]/2,demora);
        return false;
    }
    else if( objDdlTmp.value == 1 )//
    {
        alert("igual 1");
        MostrarDivTimeX('divalertadroplistbusque',"solomostrar",0,tamven[1]/2,demora);//tamven[0]/2
        return false;
    }    
    else {
        alert("hace submit");
        //document.submit() 
        MostrarDivTimeX('divcargando',"solomostrar",100,100,0);
        try { document.forms[0].submit(); } catch (e) { alert("no pudo submit"); }
        return true;
        
    }
    
//  }
//  else
//  {
//    //alert(tecla); 
//    //return false;
//  }
}
function funcionesiniciales()
{
    var objTmp;
    
//    document.body.onkeypress = "pulsar(window.event);";return pulsar(event)
//    alert("si entro");//onkeypress="return pulsar(event)"
    window.addEventListener('keypress',pulsar(event),false);
    objTmp = document.getElementById("cajaBusqueda");
    objTmp.onkeypress =  "return pulsar(event)";
}

//window.blur = funcionesiniciales();
//window.blur = alert(" es el unblur ");


function getatributoobjetoid(nomobj,nomatri) 
{
    var result;
    
    if(nomatri == "") nomatri="value";
    try
    {
    objTmp = document.getElementById(nomobj);
    eval("result = objTmp."+nomatri);
    }
    catch(e) {result = ""; }
    
    return result;
}
function validarEmail(valor) {

    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	//var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
		
	if (reg.test(valor))
	{
    //alert("La dirección de email " + valor + " es correcta.");
    return true;//regresa verdadero si es una direccion mail
    } 
    else 
    {
    //alert("La dirección de email es incorrecta.");
    return false;
    }
}
function trim1 (string) {
	string = string.replace(/^\s+/, '');
	for (var i = string.length; i > 0; i--) {
		if (/\S/.test(string.charAt(i))) {
			string = string.substring(0, i);
			break;
		}
	}
	return string;
}

function abrirRegistroEmp(IdReci,CostoReci)
{
    var pieza = null;
    var nombreCokie = "GuiaComercial";
    var vTmp = null;
    var separador = "$";
    var indicador = null;
	
    if(CojerCookieG(nombreCokie) != null) 
    {
        vTmp = CojerCookieG(nombreCokie);
	    //alert("parece q existe la cokie "+nombre);
		indicador = "pri";
		vTmp = cambiarDatoRegistroEmp(2,IdReci,vTmp);
		vTmp = cambiarDatoRegistroEmp(3,CostoReci,vTmp);
		
        GuardarCookieG(nombreCokie,vTmp,CaducaG(31));
    }
    else
    {
        indicador = "sec";
        vTmp = "$$"+IdReci+"$"+CostoReci+"$$$$$$$admin$$$0$$$$$$$";
        GuardarCookieG(nombreCokie,vTmp,CaducaG(31));
    }
    //alert(indicador + vTmp);
    Abrir_Pagina("registroempresas.aspx");
    
}
function cambiarDatoRegistroEmp(numDatoReci,DatoReci,cokieReci)
{
    var pieza = null;
    var resultTmp = "";
    var i = 0;
	var separador = "$";
	
    pieza = cokieReci.split(separador);
    
    for(i = 0; i < pieza.length; i++){ 
        if(numDatoReci == i.toString()) resultTmp += DatoReci + separador;
        else resultTmp += pieza[ i ] + separador;
    }
    
    return resultTmp;
    
}

//var colorerror = "#ffad07";
var colorerrorG = "#ffad07";
var colorbienG = "#ffffff";
//"razon","telefono","nit","direccion","nombrecontacto","palaclientedescripcion","googlemapsucu"
var arrayElementosRevG = ["nombreMC","asuntoMC","mensajeMC"];
var arrayElementosSelectRevG = ["ciudadsucu"];
var arrayElementosEmailRevG = ["emailMC"];
var arrayElementosCheckBoxRevG = [""];
//var numElemenInicialesCokie = arrayElementos.length+arrayElementosSelect.length-1; //14;
//"emailsucu","paginawebsucu","ciudadsucu","zonasucu","barriosucu"];googlemapsucu
var datosFaltantes = "";
    

function revisarDatosFormuG(arrayElementosRevGReci,arrayElementosSelectRevGReci,arrayElementosEmailRevGReci,arrayElementosCheckBoxRevGReci){
    
    var nomObj;
    var nomObj1;
    var nomObj2;
    var objtmp;
    var saleError; 
    var vTmp = "";  
    var separador = ",";
    var nexoFinal = "etip";
    var nomTmp = "";
	
	if(arrayElementosRevGReci != "") arrayElementosRevG = arrayElementosRevGReci.split(separador);
    if(arrayElementosSelectRevGReci != "") arrayElementosSelectRevG = arrayElementosSelectRevGReci.split(separador);
    if(arrayElementosEmailRevGReci != "") arrayElementosEmailRevG = arrayElementosEmailRevGReci.split(separador);
    if(arrayElementosCheckBoxRevGReci != "") arrayElementosCheckBoxRevG = arrayElementosCheckBoxRevGReci.split(separador);
        
    //se reinicia el listado de lo que falta
    datosFaltantes = "";
    
    for ( contador = 0; contador < arrayElementosRevG.length ; contador++) 
    {
	    try
	    {
	        
            nomTmp = arrayElementosRevG[contador];//"razon";
            try{ objtmp = document.getElementById(nomTmp); } catch (e) {}
            try{ objtmp1 = document.getElementById(nomTmp+nexoFinal); } catch (e) {}
            try{ objtmp2 = document.getElementById(nomTmp+nexoFinal+"1"); } catch (e) {}
            //alert(" QUIEN SABE "+nomTmp+" = "+objtmp.value);
            if(trim1(objtmp.value) == "")
            {
                try{ objtmp.style.backgroundColor = colorerrorG; } catch (e) {}
                try{ objtmp1.style.display = "block"; } catch (e) {}
                try{ objtmp2.style.display = "none"; } catch (e) {}
                datosFaltantes += nomTmp + " - ";
                saleError = true;
            }
            else 
            {
                try{ objtmp2.style.display = "block"; } catch (e) {}
                try{ objtmp.style.backgroundColor = colorbienG;  } catch (e) {}
                try{ objtmp1.style.display = "none"; } catch (e) {}
            }
		}
		catch (e) {}		
	}
	//analisa si es registro expres o es el normal todavia no lo activo 
	//vTmp = document.getElementById("ctl00_ContentPlaceHolder1_TxtFuncionAccion").value;
	
	//inicio del if que solo lo ejecuta cuando sea crear osea registro express
		
	//naliza los drop list de la sucu
	for ( contador = 0; contador < arrayElementosSelectRevG.length ; contador++) 
    {
	    try
	    {
	        nomTmp = arrayElementosSelectRevG[contador]+"";//"razon";
	        try{ objtmp = document.getElementById(nomTmp); } catch (e) {}
            try{ objtmp1 = document.getElementById(nomTmp+nexoFinal); } catch (e) {}
            try{ objtmp2 = document.getElementById(nomTmp+nexoFinal+"1"); } catch (e) {}
            //alert(" QUIEN SABE "+nomTmp+" = "+objtmp.value);
            if(trim1(objtmp.value) == "1")
            {
                try{ objtmp.style.backgroundColor = colorerrorG; } catch (e) {}
                try{ objtmp1.style.display = "block"; } catch (e) {}
                try{ objtmp2.style.display = "none"; } catch (e) {}
                datosFaltantes += nomTmp + " - ";
                saleError = true;
            }
            else 
            {
                try{ objtmp2.style.display = "block"; } catch (e) {}
                try{ objtmp.style.backgroundColor = colorbienG;  } catch (e) {}
                try{ objtmp1.style.display = "none"; } catch (e) {}
            }
		}
		catch (e) {}
	}
	
	//final del if que solo lo ejecuta cuando sea crear osea registro express
	//analiza lo campos emails
	for ( contador = 0; contador < arrayElementosEmailRevG.length ; contador++) 
    {
	    try
	    {
	        nomTmp = arrayElementosEmailRevG[contador];//"razon";
	        try{ objtmp = document.getElementById(nomTmp); } catch (e) {}
            try{ objtmp1 = document.getElementById(nomTmp+nexoFinal); } catch (e) {}
            try{ objtmp2 = document.getElementById(nomTmp+nexoFinal+"1"); } catch (e) {}
            //alert(" QUIEN SABE "+nomTmp+" = "+objtmp.value);
            if(!validarEmail(objtmp.value) || trim1(objtmp.value) == "")
            {
                try{ objtmp.style.backgroundColor = colorerrorG; } catch (e) {}
                try{ objtmp1.style.display = "block"; } catch (e) {}
                try{ objtmp2.style.display = "none"; } catch (e) {}
                datosFaltantes += nomTmp + " - ";
                saleError = true;
            }
            else 
            {
                try{ objtmp2.style.display = "block"; } catch (e) {}
                try{ objtmp.style.backgroundColor = colorbienG;  } catch (e) {}
                try{ objtmp1.style.display = "none"; } catch (e) {}
            }
		}
		catch (e) {}
	}
	
	for ( contador = 0; contador < arrayElementosCheckBoxRevG.length ; contador++) 
    {
	    try
	    {
	        //nomTmp = "checkcondiciones";//"razon";
            nomTmp = arrayElementosCheckBoxRevG[contador];//"razon";
            try{ objtmp = document.getElementById(nomTmp); } catch (e) {}
            try{ objtmp1 = document.getElementById(nomTmp+nexoFinal); } catch (e) {}
            try{ objtmp2 = document.getElementById(nomTmp+nexoFinal+"1"); } catch (e) {}
            //alert(" QUIEN SABE "+nomTmp+" = "+objtmp.value);
            if(!objtmp.checked)
            {
                try{ objtmp.style.backgroundColor = colorerrorG; } catch (e) {}
                try{ objtmp1.style.display = "block"; } catch (e) {}
                try{ objtmp2.style.display = "none"; } catch (e) {}
                datosFaltantes += nomTmp + " - ";
                saleError = true;
            }
            else 
            {
                try{ objtmp2.style.display = "block"; } catch (e) {}
                try{ objtmp.style.backgroundColor = colorbienG;  } catch (e) {}
                try{ objtmp1.style.display = "none"; } catch (e) {}
            }
		}
		catch (e) {}
	 }
	   
    if(saleError) return false; 
    else return true;
    
    
//    objtmp = document.getElementById('emailcontacto');
//    if(!validarEmail(objtmp.value) && trim1(objtmp.value) == "") {objtmp.style.backgroundColor = colorerror;return false; }
//    else {objtmp.style.backgroundColor = colorbien; }
//    objtmp = document.getElementById('email');
//    if(!validarEmail(objtmp.value) && trim1(objtmp.value) == "") {objtmp.style.backgroundColor = colorerror;return false; }
//    else {objtmp.style.backgroundColor = colorbien; }
    
    return true;
}



