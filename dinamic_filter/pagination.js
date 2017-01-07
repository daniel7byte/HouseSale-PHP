$(document).ready(function () {
  size_li = $("#articles .contador").length;
  x=40;
  if(size_li <= 40){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
  $('#articles .contador:lt('+x+')').show();
});

function resetPagination() {
  size_li = $("#articles .contador").length;
  x=40;
  if(size_li <= 40){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
  $('#articles .contador:lt('+x+')').show();
}

function loadMore() {
  x= (x+40 <= size_li) ? x+40 : size_li;
  $('#articles .contador:lt('+x+')').show();
  if(x == size_li){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
}
