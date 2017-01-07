//v1.0
var AjaxEnginePage;
var ClientInfoPage;
var XMLHTTP;
var XMLHTTP_Implicado;
var XMLHTTP_Direccion;
var veriXMLHTTP = 0;
var idObjeto = "dataContents";
var idObjetoTmp = "dataContentsTmp";
var idVitrina1 = "idVitrina1";
var idVitrina2 = "idVitrina2";
var idVitrina3 = "idVitrina3";
var fotoTienda1 = "fotoTienda1";
var fotoTienda2 = "fotoTienda2";
var fotoTienda3 = "fotoTienda3";
var infoTienda1 = "infoTienda1";
var infoTienda2 = "infoTienda2";
var infoTienda3 = "infoTienda3";
var idVitrinaGrande = "idVitrinaGrande";
var nomDivPonerTmp;

var resultadoGeneral = "";
var totalImagenes = "0";
var numImagenActual = "0";
 
//AjaxEnginePage = "AjaxEngine.aspx";  // "http://192.168.1.96/prujohn/" +
//AjaxEnginePage = "pru.asmx";
AjaxEnginePage = "webservice.asmx";
ClientInfoPage = "getClientInfo.aspx";

var requestTimer;

function ExtraerXML(cadenaXML,elementoXML)
{
    var elemento = "";
	var endpos = 0;
	
	//elementoXML=elementoXML.toUpperCase();
	var ini_label = "<" + elementoXML;
	var end_label = "</" + elementoXML;
 
 	var startpos = cadenaXML.indexOf(ini_label);
	if (startpos != -1) {
	    startpos += elementoXML.length;
		startpos += 2;
		var endpos = cadenaXML.indexOf(end_label);
		elemento = cadenaXML.substring(startpos,endpos);
	}
	return elemento;
}

function CreateXMLHTTP()
{
	try
	{
		XMLHTTP = new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(e)
	{
		try
		{
			XMLHTTP = new ActiveXObject("Microsoft.XMLHTTP");
		} 
		catch(oc)
		{
			XMLHTTP = null;
		}
	}
	//Creating object in Mozilla and Safari 
	if(!XMLHTTP && typeof XMLHttpRequest != "undefined") 
	{
		XMLHTTP = new XMLHttpRequest();
	}
	return XMLHTTP;
}

///dev aquii siguen las funciones
//paginaFuncEjec es la pagina  a la que se llamara la funcion con el ajax
//funcionejec es la funcion a ejecutar en el server
// arraynomdatos los ids de los diferentes objetos que tienen los datos necesarios ,
// arrayid son los ids que se le colocaran a los objetos regresados
//y arrayOrdendiv nombre de los divs donde va cada uno de los objetos devueltos
var arrayidsT;
var arrayOrdendivT;
var arrayEventosT;

function btnPedirObjetoAjax_OnClick(paginaFuncEjec,funcEjec,arraynomdatos,arrayid,arrayOrdendiv,arrayEventos,dato1,dato2) 
{
    //esta parte tomara los nombres de los objetos y sacara los datos para entregarlo a la funcion ajax
    var separador = ',';
    var separadorBueno = '_';
    var arraydatostmp = arraynomdatos.split(separador);
    arrayidsT = arrayid.split(separador);
    arrayOrdendivT = arrayOrdendiv.split(separador);
    arrayEventosT = arrayEventos.split(separador);
    var datos;
    var nTmp = 0;
	var paginafunciones =  'funciones-ajax-inmo.php';
	if (paginaFuncEjec!='') paginafunciones =  paginaFuncEjec;
    
    datos = "";
    for(i=0;i<arraydatostmp.length;i++)
    {
        //alert(arraydatostmp[i]);
        //esta funcion busca el id que se la da y devuelve el valor q tiene
        //estas dos son para los droplist de ciudad y zona , ..  en las busquedas
        if(funcEjec=="CrearObjeto" || funcEjec=="CrearObjetoN" ) 
        {
            nTmp = 1;
            if(nTmp != 0 && i<nTmp) datos += encodeURIComponent(getatributoobjetoid(arraydatostmp[i],""))+separador;
            else datos += "1"+separador;
        }
        else if(funcEjec=="CrearObjeto1" || funcEjec=="CrearObjetoN1" ) 
        {
            nTmp = 2;
            if(nTmp != 0 && i<nTmp) datos += encodeURIComponent(getatributoobjetoid(arraydatostmp[i],""))+separador;
            else datos += "1"+separador;
        }
        else 
        {
            datos += getatributoobjetoid(arraydatostmp[i],"")+separadorBueno;
            //datos += encodeURIComponent(getatributoobjetoid(arraydatostmp[i],""))+separadorBueno;
        }
        
    }   
        var requestUrl = paginafunciones + "?Action="+funcEjec
	+"&arraydatos="+ datos + dato1 + separador + dato2
	+"&obj="+ arrayid
	+"&divobj="+ arrayOrdendiv
	;
	//.com/AjaxEnginePage.aspx?obj1=a1,a2,a3,a4&divobj1=divponer
	//alert(requestUrl);
	//nomDivPonerTmp = divponer;	
	
	CreateXMLHTTP();
	
	// If browser supports XMLHTTPRequest object
	if(XMLHTTP)
	{veriXMLHTTP=1;
		//Setting the event handler for the response
		XMLHTTP.onreadystatechange = MostrarObjetosAjax;
		//alert(requestUrl);
		//Initializes the request object with GET (METHOD of posting), 
		//Request URL and sets the request as asynchronous.

	    XMLHTTP.open("GET", requestUrl, true);
		//XMLHTTP.open("POST", requestUrl, true);

		// Handle timeout situation, e.g. Retry or inform user.
		requestTimer = setTimeout(function() { XMLHTTP.abort();  }, 100000);
		
		//Sends the request to server
		XMLHTTP.send(null);		
	}
}
function MostrarObjetosAjax()
{
    var resultTmp;
    var nomDPzona = arrayOrdendivT[0];//"divzonasucu";//nomdivponer;
    // To make sure receiving response data from server is completed
	//try { document.getElementById(nomDPzona).innerHTML=document.getElementById(nomDPzona).innerHTML+"<img src='../images/ajaxRed.gif'> Leyendo Informacion..."; }
	try { document.getElementById(nomDPzona).innerHTML=document.getElementById(nomDPzona).innerHTML+".z"; }
	catch(e) {}
	
	//ESTE ES EL QUE MOLESTA TODO EL TIEMPO ASI QUE SI ALGO MIRAR POR QUE 
    try { resultadoGeneral = XMLHTTP.responseText; }
    catch(e) {}
    
    //alert(ExtraerXML(XMLHTTP.responseText,"cantidad"));
	if(XMLHTTP.readyState == 4)
	{
	    //Valid Response is received
		if(XMLHTTP.status == 200)
		{
		    try
		    {
		    clearTimeout(requestTimer);
		    for(i=0;i<arrayOrdendivT.length;i++)
		    {
		        try {///para ver lo del webservice o para probar directamente lo que me devuelven	
		            //alert("ya casi pone "+XMLHTTP.responseText);
		            document.getElementById("prueba").innerHTML = XMLHTTP.responseText;
		            document.getElementById("resp3").value = XMLHTTP.responseText;

		        }
		        catch (e) { }
		        try
		        {
		        resultTmp = ExtraerXML(XMLHTTP.responseText,"obj"+i);
		        //try{ resultTmp = resultTmp.replace("@@valor4_Esp@#",arrayEventosT[i]);}
		        //catch(e){ resultTmp = resultTmp.replace("@@valor4_Esp@#",""); }
		        //alert(" el nombre div es " + nomDPzona);
		        //template.replace(/%nn%/gi,contreci.toString());//    /microsoft/gi
				//alert(arrayOrdendivT[i]+" pri "+resultTmp);
				var cambio = 0;
				if(document.getElementById(arrayOrdendivT[i]).innerHTML ){
				 cambio = 1;
				 //alert("parece q existe innerhtml");
		         document.getElementById(arrayOrdendivT[i]).innerHTML = resultTmp;
				}
				else {//alert("parece q existe value");
				 document.getElementById(arrayOrdendivT[i]).value = resultTmp;
				}
		        }
		        catch (e) {
		        
				}
		        
		    }
		    //esto ejecutara algunas ordenes
		    i=0;
		    for(i=0;i<5;i++)
		    {
		        try
		        {
		        resultTmp = ExtraerXML(XMLHTTP.responseText,"ejecu"+i);
		        //try{ resultTmp = resultTmp.replace("@@valor4_Esp@#",arrayEventosT[i]);}
		        //catch(e){ resultTmp = resultTmp.replace("@@valor4_Esp@#",""); }
		        //alert(" el nombre div es " + nomDPzona);
		        //template.replace(/%nn%/gi,contreci.toString());//    /microsoft/gi
		        //alert(" tratara la eje "+i);
		        ejecutarjs( resultTmp );
		        }
		        catch (e) {}
		        
		        
		    }
		    		    	        
		    }
		    catch(e) {}
		    
		    veriXMLHTTP = 0;
	 
		}
		else //something is wrong 
		{
		    try
		    {
		    
			nomDPzona = ExtraerXML(XMLHTTP.responseText,"nomdivponer");	
		    document.getElementById(nomDPzona).innerHTML=document.getElementById(nomDPzona).innerHTML+"Error Status = " + XMLHTTP.status ;
		    return;
			}
		    catch(e) {}
		    
		    //veriXMLHTTP = 0;
		}	
	}
	else
	{
		//try{ document.getElementById(nomDPzona).innerHTML=document.getElementById(nomDPzona).innerHTML+"Cargando...<img src='../images/ajaxRed.gif'>"; }
		try{ document.getElementById(nomDPzona).innerHTML=document.getElementById(nomDPzona).innerHTML+"..n"; }
		catch (e) {}
		return;
		//veriXMLHTTP = 0;
	}
}

///hasta aqui va la funcion configurable de ajax


var XMLHTTP1;
var XMLHTTP1_Implicado;
var XMLHTTP1_Direccion;

function CreateXMLHTTP1()
{
	try
	{
		XMLHTTP1 = new ActiveXObject("Msxml2.XMLHTTP");
		alert("se creeeooooo 1");
	}
	catch(e)
	{
		try
		{
			XMLHTTP1 = new ActiveXObject("Microsoft.XMLHTTP");
			alert("se creeeooooo 2");
		} 
		catch(oc)
		{
			XMLHTTP1 = null;
			alert("no se pudo crear");
		}
	}
	//Creating object in Mozilla and Safari 
	if(!XMLHTTP1 && typeof XMLHTTPRequest != "undefined") 
	{
		XMLHTTP1 = new XMLHTTPRequest();
		alert("se creeeooooo 3");
	}
	return XMLHTTP1;
}


var arrayidsT1;
var arrayOrdendivT1;
var arrayEventosT1;

function btnPedirObjetoAjax_OnClick1(paginaFuncEjec,funcEjec,arraynomdatos,arrayid,arrayOrdendiv,arrayEventos,dato1,dato2) 
{
    //esta parte tomara los nombres de los objetos y sacara los datos para entregarlo a la funcion ajax
    var separador = ',';
    var arraydatostmp = arraynomdatos.split(separador);
    arrayidsT1 = arrayid.split(separador);
    arrayOrdendivT1 = arrayOrdendiv.split(separador);
    arrayEventosT1 = arrayEventos.split(separador);
    var datos;
    var nTmp = 0;
    
    //var Id_Estado = encodeURIComponent(document.getElementById("txtID_Estado").value);
	
    
    datos = "";
    for(i=0;i<arraydatostmp.length;i++)
    {
        //alert(arraydatostmp[i]);
        //esta funcion busca el id que se la da y devuelve el valor q tiene
        //estas dos son para los droplist de ciudad y zona , ..  en las busquedas
        if(funcEjec=="CrearObjeto" || funcEjec=="CrearObjetoN" ) 
        {
            nTmp = 1;
            if(nTmp != 0 && i<nTmp) datos += encodeURIComponent(getatributoobjetoid(arraydatostmp[i],""))+separador;
            else datos += "1"+separador;
        }
        else if(funcEjec=="CrearObjeto1" || funcEjec=="CrearObjetoN1" ) 
        {
            nTmp = 2;
            if(nTmp != 0 && i<nTmp) datos += encodeURIComponent(getatributoobjetoid(arraydatostmp[i],""))+separador;
            else datos += "1"+separador;
        }
        else 
        {
            datos += encodeURIComponent(getatributoobjetoid(arraydatostmp[i],""))+separador;
        }
        
    }
    
    //revisa a ver si lo que se esta guardando es el evento de la zona  o la ciudad y la manda a la cokie
//    if(funcEjec=="CrearObjeto")
//    {
        //alert(" cokie ciu zona bar "+datos+" la funcion es "+funcEjec);
        if(funcEjec=="CrearObjeto" || funcEjec=="CrearObjetoN" || funcEjec=="CrearObjeto1" || funcEjec=="CrearObjetoN1" )
            IntroducirCookieG("datoCiudad",datos,31);
//    }
    
//    for(i=0;i<arrayOrdendivT1.length;i++)
//		    {
//		        try
//		        {
//		        alert(arrayidsT1.length + " ids--" + arrayOrdendiv.length+" el nombre div es " + arrayOrdendivT1[i]+" de "+arrayOrdendiv);
//		        }
//		        catch (e) {}
//		    }
    
    var requestUrl =  AjaxEnginePage  + "?Action="+funcEjec
	+"&arraydatos="+ datos + dato1 + separador + dato2
	+"&obj="+ arrayid
	+"&divobj="+ arrayOrdendiv
	;	
	//.com/AjaxEnginePage.aspx?obj1=a1,a2,a3,a4&divobj1=divponer
	//alert(requestUrl);
	//nomDivPonerTmp = divponer;	
	
	CreateXMLHTTP1();
	
	// If browser supports XMLHTTPRequest object
	if(XMLHTTP1)
	{
		//Setting the event handler for the response
		XMLHTTP1.onreadystatechange = MostrarObjetosAjax1;
		
		//Initializes the request object with GET (METHOD of posting), 
		//Request URL and sets the request as asynchronous.
		XMLHTTP1.open("GET", requestUrl,  true);
		
		//Sends the request to server
		XMLHTTP1.send(null);		
	}
}
function MostrarObjetosAjax1()
{
    var resultTmp;
    var nomDPzona = arrayOrdendivT1[0];//"divzonasucu";//nomdivponer;
    // To make sure receiving response data from server is completed
	try { document.getElementById(nomDPzona).innerHTML="<img src='../images/ajaxRed.gif'> Leyendo Informacion..."; }
	catch(e) {}
    resultadoGeneral = XMLHTTP1.responseText;
    //alert(ExtraerXML(XMLHTTP1.responseText,"cantidad"));
	if(XMLHTTP1.readyState == 4)
	{
	    //Valid Response is received
		if(XMLHTTP1.status == 200)
		{
		    try
		    {
		    for(i=0;i<arrayOrdendivT1.length;i++)
		    {
		        try
		        {
		        resultTmp = ExtraerXML(XMLHTTP1.responseText,"obj"+i);
		        //try{ resultTmp = resultTmp.replace("@@valor4_Esp@#",arrayEventosT1[i]);}
		        //catch(e){ resultTmp = resultTmp.replace("@@valor4_Esp@#",""); }
		        //alert(" el nombre div es " + nomDPzona);
		        //template.replace(/%nn%/gi,contreci.toString());//    /microsoft/gi
		        document.getElementById(arrayOrdendivT1[i]).innerHTML = resultTmp;
		        }
		        catch (e) {}
		        try
		        {
		        resultTmp = ExtraerXML(XMLHTTP1.responseText,"obj"+i);
		        //try{ resultTmp = resultTmp.replace("@@valor4_Esp@#",arrayEventosT1[i]);}
		        //catch(e){ resultTmp = resultTmp.replace("@@valor4_Esp@#",""); }
		        //alert(" el nombre div es " + nomDPzona);
		        //template.replace(/%nn%/gi,contreci.toString());//    /microsoft/gi
		        document.getElementById(arrayOrdendivT1[i]).value = resultTmp;
		        }
		        catch (e) {}
		    }
		    		    	        
		    }
		    catch(e) {}
	 
		}
		else //something is wrong 
		{
		    try
		    {
			nomDPzona = ExtraerXML(XMLHTTP1.responseText,"nomdivponer");	
		    document.getElementById(nomDPzona).innerHTML="Error Status = " + XMLHTTP1.status ;
			}
		    catch(e) {}
		}	
	}
	else
	{
		try{ document.getElementById(nomDPzona).innerHTML="Mirando...<img src='../images/ajaxRed.gif'>"; }
		catch (e) {}
	}
}



//hasta el intento por crear un objeto dos sobre todo para el chat



function btnCrearZonaDPAjax_OnClick(nomciu,nomId,nomcss,divponer,nomdlciu,nomdivbarrio,IdNombreBarrio) 
{
	
	var requestUrl =  AjaxEnginePage  + "?Action=CrearDPZona"//&Id_Estado="+ Id_Estado
	+"&ciudad="+ nomciu//document.getElementById(nomciu).value
	+"&nomId="+ nomId
	+"&nomcss="+ nomcss
	+"&divponer="+ divponer
	+"&nomdlciu="+ nomdlciu
	+"&nomdivbarrio="+ nomdivbarrio
	+"&IdNombreBarrio="+ IdNombreBarrio;	
	
	nomDivPonerTmp = divponer;
	
	CreateXMLHTTP();
	
	// If browser supports XMLHTTPRequest object
	if(XMLHTTP)
	{
		//Setting the event handler for the response
		XMLHTTP.onreadystatechange = MostrarZonaDP;
		
		//Initializes the request object with GET (METHOD of posting), 
		//Request URL and sets the request as asynchronous.
		XMLHTTP.open("GET", requestUrl,  true);
		
		//Sends the request to server
		XMLHTTP.send(null);		
	}
	
}
function MostrarZonaDP()
{
    var nomDPzona = nomDivPonerTmp;//"divzonasucu";//nomdivponer;
    // To make sure receiving response data from server is completed
	try { document.getElementById(nomDPzona).innerHTML="<img src='../images/ajaxRed.gif'> Leyendo Informacion..."; }
	catch(e) {}
    resultadoGeneral = XMLHTTP.responseText;
    //alert(ExtraerXML(XMLHTTP.responseText,"cantidad"));
	if(XMLHTTP.readyState == 4)
	{
	    //Valid Response is received
		if(XMLHTTP.status == 200)
		{
		    try
		    {
		    nomDPzona = ExtraerXML(XMLHTTP.responseText,"nomdivponer");	
		    //alert(" el nombre div es " + nomDPzona);
		    document.getElementById(nomDPzona).innerHTML = ExtraerXML(XMLHTTP.responseText,"dpzona");		    	        
		    }
		    catch(e) {}
	 
		}
		else //something is wrong 
		{
		    try
		    {
			nomDPzona = ExtraerXML(XMLHTTP.responseText,"nomdivponer");	
		    document.getElementById(nomDPzona).innerHTML="Error Status = " + XMLHTTP.status ;
			}
		    catch(e) {}
		}	
	}
	else
	{
		try{ document.getElementById(nomDPzona).innerHTML="Cargando...<img src='../images/ajaxRed.gif'>"; }
		catch (e) {}
	}
}
function btnCrearBarrioDPAjax_OnClick(nomciu,nomzona,nomId,nomcss,divponer) 
{	
	var requestUrl =  AjaxEnginePage  + "?Action=CrearDPBarrio"//&Id_Estado="+ Id_Estado
	+"&ciudad="+ nomciu//document.getElementById(nomciu).value
	+"&zona="+ nomzona//document.getElementById(nomzona).value
	+"&nomId="+ nomId
	+"&nomcss="+ nomcss
	+"&divponer="+ divponer;
	
	nomDivPonerTmp = divponer;
	
	CreateXMLHTTP();
	
	// If browser supports XMLHTTPRequest object
	if(XMLHTTP)
	{
		//Setting the event handler for the response
		XMLHTTP.onreadystatechange = MostrarBarrioDP;
		
		//Initializes the request object with GET (METHOD of posting), 
		//Request URL and sets the request as asynchronous.
		XMLHTTP.open("GET", requestUrl,  true);
		
		//Sends the request to server
		XMLHTTP.send(null);		
	}
	
}
function MostrarBarrioDP()
{
    var nomDPzona = nomDivPonerTmp;//"divbarriosucu";//nomdivponer;
    // To make sure receiving response data from server is completed
	try { document.getElementById(nomDPzona).innerHTML="<img src='../images/ajaxRed.gif'> Leyendo Informacion...";}
	catch (e) {}
    resultadoGeneral = XMLHTTP.responseText;
    //alert(ExtraerXML(XMLHTTP.responseText,"cantidad"));
	if(XMLHTTP.readyState == 4)
	{
	    //Valid Response is received
		if(XMLHTTP.status == 200)
		{
		    try
		    {
		    nomDPzona = ExtraerXML(XMLHTTP.responseText,"nomdivponer");	
		    document.getElementById(nomDPzona).innerHTML = ExtraerXML(XMLHTTP.responseText,"dpzona");		    	        
		    }
		    catch(e) {}
	 
		}
		else //something is wrong 
		{
		    try
		    {
			nomDPzona = ExtraerXML(XMLHTTP.responseText,"nomdivponer");	
		    document.getElementById(nomDPzona).innerHTML="Error Status = " + XMLHTTP.status ;
			}
		    catch(e) {}
		}	
	}
	else
	{
		try{ document.getElementById(nomDPzona).innerHTML="Cargando...<img src='../images/ajaxRed.gif'>";}
		catch (e) {}
	}
}






function btnAjax_OnClick() 
{
	//var Id_Estado = encodeURIComponent(document.getElementById("txtID_Estado").value);
	//var Nombre_Estado = encodeURIComponent(document.getElementById("txtNombre_Estado").value);
    //var Descripcion = encodeURIComponent(document.getElementById("txtDescripcion").value);

	// construct the URL 
	//var requestUrl ="../"+ AjaxEnginePage  + "?Action=MostrarVitrinaDefault&Id_Estado="+ Id_Estado
	var requestUrl =  AjaxEnginePage  + "?Action=MostrarVitrinaDefault";//&Id_Estado="+ Id_Estado
	//+"&Nombre_Estado="+ Nombre_Estado
	//+"&Descripcion="+ Descripcion;
	
	CreateXMLHTTP();
	
	// If browser supports XMLHTTPRequest object
	if(XMLHTTP)
	{
		//Setting the event handler for the response
		XMLHTTP.onreadystatechange = MostrarVitrinaDefault;
		
		//Initializes the request object with GET (METHOD of posting), 
		//Request URL and sets the request as asynchronous.
		XMLHTTP.open("GET", requestUrl,  true);
		
		//Sends the request to server
		XMLHTTP.send(null);		
	}
	
}

function MostrarVitrinaDefault()
{
	// To make sure receiving response data from server is completed
	document.getElementById(idObjeto).innerHTML="<img src='../images/ajaxRed.gif'> Leyendo Informacion...";
    resultadoGeneral = XMLHTTP.responseText;
    //alert(ExtraerXML(XMLHTTP.responseText,"cantidad"));
	if(XMLHTTP.readyState == 4)
	{
		//Valid Response is received
		if(XMLHTTP.status == 200)
		{		
			//EWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV4
				        if(XMLHTTP.responseText.indexOf('WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV4')!=-1)
								{
								document.getElementById(idObjeto).innerHTML= ExtraerXML(XMLHTTP.responseText,"WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV4");
						        if(XMLHTTP.responseText.indexOf('WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV5')!=-1)
								    {
								        GenerarVentanaExcel(ExtraerXML(XMLHTTP.responseText,"WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV5"));
								    }
								if(XMLHTTP.responseText.indexOf('WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV1')!=-1)
								    {
								        document.getElementById("TiempoCarga").innerHTML="Generado en " + ExtraerXML(XMLHTTP.responseText,"WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV1") + " Segundos.";
								    }    
								}
								else
								{
                                    resultadoGeneral = XMLHTTP.responseText;
                                    //alert(ExtraerXML(XMLHTTP.responseText,"cantidad"));
                                    /*int cc;
                                    cc = parseInt(ExtraerXML(XMLHTTP.responseText,"cantidad"));
                                    alert(cc);
                                    cc++;
                                    alert(cc);
                                    //numImagenActual = XMLHTTP.responseText;
                                    */
	 		                        document.getElementById(idObjeto).innerHTML=XMLHTTP.responseText;
	 		                        document.getElementById(idObjetoTmp).innerHTML=XMLHTTP.responseText;
                                    //var randomnumber=Math.floor(Math.random()*6);
                                    //alert(randomnumber);
                                    document.getElementById(idVitrinaGrande).innerHTML=document.getElementById(idVitrina1).innerHTML=ExtraerXML(XMLHTTP.responseText,"1")+"ImgProducto0.png";
                                    document.getElementById(idVitrina2).innerHTML=ExtraerXML(XMLHTTP.responseText,"3")+"ImgProducto0.png";
                                    document.getElementById(idVitrina3).innerHTML=ExtraerXML(XMLHTTP.responseText,"4")+"ImgProducto0.png";
                                    //document.getElementById(idVitrinaGrande).innerHTML=ExtraerXML(XMLHTTP.responseText,"1")+"ImgProducto0.png";
                                    
	 		                    }
			//document.getElementById(idObjeto).innerHTML="Listo!...";
	 
		}
		else //something is wrong 
		{
			document.getElementById(idObjeto).innerHTML="Error Status = " + XMLHTTP.status ;
		}	
	}
	else
	{
		document.getElementById(idObjeto).innerHTML="Cargando...<img src='../images/ajaxRed.gif'>";
	}
}


//este es para crear una cotizacion del cotizador de seguros

function btnCotizarAjax_OnClick() 
{
    var separador = ',';
    
	
	var requestUrl =  "Cotizador.aspx"  + "?Action=cotizacion"//&Id_Estado="+ Id_Estado
	+"&datos="+ document.getElementById("fecha").value + separador +
	document.getElementById("vehiculo").value + separador +
	document.getElementById("marca").value + separador +
	document.getElementById("TemplaDDLAtenuante1").value + separador +
	document.getElementById("TemplaDDLAtenuante2").value + separador +
	document.getElementById("TemplaDDLAtenuante3").value + separador 
	;	
	
	nomDivPonerTmp = divponer;
	
	CreateXMLHTTP();
	
	// If browser supports XMLHTTPRequest object
	if(XMLHTTP)
	{
		//Setting the event handler for the response
		XMLHTTP.onreadystatechange = MostrarCotizacionDP;
		
		//Initializes the request object with GET (METHOD of posting), 
		//Request URL and sets the request as asynchronous.
		XMLHTTP.open("GET", requestUrl,  true);
		
		//Sends the request to server
		XMLHTTP.send(null);		
	}
	
}
function MostrarCotizacionDP()
{
    var nomDPzona = nomDivPonerTmp;//"divzonasucu";//nomdivponer;
    // To make sure receiving response data from server is completed
	try { document.getElementById(nomDPzona).innerHTML="<img src='../images/ajaxRed.gif'> Leyendo Informacion..."; }
	catch(e) {}
    resultadoGeneral = XMLHTTP.responseText;
    //alert(ExtraerXML(XMLHTTP.responseText,"cantidad"));
	if(XMLHTTP.readyState == 4)
	{
	    //Valid Response is received
		if(XMLHTTP.status == 200)
		{
		    try
		    {
		    nomDPzona = ExtraerXML(XMLHTTP.responseText,"respuestacoti");	
		    //alert(" el nombre div es " + nomDPzona);
		    document.getElementById("divrespuesta").innerHTML = nomDPzona;		    	        
		    }
		    catch(e) {}
	 
		}
		else //something is wrong 
		{
		    try
		    {
			nomDPzona = ExtraerXML(XMLHTTP.responseText,"respuestacoti");	
		    document.getElementById("divrespuesta").innerHTML="Error Status = " + XMLHTTP.status ;
			}
		    catch(e) {}
		}	
	}
	else
	{
		try{ document.getElementById("divrespuesta").innerHTML="Cargando...<img src='../images/ajaxRed.gif'>"; }
		catch (e) {}
	}
}





/*


//CON ESTE JS SE HACE LA PETICION DE RESPUESTA CON AJAX AL SERVER

function btnActualizar_Estados_OnClick() 
{
	//
	var Id_Estado = encodeURIComponent(document.getElementById("txtID_Estado").value);
	var Nombre_Estado = encodeURIComponent(document.getElementById("txtNombre_Estado").value);
    var Descripcion = encodeURIComponent(document.getElementById("txtDescripcion").value);

	// construct the URL 
	var submitOK="true";
       if (Nombre_Estado.length<2)
         {
         alert("Debe ingresar Nombre del Estado");
         submitOK="false";
         }
   if   (submitOK=="true")
   {
	var requestUrl ="../"+ AjaxEnginePage  + "?Action=Actualizar_Estados&Id_Estado="+ Id_Estado
	+"&Nombre_Estado="+ Nombre_Estado
	+"&Descripcion="+ Descripcion;
	
	CreateXMLHTTP();
	
	// If browser supports XMLHTTPRequest object
	if(XMLHTTP)
	{
		//Setting the event handler for the response
		XMLHTTP.onreadystatechange = ShowSuccessMsg;
		
		//Initializes the request object with GET (METHOD of posting), 
		//Request URL and sets the request as asynchronous.
		XMLHTTP.open("GET", requestUrl,  true);
		
		//Sends the request to server
		XMLHTTP.send(null);		
	}
	}
}



//EJEMPLOS DE COMO SE RECIBE LOS DATOS DEVUELTOS EN AJAX POR EL SERVIDOR EL AJAX EL CODIGO BEHIND ESTA MAS ABAJO

function MostraLista()
{
	// To make sure receiving response data from server is completed
	document.getElementById(idObjeto).innerHTML="<img src='../images/ajaxRed.gif'> Leyendo Informacion...";

	if(XMLHTTP.readyState == 4)
	{
		//Valid Response is received
		if(XMLHTTP.status == 200)
		{		
			//EWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV4
				        if(XMLHTTP.responseText.indexOf('WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV4')!=-1)
								{
								document.getElementById(idObjeto).innerHTML= ExtraerXML(XMLHTTP.responseText,"WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV4");
						        if(XMLHTTP.responseText.indexOf('WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV5')!=-1)
								    {
								        GenerarVentanaExcel(ExtraerXML(XMLHTTP.responseText,"WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV5"));
								    }
								if(XMLHTTP.responseText.indexOf('WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV1')!=-1)
								    {
								        document.getElementById("TiempoCarga").innerHTML="Generado en " + ExtraerXML(XMLHTTP.responseText,"WEWKWLA8IKBAGKVY47LBWKETNFJDQKU8TNLCWKP46YDDALV1") + " Segundos.";
								    }    
								}
								else
								{
	 		                        document.getElementById(idObjeto).innerHTML=XMLHTTP.responseText;
	 		                    }
			//document.getElementById(idObjeto).innerHTML="Listo!...";
	 
		}
		else //something is wrong 
		{
			document.getElementById(idObjeto).innerHTML="Error Status = " + XMLHTTP.status ;
		}	
	}
	else
	{
		document.getElementById(idObjeto).innerHTML="Cargando...<img src='../images/ajaxRed.gif'>";
	}
}
function MostraLista_Usos()
{
	// To make sure receiving response data from server is completed
	if(document.getElementById("formato_Respuesta").value=="tabla")
	    document.getElementById(idObjeto).innerHTML="<img src='../images/ajaxRed.gif'> Leyendo Informacion...";

	if(XMLHTTP.readyState == 4)
	{
		//Valid Response is received
		if(XMLHTTP.status == 200)
		{		
			//alert(XMLHTTP.responseText);
			if(document.getElementById("formato_Respuesta").value=="tabla")
			{
			    document.getElementById(idObjeto).innerHTML="Listo!...";
			    document.getElementById(idObjeto).innerHTML=XMLHTTP.responseText;
			    document.getElementById("tools_Bar").innerHTML="<a href='#' id='btnPrint'><img src='../images/print.gif' /></a>";
			    document.getElementById("btnPrint").href="javascript:window.open('frm_Busca_Usos_PDF.aspx" + "?ano=" + document.getElementById("anoUso").value + "&"+ document.getElementById("OpcionesCampos").value + "=" + document.getElementById("Campo").value + "','Resultado','toolbar=no,location=no,menubar=no,resizable=yes,width=600,height=440');window.location='frm_Busca_Usos.aspx'";
			}
			else
			{
			    document.getElementById('formato_Respuesta').value='tabla'
			    window.open('http://localhost/Gobierno_Extras/RPT_Usos_PDF.asp?cadenaXML=' + XMLHTTP.responseText,'Formato_Usos','menubar=0, location=0, status=1, scrollbars=1, resize=1, width=800, height=600');
			}
		}
		else //something is wrong 
		{
			document.getElementById(idObjeto).innerHTML="Error Status = " + XMLHTTP.status ;
		}	
	}
	else if(document.getElementById("formato_Respuesta").value=="tabla")
	{
		document.getElementById(idObjeto).innerHTML="Cargando...<img src='../images/ajaxRed.gif'>";
	}
}



//AQUI ESTA EL CODIGO QUE IRIA EN EL BEHIND osea en el archivo .cs que corre en el server

if (Request["Action"] != null && Request["Action"].Trim() != "")
            {
                if (Request["Action"] == "IdentificarAlc" && (Request["X"] != null && Request["Y"].Trim() != ""))
                    IdentificarAlc(Convert.ToDouble(Request["X"]), Convert.ToDouble(Request["Y"]));
                else if (Request["Action"] == "Login")
                    Login(Request["Login"], Request["Clave"]);
                else if (Request["Action"] == "CambiarClave")
                    CambiarClave(Request["a"], Request["b"], Request["c"]);
                else if (Request["Action"] == "BuscarDireccion" && (Request["Direccion"] != null))
                    BuscarDireccion(Convert.ToString(Request["Direccion"]));
                else if (Request["Action"] == "LongitudxDiametro")
                    Estadistica();
                else if (Request["Action"] == "ActualizarImplicados")
                {
                    if (Request["Id_Implicado"] != null && Request["Id_Implicado"].Trim() != "")
                    {
                        ActualizarImplicados(Convert.ToInt32(Request["Id_Solicitud"]), Convert.ToInt32(Request["Id_Implicado"]), Convert.ToInt32(Request["Identificacion"]), Convert.ToInt32(Request["Id_Tipo_Identificacion"]), Request["Nombre"], Request["Apellidos"], Convert.ToInt32(Request["Genero"]), Convert.ToDateTime(Request["Fecha_Nac"], myCI.DateTimeFormat), Convert.ToInt32(Request["Id_Lugar_Nac"]), Request["Direccion"], Request["Telefono"], Request["Email"], Convert.ToInt32(Request["Id_Lugar_Procedencia"]), Convert.ToDateTime(Request["Fecha_Registro"]), Convert.ToInt32(Request["Id_Usuario_Registro"]), Request["CampoIdImplicado"], Request["CampoNombre"]);
                    }
                    else if (Request["Id_Atiende_Visita"] != null && Request["Id_Atiende_Visita"].Trim() != "")
                    {
                        ActualizarImplicados(((Request["Id_Solicitud"] != null && Request["Id_Solicitud"].Trim() != "") ? Convert.ToInt32(Request["Id_Solicitud"]) : 0), Convert.ToInt32(Request["Id_Atiende_Visita"]), Convert.ToInt32(Request["Identificacion"]), Convert.ToInt32(Request["Id_Tipo_Identificacion"]), Request["Nombre"], Request["Apellidos"], Convert.ToInt32(Request["Genero"]), Convert.ToDateTime(Request["Fecha_Nac"]), Convert.ToInt32(Request["Id_Lugar_Nac"]), Request["Direccion"], Request["Telefono"], Request["Email"], Convert.ToInt32(Request["Id_Lugar_Procedencia"]), Convert.ToDateTime(Request["Fecha_Registro"]), Convert.ToInt32(Request["Id_Usuario_Registro"]), Request["CampoIdImplicado"], Request["CampoNombre"]);
                    }
                    else
                    {
                        //((Request["Identificacion"] != null && Request["Identificacion"].Trim() != "" && Int32.TryParse (Request["Identificacion"]) ) ? Convert.ToInt32(Request["Id_Implicado"]) : 0)
                        ActualizarImplicados(((Request["Id_Solicitud"] != null && Request["Id_Solicitud"].Trim() != "") ? Convert.ToInt32(Request["Id_Solicitud"]) : 0), ((Request["Id_Implicado"] != null && Request["Id_Implicado"].Trim() != "") ? Convert.ToInt32(Request["Id_Implicado"]) : 0), ((Request["Identificacion"] != null && Request["Identificacion"].Trim() != "") ? Convert.ToInt32(Request["Identificacion"]) : 0), Convert.ToInt32(Request["Id_Tipo_Identificacion"]), Request["Nombre"], Request["Apellidos"], Convert.ToInt32(Request["Genero"]), Convert.ToDateTime(Request["Fecha_Nac"], myCI.DateTimeFormat), Convert.ToInt32(Request["Id_Lugar_Nac"]), Request["Direccion"], Request["Telefono"], Request["Email"], Convert.ToInt32(Request["Id_Lugar_Procedencia"]), Convert.ToDateTime(Request["Fecha_Registro"]), Convert.ToInt32(Request["Id_Usuario_Registro"]), Request["CampoIdImplicado"], Request["CampoNombre"]);
                    }
                }

}


        public void Login(String Login, String Clave)
        {
            Global_Renamed objGloblal = new Global_Renamed();
            objGloblal.CadenaDeConexion = "Persist Security Info = true;server=localhost; user id=root; password=nts; database=Conv_Seg_Ciu; pooling=false;";
            System.Text.StringBuilder sb = new System.Text.StringBuilder("");
            //sb.Append("<script language=JavaScript>");
            if (objGloblal.Conectar(Login, Clave))
            {
                Session["Login"] = objGloblal.UsuarioActivo.Login;
                Session["LoginId"] = objGloblal.UsuarioActivo.Id_Usuario;
                Session["user"] = objGloblal.UsuarioActivo.Nombre;
                HttpCookie cookie = Request.Cookies["Preferencias"];
                if (cookie == null)
                {
                    cookie = new HttpCookie("Preferencias");
                }

                cookie["Nombre"] = Login;
                cookie.Expires = DateTime.Now.AddYears(1);
                Response.Cookies.Add(cookie);

                //sb.Append("<script language=JavaScript>");
                sb.Append("var pagina = 'gobierno/inicial.aspx';");
                sb.Append("document.location.href = pagina;");
                //sb.Append("alert('OK');");
                //sb.Append("</script>");
            }
            else
            {
                //sb.Append("<script language=JavaScript>");
                sb.Append("document.getElementById('MensageLogin').innerHTML='");
                sb.Append("<table><tr>");
                sb.Append("<td valign=middle><image src=images/error.png></td>");
                sb.Append("<td valign=middle><font color=red><B>" + objGloblal.Detalles_Ultima_Accion + "</B></font></td>");
                sb.Append("");
                sb.Append("</tr></table>");
                sb.Append("';");

                sb.Append("document.getElementById('Login').value='';");
                sb.Append("document.getElementById('clave').value='';");
                sb.Append("document.getElementById('Login').focus();");
                //sb.Append("</script>");
            }
            //sb.Append("</script>");
            //ClientScript.RegisterStartupScript(Page.GetType(), "Login", sb.ToString());
            Response.AddHeader("pragma", "no-cache");
            Response.CacheControl = "Private";
            Response.Expires = 0;
            //Response.ContentType = "text/html";
            Response.Write(sb.ToString());

        }



*/



