//----------------------------------------------------
// 
// ABOUT -about用JS-
// (about.js)
//
// ----------------------------------------------------


// 01.画像スライダー
// ----------------------------------------------------

$(function(){
  $('.boxSlider').bxSlider({
    auto:true,
    speed:1100,
  });
});


// 02.FAQタブメニュー
// ----------------------------------------------------

$(function(){
    $("#boxTabMenu dt").on("click", function() {
        $(this).next().slideToggle('fast');
        $(this).toggleClass("active");
    });
});



