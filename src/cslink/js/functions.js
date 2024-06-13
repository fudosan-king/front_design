jQuery(document).ready(function ($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href'));
    $('html, body').animate({
      scrollTop: $section.offset().top - 0
    }, 500);
  }
  $('[data-scroll]').on('click', scrollToSection);

}(jQuery));


$(function ($) {
  AOS.init();

  $(document).ready(function () {
    return $(window).scroll(function () {
      return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
    }), $("#back-to-top").click(function () {
      return $("html,body").animate({
        scrollTop: "0"
      })
    })
  })
});

$(".btn_showdetail").on("click", function () {
  $(this).toggle('fast');
  $('.box_detail').show();
  $('.btn_close').show();
  $('.btn_inquiry.btn_inquiry2').hide();
});

$(".btn_close").on("click", function () {
  $(this).toggle('fast');
  $('.btn_showdetail').show();
  $('.box_detail').hide();
  $('.btn_inquiry.btn_inquiry2').show();
});

$(".btn_change").click(function (event) {
  event.preventDefault()
  $("header, .btn_inquiry").css({
    backgroundColor: $("#color").val()
  });

  $(".btn_addlink_theme svg path").css({
    stroke: $("#color").val(),
  });

  $(".standard_article h2 span").css({
    backgroundColor: $("#color").val(),
  });

  $(".btn_addlink_theme").css({
    borderColor: $("#color").val(),
    color: $("#color").val(),
    fill: $("#color").val(),
  });
});

$('.btn_tab').on('click', function (event) {
  event.preventDefault()
  $('.box_tab_content_left').slideToggle();
});

var stickySidebar = $('.box_info');

if (stickySidebar.length > 0) {
  var stickyHeight = stickySidebar.height(),
    sidebarTop = stickySidebar.offset().top;
}

// on scroll move the sidebar
$(window).scroll(function () {
  if (stickySidebar.length > 0) {
    var scrollTop = $(window).scrollTop();

    if (sidebarTop < scrollTop) {
      stickySidebar.css('top', scrollTop - sidebarTop);

      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
        stickyStop = $('.main_right').offset().top + $('.main_right').height();
      if (stickyStop < sidebarBottom) {
        var stopPosition = $('.main_right').height() - stickyHeight;
        stickySidebar.css('top', stopPosition);
      }
    }
    else {
      stickySidebar.css('top', '0');
    }
  }
});

$(window).resize(function () {
  if (stickySidebar.length > 0) {
    stickyHeight = stickySidebar.height();
  }
});


$(".btn_collapse").click(function (event) {
  event.preventDefault()
  $('.nav_addblock').toggleClass('active', 5000);
  $(this).toggleClass('active');
});


$("#options01").click(function (event) {
  event.preventDefault()
  var newBlock = `
                <div class="block_content">
                  <div class="standard_post_main_img">
                      <h3><img src="assets/images/i_collection.svg" alt="collection icon" width="31"> メインイメージ</h3>
                      <ul>
                          <li>
                              <a href="#"><img src="assets/images/uploads/01.jpg" alt="01"></a>
                              <button type="button" class="btn btnClose"></button>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/02.jpg" alt="02"></a>
                              <button type="button" class="btn btnClose"></button>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/03.jpg" alt="03"></a>
                              <button type="button" class="btn btnClose"></button>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/04.jpg" alt="04"></a>
                              <button type="button" class="btn btnClose"></button>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/05.jpg" alt="05"></a>
                              <button type="button" class="btn btnClose"></button>
                          </li>
                          <li>
                              <label class="box_uploads">
                                  <input type="file" class="upload_default">
                                  <p class="upload_custom">
                                      <i>
                                          <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                      </i>
                                      <span>ファイルを選択</span>
                                  </p>
                              </label>
                          </li>
                      </ul>
                  </div>
                  <textarea class="form-control" rows="" cols="" placeholder="例）製品・サービスなどについての説明。"></textarea>
              </div>
            `;
  $("#new_block").append(newBlock);
});