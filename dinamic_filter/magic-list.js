$( document ).ready(function() {

  // START FILTER

  $("#county").change(function() {
    $('#zipcode').val('');
    var county = $(this).val();
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
  });

  $("#city").change(function() {
    $('#zipcode').val('');
    var city = $(this).val();
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
  });

  // END FILTER

  // START RESET

  $("#reset").click(function() {
    reset();
  });

  // END RESET

  $("#search").click(function() {

    var id = $('#id').val(),
        zipcode = $('#zipcode').val(),
        county = $('#county').val(),
        city = $('#city').val(),
        systemFiltro = $('#systemFiltro').val(),
        priceMin = $('#price-min').val(),
        priceMax = $('#price-max').val();

    if(county == '-'){
      county = '';
    }

    if(city == '-'){
      city = '';
    }

    search(id, zipcode,county, city, priceMin, priceMax, systemFiltro);

  });

});

function search(id, zipcode,county, city, priceMin, priceMax, systemFiltro){

  $('#noRecords').hide( 1000 );

  $.ajax({
    type: 'GET',
    url: 'dinamic_filter/search-list.php',
    data: {
      id : id,
      zipcode : zipcode,
      county : county,
      city : city,
      systemFiltro : systemFiltro,
      priceMin : priceMin,
      priceMax : priceMax
    },
    beforeSend: function() { $('#loading').show( "slow" ); },
    complete: function() {
      $('#loading').hide( 1000 );
      $('#numRecords').html(number_format($('.contador').size()));
      resetPagination();
      concatenarLinks('list');
    },
    success: function(result){
      if(result != ''){
        $('#articles').html(result);
      }else{
        $('#articles').html('');
        $('#noRecords').show( "slow" );
      }
    }
  });
  if(systemFiltro == "1"){
    strSystem = "FMLS";
  }else if(systemFiltro == "0"){
    strSystem = "GAMLS";
  }else{
    strSystem = "";
  }
  // $('#search-string').html(zipcode + ' + ' + county + ' + ' + city + ' + ' + price + ' + ' + strSystem);
}

function reset() {

  //$("#county").attr("data-placeholder","All");
  //$("#city").attr("data-placeholder","All");

  $('#zipcode').val('');

  $.ajax({
    type: 'GET',
    url: 'dinamic_filter/reset.php',
    data: {
      param1 : 'county'
    },
    success: function(result){
      $('#county').html(result);
    }
  });

  $.ajax({
    type: 'GET',
    url: 'dinamic_filter/reset.php',
    data: {
      param1 : 'city'
    },
    success: function(result){
      $('#city').html(result);
    }
  });
}




function number_format (number, decimals, decPoint, thousandsSep){
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
  var n = !isFinite(+number) ? 0 : +number
  var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
  var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
  var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
  var s = ''
  var toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec)
    return '' + (Math.round(n * k) / k)
            .toFixed(prec)
  }
  // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || ''
    s[1] += new Array(prec - s[1].length + 1).join('0')
  }
  return s.join(dec)
}
