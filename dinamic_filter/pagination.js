$(document).ready(function () {
  size_li = $("#articles .contador").size();
  x=6;
  if(size_li <= 6){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
  $('#articles .contador:lt('+x+')').show();
});

function resetPagination() {
  size_li = $("#articles .contador").size();
  x=6;
  if(size_li <= 6){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
  $('#articles .contador:lt('+x+')').show();
}

function loadMore() {
  x= (x+6 <= size_li) ? x+6 : size_li;
  $('#articles .contador:lt('+x+')').show();
  if(x == size_li){
    $('#loadMore').hide();
  }else{
    $('#loadMore').show();
  }
}
