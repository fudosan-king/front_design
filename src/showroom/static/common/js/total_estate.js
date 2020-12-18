$(function(){
  $( "select" ).change(function () {
    update_total();
    $('.modal').modal('show');
  });
  $( "input" ).change(function () {
    update_total();
    $('.modal').modal('show');
  });

  function update_total(){
    $.ajax({
      url: '/api/search/total',
      type: 'post',
      data: $('#search-form').serialize(),
      success: function(data) {
        $('.modal').modal('hide');
        $('.badge').text(data.estate_total + ' 件の物件が見つかりました。');
      },
      error: function(data) {
        $('.modal').modal('hide');
        $('.badge').text('0 件の物件が見つかりました。');
      }
    });
  }
});