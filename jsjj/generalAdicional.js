function OcultarParaImagen(nombreObjeto,elemento)
{
    //"http://beta.outlet.com.co/"
    //alert(nombreObjeto);
    //sector que guarda el ultimo objeto guardado
    nombreUltimoMenuClikeado = nombreObjeto;
    linkImagenUltimoMenu = elemento;
    nombreObjeto = "ocultar";
    
    var arrayVisores;
    arrayVisores = document.getElementsByName(nombreObjeto);
    var i;
    i=0;
    for (i=0;i<arrayVisores.length;i++)
    {
    arrayVisores[i].style.display = "none";
    }   
}
function MostrarParaImagen(nombreObjeto,elemento)
{
    //"http://beta.outlet.com.co/"
    //alert(nombreObjeto);
    //sector que guarda el ultimo objeto guardado
    nombreUltimoMenuClikeado = nombreObjeto;
    linkImagenUltimoMenu = elemento;
    nombreObjeto = "ocultar";
    
    var arrayVisores;
    arrayVisores = document.getElementsByName(nombreObjeto);
    var i;
    i=0;
    for (i=0;i<arrayVisores.length;i++)
    {
    arrayVisores[i].style.display = "block";
    }   
}



