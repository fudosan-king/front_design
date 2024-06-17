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


// $(".btn_collapse").click(function (event) {
//   event.preventDefault()
//   $('.nav_addblock').toggleClass('active', 5000);
//   $(this).toggleClass('active');
// });

$(".btn_collapse").click(function (event) {
  event.preventDefault();
  $(".nav_addblock").toggleClass("expanded");

  // Thay đổi biểu tượng của button khi mở rộng hoặc thu hẹp
  let imgSrc = $(".nav_addblock").hasClass("expanded") ? "assets/images/chevron_right.svg" : "assets/images/chevron_right.svg";
  $(this).find("img").attr("src", imgSrc);
});

/* Sự kiện xoá các block */
$(".block_content .btnClose").on("click", (event) => {
  event.preventDefault()
  $('.block_content').hide();
});

$(".block_title .btnClose").on("click", (event) => {
  event.preventDefault()
  $('.block_title').hide();
});

$(".block_box_reverse .btnClose").on("click", (event) => {
  event.preventDefault()
  $('.block_box_reverse').hide();
});

$(".box_material_content .btnClose").on("click", (event) => {
  event.preventDefault();
  $(".box_material_content").hide();
});

$(".block_content .btnClose").on("click", (event) => {
  event.preventDefault();
  $(".block_content").hide();
});

//Thêm 1 option block_title
$("#options0").click(function (event) {
  event.preventDefault()
  var newBlock = `
                <div class="block_title">
                  <h2>
                      <span></span>
                      <input type="text" class="form-control" placeholder="見出し">
                  </h2>
                  <button type="button" class="btn btnClose"></button>
                </div>
              `;
  $("#new_block_title").append(newBlock);

  $('html, body').animate({
    scrollTop: $(document).height() - $(window).height()
  }, 1500);

});


//Thêm 1 option block_content
$("#options01").click(function (event) {
  event.preventDefault()
  var newBlock = `
                <div class="block_content">
                  <div class="standard_post_main_img">
                      <h3><img src="assets/images/i_collection.svg" alt="collection icon" width="31"> メインイメージ</h3>
                      <ul>
                          <li>
                              <a href="#"><img src="assets/images/uploads/01.jpg" alt="01"></a>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/02.jpg" alt="02"></a>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/03.jpg" alt="03"></a>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/04.jpg" alt="04"></a>
                          </li>
                          <li>
                              <a href="#"><img src="assets/images/uploads/05.jpg" alt="05"></a>
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
                  <button type="button" class="btn btnClose"></button>
              </div>
            `;
  $("#new_blockcontent").append(newBlock);

  $('html, body').animate({
    scrollTop: $(document).height() - $(window).height()
  }, 1500);

});


//Thêm 1 option block_box_reverse
$("#options02").click(function (event) {
  event.preventDefault()
  var newBlock = `
                <div class="block_box_reverse">
                  <div class="box_reverse">
                      <div class="text_link">
                          <input class="form-control input_text" type="text" name="" value="" placeholder="リンクに関するテキスト">
                          <div class="box_link">
                              <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                              <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                              <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                          </div>
                      </div>
                      <button class="btn btn_addlink btn_addlink_theme" type="">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g id="plus-circle 1" clip-path="url(#clip0_452_22745)">
                                  <path id="Vector" d="M9.99984 18.3337C14.6022 18.3337 18.3332 14.6027 18.3332 10.0003C18.3332 5.39795 14.6022 1.66699 9.99984 1.66699C5.39746 1.66699 1.6665 5.39795 1.6665 10.0003C1.6665 14.6027 5.39746 18.3337 9.99984 18.3337Z" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Vector_2" d="M10 6.66699V13.3337" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Vector_3" d="M6.6665 10H13.3332" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </g>
                              <defs>
                                  <clipPath id="clip0_452_22745">
                                      <rect width="20" height="20" fill="white"></rect>
                                  </clipPath>
                              </defs>
                          </svg>
                          リンクを追加する
                      </button>
                      <button type="button" class="btn btnClose"></button>
                  </div>
              </div>
            `;
  $("#new_blockboxreverse").append(newBlock);

  $('html, body').animate({
    scrollTop: $(document).height() - $(window).height()
  }, 1500);

});

//Thêm 1 option box_material_content
$("#options03").click(function (event) {
  event.preventDefault()
  var newBlock = `
                <div class="box_material_content">
                  <button type="button" class="btn btnClose"></button>
                  <ul>
                      <li>
                          <label class="box_uploads">
                              <input type="file" class="upload_default">
                              <p class="upload_custom">
                                  <i>
                                      <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                  </i>
                                  <span>資料</span>
                              </p>
                              <button type="button" class="btn btnClose"></button>
                          </label>
                          <p class="or">or</p>
                          <label class="label_url" for="動画のURL">動画のURL</label>
                          <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                          <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                      </li>
                      <li>
                          <label class="box_uploads">
                              <input type="file" class="upload_default">
                              <p class="upload_custom">
                                  <i>
                                      <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                  </i>
                                  <span>資料</span>
                              </p>
                              <button type="button" class="btn btnClose"></button>
                          </label>
                          <p class="or">or</p>
                          <label class="label_url" for="動画のURL">動画のURL</label>
                          <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                          <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                      </li>

                  </ul>
                  <button class="btn btn_addlink btn_addlink_theme" type="">
                      <!-- <img src="assets/images/i_plus_circle.svg" alt="plus circle" width="20"> -->
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="plus-circle 1" clip-path="url(#clip0_452_22745)">
                              <path id="Vector" d="M9.99984 18.3337C14.6022 18.3337 18.3332 14.6027 18.3332 10.0003C18.3332 5.39795 14.6022 1.66699 9.99984 1.66699C5.39746 1.66699 1.6665 5.39795 1.6665 10.0003C1.6665 14.6027 5.39746 18.3337 9.99984 18.3337Z" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path id="Vector_2" d="M10 6.66699V13.3337" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path id="Vector_3" d="M6.6665 10H13.3332" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                          <defs>
                              <clipPath id="clip0_452_22745">
                                  <rect width="20" height="20" fill="white"></rect>
                              </clipPath>
                          </defs>
                      </svg>
                      動画・資料を追加する
                  </button>
              </div>
            `;
  $("#new_boxmaterialcontent").append(newBlock);

  $('html, body').animate({
    scrollTop: $(document).height() - $(window).height()
  }, 1500);

});

var group_zone = document.getElementById('group_zone');

// Example 1 - Simple list
new Sortable(group_zone, {
  animation: 150,
  ghostClass: 'blue-background-class',
  onStart: function (evt) {
    evt.item.classList.add('highlight-background');
  },
  onEnd: function (evt) {
    evt.item.classList.remove('highlight-background');
    // Xoá lớp highlight-dropzone khỏi tất cả các phần tử
    let items = document.querySelectorAll('.highlight-dropzone');
    items.forEach(item => item.classList.remove('highlight-dropzone'));
  },
  onChoose: function (evt) {
    evt.target.classList.add('highlight-dropzone');
  },
  onUnchoose: function (evt) {
    evt.target.classList.remove('highlight-dropzone');
  },
  onChange: function (evt) {
    let items = evt.from.querySelectorAll('.highlight-dropzone');
    items.forEach(item => item.classList.remove('highlight-dropzone'));
    evt.item.classList.add('highlight-dropzone');
  }
});


var nestedSortables = [].slice.call(document.querySelectorAll('.nested-sortable'));
// Loop through each nested sortable element
for (var i = 0; i < nestedSortables.length; i++) {
  new Sortable(nestedSortables[i], {
    group: 'nested',
    animation: 150,
    fallbackOnBody: true,
    swapThreshold: 0.65
  });
}