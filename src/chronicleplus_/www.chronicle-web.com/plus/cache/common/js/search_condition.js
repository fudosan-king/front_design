$(function(){
  CONDITION_KEY = 'search_condition';

  function load_condition() {
    var cookie = document.cookie.split(';');
    var rv = [];

    for(var i = 0;i < cookie.length;i++) {
      var token = cookie[i].split('=');

      if(token[0].replace(/^\s+|\s+$/g, '') == CONDITION_KEY) {
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

  function save_condition(condition) {
    var MAX_SEEN_ESTATES = 1;
    var cookieExpirationPeriod = 30 * 24 * 60 * 60 * 1000;
    var expirationDate = new Date();
    expirationDate.setTime(expirationDate.getTime() + cookieExpirationPeriod);
    while(condition.length > MAX_SEEN_ESTATES)
      condition.shift();

    document.cookie = CONDITION_KEY + '=' + condition.join(',') + '; path=/; expires=' + expirationDate.toGMTString();
  }

  function add_condition() {
    var data = $('#search_condition_form').serialize();
    var url_base = $('#url_base').val();
    var seen = load_condition();
    var condition = url_base + '/search_condition?' + data;
    var pos = seen.indexOf(condition);
    if (pos == -1) {
      seen.push(condition);
      save_condition(seen);
    }
  }

  function remove_condition(condition) {
    var seen = load_condition();
    var pos = seen.indexOf(condition);
    if (pos != -1) {
      seen.splice(pos, 1);
      save_condition(seen);
    }
  }

  $('#bottom_searchCondition').on('click', function(e) {
      add_condition();
  });
});

