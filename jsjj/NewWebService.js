$(document).ready(function () {

    $('#LlamadaServicio').click(function llammaa() {
        //0071c100l dato prueba sql
        //var dato1sql = $('#dato1sql').value;
        var dato1sql = document.getElementById("dato1sql").value;
		alert('http://192.168.1.96/prujohnserver/default2.aspx?dato1='+dato1sql);
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
                    var valfin = data.indexOf("--",valini+2);
                    var res = data.substring(valini+2, valfin);
                    alert(valini + "    " + valfin + "    " + res);
                    document.getElementById("div391").innerHTML = res;///hasta aqui se que sirve
                    $("#div1").html = data;
                    var html = [];
                /* parse JSON */
                    data = $.parseJSON(data);
                /* loop through array */
                    $.each(data, function(index, d){            
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
    });

    $('#ServicioHora').click(function () {
        $.ajax({
            type: 'POST',
            url: 'http://localhost:3422/WebSite1/pru.asmx/Saludar',
            data: "{}",
            //contentType: 'application/json; utf-8',
            dataType: "text",
            crossDomain: true,
            //dataType: 'json',
            success: function (data) {
                //if (data.d != null) {
                alert(data);//"La hora es: " + data.d.Date + " gracias " + data.d.UserName);
                //}
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("error2");
            }

        });
    });

    $('#ServicioEnviarDatos').click(function () {
        var SendObj = {
            "BrowserName": navigator.appName,
            "BrowserVersion": navigator.appVersion,
            "UserAgent": navigator.userAgent
        }
        var stringData = JSON.stringify(SendObj);
        $.ajax({
            type: 'POST',
            url: 'http://localhost:3422/WebSite1/pru.asmx/prubd',
            data: "{'newClass':" + stringData + "}",
            dataType: "text",
            crossDomain: true,
            //contentType: 'application/json; utf-8',
            //dataType: 'json',
            success: function (data) {               
                if (data.d != null) {
                    alert(data.d);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("error3");
            }

        });
    });

});