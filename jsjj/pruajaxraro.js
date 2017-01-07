function lamarajaxraro()
{
    var dato1sql = document.getElementById("dato1sql").value;
    alert('http://192.168.1.96/prujohnserver/default2.aspx?dato1=' + dato1sql);
    $.ajax({
        async: false,
        type: 'GET',
        //url: 'http://192.168.1.96/precompi/pru.asmx/prubd',
        url: 'http://192.168.1.96/prujohnserver/default2.aspx?dato1=' + dato1sql,
        data: "",
        //            data: "{'dato1':'" + "john" + "'}",
        //dataType: "text",
        crossDomain: true,
        //contentType: 'application/json; utf-8',
        dataType: 'jsonp',
        //data: data,
        success: function (data) {
            //if (data.d != null) {
            alert(data);
            //}
            document.getElementById("div1").innerHTML = data;///hasta aqui se que sirve
            var valini = data.indexOf("--");
            var valfin = data.indexOf("--", valini + 2);
            var res = data.substring(valini + 2, valfin);
            alert(valini + "    " + valfin + "    " + res);
            document.getElementById("div391").innerHTML = res;///hasta aqui se que sirve
            $("#div1").html = data;
            var html = [];
            /* parse JSON */
            data = $.parseJSON(data);
            /* loop through array */
            $.each(data, function (index, d) {
                html.push("Manufacturer : ", d.Manufacturer, ", ",
                          "Sold : ", d.Sold, ", ",
                          "Month : ", d.Month, "<br>");
            });

            $("#div391").html(html.join('')).css("background-color", "orange");//pone el mensaje en el div y lo mustra

        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("error" + " 1 " + jqXHR + " 2 " + textStatus + " 2 " + errorThrown);
        }

    });
}
function pruposso()
{
    var dato1sql = document.getElementById("dato1sql").value;
	var urltmp = 'localhost/test-ajax.php?d1=ho&d2=' + dato1sql;
    alert(urltmp);
    $.ajax({
        async: true,
        type: 'GET',
        //url: 'http://192.168.1.96/precompi/pru.asmx/prubd',
        url: urltmp,
        data: {"d1" : "ho", "d2" : "00"},
        //            data: "{'dato1':'" + "john" + "'}",
        //dataType: "text",
        //crossDomain: true,
        //contentType: 'application/json; utf-8',
        //dataType: 'json',
        //data: data,
        success: function (data) {
            //if (data.d != null) {
            alert(data);
            //}
            document.getElementById("div1").innerHTML = data;///hasta aqui se que sirve
            
            //$("#div391").html(html.join('')).css("background-color", "orange");//pone el mensaje en el div y lo mustra
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("error" + " 1 " + jqXHR + " 2 " + textStatus + " 2 " + errorThrown);
        }

    });
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



