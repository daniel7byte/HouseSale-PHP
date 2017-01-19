var constanteBusqueda= 21;

$(document).ready(function () {
  size_li = $("#articles .contador").length;
  x=constanteBusqueda;
  if(size_li <= constanteBusqueda){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
  $('#articles .contador:lt('+x+')').show();
});

function resetPagination() {
  size_li = $("#articles .contador").length;
  x=constanteBusqueda;
  if(size_li <= constanteBusqueda){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
  $('#articles .contador:lt('+x+')').show();
}

function loadMore() {
  x= (x+constanteBusqueda <= size_li) ? x+constanteBusqueda : size_li;
  $('#articles .contador:lt('+x+')').show();
  if(x == size_li){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
}
