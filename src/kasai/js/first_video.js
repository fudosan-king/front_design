$(function () {
var webStorage = function(){
   $(".over").css("opacity", "0");
   $(".over").css("display", "none");
   $(window).on("load", function () {
   });
   sessionStorage.setItem("access", 0);
}

webStorage();
});
