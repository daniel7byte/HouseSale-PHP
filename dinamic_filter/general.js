function changeListing(page) {
  var searchForm = $('#searchForm');
  searchForm.attr("action", page);
  searchForm.submit();
}

function setForm(id, zipcode,county, city, price, systemFiltro){
  let searchForm = $("#searchForm")
  let form__county = $("select#county option", searchForm)
  let form__city = $("select#city option", searchForm)
  let form__price = $("select#price option", searchForm)
  let form__systemFiltro = $("select#systemFiltro option", searchForm)
  
  $("input#zipcode", searchForm).val(zipcode)
  $("input#id", searchForm).val(zipcode)

  // Recorrer cada conty del formulario.
  for(i=0; i < form__county.length; i++) {
  // Si el valor de un county coincide, colocarle el atributo selected
    if($(form__county)[i].value == county) {
      $(form__county)[i].setAttribute("selected","selected")
    }
  }

  // Recorrer cada city del formulario.
  for(i=0; i < form__city.length; i++) {
  // Si el valor de una city coincide, colocarle el atributo selected
    if($(form__city)[i].value == city) {
      $(form__city)[i].setAttribute("selected","selected")
    }
  }

  // Recorrer cada price range del formulario.
  for(i=0; i < form__price.length; i++) {
  // Si el valor de una price range coincide, colocarle el atributo selected
    if($(form__price)[i].value == price) {
      $(form__price)[i].setAttribute("selected","selected")
    }
  }

  // Recorrer cada systemFiltro del formulario.
  for(i=0; i < form__systemFiltro.length; i++) {
  // Si el valor de una systemFiltro coincide, colocarle el atributo selected
    if($(form__systemFiltro)[i].value == systemFiltro) {
      $(form__systemFiltro)[i].setAttribute("selected","selected")
    }
  }
  
}