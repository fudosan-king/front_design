// $(document).ready(function(){

// })

// FGM-G (KN): Read version and set it for all images to renew cache
      $.getJSON('assets/version.json', function (data) {
        var arrImg = $('html').find('img');
        $.each(arrImg, function(index, el) {
          el.src = el.src + '?v=' + data.update_ver;
        });
      });

      window.onload = function () {
        loader_bg = $('#loader-bg');
        loader_bg.fadeOut(800);
    }
