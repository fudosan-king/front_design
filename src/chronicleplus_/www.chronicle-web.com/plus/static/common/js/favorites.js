(function($) {
  // お気に入り
  FAVORITE_ESTATES_KEY = 'favorite_estates';

  function load_favorite_estates() {
    var cookie = document.cookie.split(';');
    var rv = [];

    for(var i = 0;i < cookie.length;i++) {
      var token = cookie[i].split('=');

      if(token[0].replace(/^\s+|\s+$/g, '') == FAVORITE_ESTATES_KEY) {
        if(token[1] !== '')
          rv = token[1].split(',');

        var j = rv.indexOf('');
        if(j != -1) {
          rv.splice(j, 1);
        }
      }
    }
    return rv;
  }

  function save_favorite_estates(favorite_estates) {
    var MAX_FAVORITE_ESTATES = 500;
    var cookieExpirationPeriod = 30 * 24 * 60 * 60 * 1000;
    var expirationDate = new Date();
    expirationDate.setTime(expirationDate.getTime() + cookieExpirationPeriod);

    while(favorite_estates.length > MAX_FAVORITE_ESTATES)
      favorite_estates.shift();

    document.cookie = FAVORITE_ESTATES_KEY + '=' + favorite_estates.join(',') + '; path=/; expires=' + expirationDate.toGMTString();
  }

  $(function() {
    var favorites = load_favorite_estates();
    $('[data-action="favorite"]').each(function() {
      var $this = $(this);
      var estate_id = $this.data('estate_id');

      $this.addClass(favorites.indexOf(estate_id) == -1 ? 'inactive' : 'active');
    });
    $('body').on('click', '[data-action="favorite"]', function(e) {
      var $this = $(this);
      var isOn = $this.is('.active');
      var estate_id = $this.data('estate_id');
      var pos = favorites.indexOf(estate_id);

      e.preventDefault();

      if(isOn) {
        // offにする
        $this.addClass('inactive').removeClass('active');
        if(pos != -1)
          favorites.splice(pos, 1);
      } else {
        // onnにする
        $this.addClass('active').removeClass('inactive');
        if(pos == -1)
          favorites.push(estate_id);
      }

      save_favorite_estates(favorites);
    });
  });
})(jQuery);
