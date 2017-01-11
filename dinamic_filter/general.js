function changeListing(page) {
  var searchForm = $('#searchForm');
  searchForm.attr("action", page);
  searchForm.submit();
}

function setForm(id, zipcode,county, city, price, systemFiltro){
  // ESTA FUNCION CARGA LA INFORMACION AL FORMULARIO id=searchForm
}
