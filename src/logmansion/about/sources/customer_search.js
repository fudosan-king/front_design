$(function(){
  $('.bt-customer-search').click(function (){
    $area_code = $('.area_code').val();
    $search_by = $('.search_by').val();
    $url_base = $('.url_base').val();
    $('#loading').css('display', 'block');
    customer_search($url_base, $area_code, $search_by);
  });
  function customer_search(url_base, area_code, search_by){
    $.ajax({
      url: url_base + '/api/search/' + area_code + '/' + search_by,
      type: 'get',
      data: $('#search-form').serialize(),
      success: function(data) {
        $('#area_group').html(data);
        $('#loading').css('display', 'none');
      },
      error: function(data) {
        console.log("Can't search!");
        $('#loading').css('display', 'none');
      }
    });
  }
});