//----------------------------------------------------
// 
// SEARCH DETAIL -物件詳細JS-
// (search.detail.js)
//
// ----------------------------------------------------


// 01.ポップアップウィンドウ
// ----------------------------------------------------

$(document).ready(function(){
$(".popup01").colorbox({rel:'popup01', width:"75%", height:"75%"});
$(".popup02").colorbox({rel:'popup02', width:"75%", height:"75%"});
});


// 02.物件画像スライド
// ----------------------------------------------------

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails",
    itemWidth: 524
  });
});
