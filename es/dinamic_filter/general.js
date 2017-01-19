function changeListing(page) {
  var searchForm = $('#searchForm');
  searchForm.attr("action", page);
  searchForm.submit();
}

function setForm(id, zipcode,county, city, price, systemFiltro){
  let searchForm = $("#searchForm")
  let form__county = $("select#county", searchForm)
  let form__city = $("select#city", searchForm)
  let form__price = $("select#price", searchForm)
  let form__systemFiltro = $("select#systemFiltro", searchForm)

  $("input#zipcode", searchForm).val(zipcode)
  $("input#id", searchForm).val(id)

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

  // Recorrer cada price range del formulario.
  for(i=0; i < $("option", form__price).length; i++) {
  // Si el valor de una price range coincide, colocarle el atributo selected
    if($("option", form__price)[i].value == price) {
      $("option", form__price)[i].setAttribute("selected", "selected")
    }
  }

  // Recorrer cada systemFiltro del formulario.
  for(i=0; i < $("option", form__systemFiltro).length; i++) {
  // Si el valor de una systemFiltro coincide, colocarle el atributo selected
    if($("option", form__systemFiltro)[i].value == systemFiltro) {
      $("option", form__systemFiltro)[i].setAttribute("selected", "selected")
    }
  }

}

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
  var price = $('select#price', searchForm).val();
  var systemFiltro = $('select#systemFiltro', searchForm).val();
  var id = $('input#id', searchForm).val();

  $('.contador > .properties > .properties__thumb > a').each(function (index) {
    var cadena = $(this).attr( "href" );
    $(this).attr( "href", cadena + '&formZipcode='+zipcode+'&formCounty='+county+'&formCity='+city+'&formPrice='+price+'&formSystemFiltro='+systemFiltro+'&formId='+id);
  });

  $('.contador > .properties > .properties__details > .properties__info > a').each(function (index) {
    var cadena = $(this).attr( "href" );
    $(this).attr( "href", cadena + '&formZipcode='+zipcode+'&formCounty='+county+'&formCity='+city+'&formPrice='+price+'&formSystemFiltro='+systemFiltro+'&formId='+id);
  });


  if(tipoListing == 'list'){

    $('.contador > .properties > .properties__details > a').each(function (index) {
      var cadena = $(this).attr( "href" );
      $(this).attr( "href", cadena + '&formZipcode='+zipcode+'&formCounty='+county+'&formCity='+city+'&formPrice='+price+'&formSystemFiltro='+systemFiltro+'&formId='+id);
    });

  }
}