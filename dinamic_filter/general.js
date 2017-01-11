function changeListing(page) {
  var searchForm = $('#searchForm');
  searchForm.attr("action", page);
  searchForm.submit();
}
