/* --------------------------------------------------------------------------
*   Cambia la vista de listado que se quiere mostrar 
*  ------------------------------------------------------------------------ */
function changeListing(page) {
  var searchForm = $('#searchForm');
  searchForm.attr("action", page);
  searchForm.submit();
}

/* --------------------------------------------------------------------------
*   Crea un slider de rango para el filtro de precios en el formulario
*  ------------------------------------------------------------------------ */
function createPriceRange(min, max) {
  $('#price-selector').slider({
    min: 1,
    max: 9999999,
    range: true,
    steps: 100000,
    values: [min,max],
    create: function(event, ui) {
        $('.price-from span').text(min);
        $('.price-to span').text(max);
        $('#price-min').val(min);
        $('#price-max').val(max);
    },
    slide: function(event, ui) {
        $('.price-from span').text(ui.values[0]);
        $('.price-to span').text(ui.values[1]);
        $('#price-min').val(ui.values[0]);
        $('#price-max').val(ui.values[1]);
    }
  });
}


/* --------------------------------------------------------------------------
*   Mantiene la información de busqueda del usuario en todas las paginas
*   haciendo que el formulario sea inteligente.
*  ------------------------------------------------------------------------ */
function setForm(id, zipcode, county, city, priceMin, priceMax, systemFiltro){
  let searchForm = $("#searchForm")
  let form__county = $("select#county", searchForm)
  let form__city = $("select#city", searchForm)
  let form__systemFiltro = $("select#systemFiltro", searchForm)

  $("input#zipcode", searchForm).val(zipcode)
  $("input#id", searchForm).val(id)
  $("input#price-min", searchForm).val(priceMin)
  $("input#price-max", searchForm).val(priceMax)

  // Recorrer cada county del formulario.
  for(i=0; i < $("option", form__county).length; i++) {
  // Si el valor de un county coincide, colocarle el atributo selected
    if($("option", form__county)[i].value == county) {
      $(form__county).val($("option", form__county)[i].value)
      if(county != '-'){
        $.ajax({
          type: 'GET',
          url: 'dinamic_filter/county-city.php',
          data: {
            param1 : county
          },
          success: function(result){
            if($('#city').val() == '-'){
              $('#city').html('<option value="-">All</option>');
            }else{
              $('#city').html('<option value="'+$('#city').val()+'" selected>'+$('#city').val()+'</option>');
              $('#city').append('<option value="-">All</option>');
            }
            $('#city').append('<option value="" disabled>---</option>');

            $('#city').append(result);
          }
        });
      }else{
        reset();
      }
    }
  }

  // Recorrer cada city del formulario.
  for(i=0; i < $("option", form__city).length; i++) {
  // Si el valor de una city coincide, colocarle el atributo selected
    if($("option", form__city)[i].value == city) {
      $(form__city).val($("option", form__city)[i].value)
      if(city != '-'){
        $.ajax({
          type: 'GET',
          url: 'dinamic_filter/city-county.php',
          data: {
            param1 : city
          },
          success: function(result){
            if($('#county').val() == '-'){
              $('#county').html('<option value="-">All</option>');
            }else{
              $('#county').html('<option value="'+$('#county').val()+'" selected>'+$('#county').val()+'</option>');
              $('#county').append('<option value="-">All</option>');
            }
            $('#county').append('<option value="" disabled>---</option>');

            $('#county').append(result);
          }
        });
      }else{
        reset();
      }
    }
  }

  // Setear valores de Price Range
  $('.price-from span').text(priceMin);
  $('.price-to span').text(priceMax);
  $('#price-min').val(priceMin);
  $('#price-max').val(priceMax);
  createPriceRange(priceMin, priceMax);

  // Recorrer cada systemFiltro del formulario.
  for(i=0; i < $("option", form__systemFiltro).length; i++) {
  // Si el valor de una systemFiltro coincide, colocarle el atributo selected
    if($("option", form__systemFiltro)[i].value == systemFiltro) {
      $("option", form__systemFiltro)[i].setAttribute("selected", "selected")
    }
  }
}

/* --------------------------------------------------------------------------
*   Crea una cadena de texto con todos los parámetros de busqueda del
*   usuario para ser utilizado en property_details.php
*  ------------------------------------------------------------------------ */
function concatenarLinks(tipoListing) {
  // EN ESTA PARTE SE REGORRERÁN CADA UNO DE LOS <a href=""> DE LA ESTRUCTURA (GRID & GRID_SMALL)
  // Y SE LES CONCATENARÁ LA INFORMACION DEL FORMULARIO (CON SUFIJO form xD).
  // EJ: ...&formZipcode=12345&formCounty=Cobb&formCity=Atlanta&formPrice=75-150&formSystemFiltro=FMLS&formId=654321

  /*
  SELECTORES PARA EL GRID
  $('.contador > .properties > .properties__thumb > a')
  $('.contador > .properties > .properties__details > .properties__info > a')
  */

  /*
  SELECTORES PARA EL LIST
  $('.contador > .properties > .properties__thumb > a')
  $('.contador > .properties > .properties__details > .properties__info > a')
  $('.contador > .properties > .properties__details > a')
  */


  var searchForm = $('#searchForm');
  var zipcode = $('input#zipcode', searchForm).val();
  var county = $('select#county', searchForm).val();
  var city = $('select#city', searchForm).val();
  var priceMin = $('input#price-min', searchForm).val();
  var priceMax = $('input#price-max', searchForm).val();
  var systemFiltro = $('select#systemFiltro', searchForm).val();
  var id = $('input#id', searchForm).val();

  $('.contador > .properties > .properties__thumb > a').each(function (index) {
    var cadena = $(this).attr( "href" );
    $(this).attr( "href", cadena + '&formZipcode='+zipcode+'&formCounty='+county+'&formCity='+city+'&formPriceMin='+priceMin+'&formPriceMax='+priceMax+'&formSystemFiltro='+systemFiltro+'&formId='+id);
  });

  $('.contador > .properties > .properties__details > .properties__info > a').each(function (index) {
    var cadena = $(this).attr( "href" );
    $(this).attr( "href", cadena + '&formZipcode='+zipcode+'&formCounty='+county+'&formCity='+city+'&formPriceMin='+priceMin+'&formPriceMax='+priceMax+'&formSystemFiltro='+systemFiltro+'&formId='+id);
  });


  if(tipoListing == 'list'){

    $('.contador > .properties > .properties__details > a').each(function (index) {
      var cadena = $(this).attr( "href" );
      $(this).attr( "href", cadena + '&formZipcode='+zipcode+'&formCounty='+county+'&formCity='+city+'&formPriceMin='+priceMin+'&formPriceMax='+priceMax+'&formSystemFiltro='+systemFiltro+'&formId='+id);
    });

  }
}
