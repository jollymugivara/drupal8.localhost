(function ($) {
  $('a[href^="#"]').click(function(){
       var target = $(this).attr('href');
       $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
       return false;
});
})(jQuery);
(function ($) {
$(window).scroll(function() {
if ($(this).scrollTop() > 1){
$('header.navbar').addClass("glide");
}
else{
$('header.navbar').removeClass("glide");
}
});
})(jQuery);

(function ($) {
$(window).scroll(function() {
if ($(this).scrollTop() > 1000){
$('#about').addClass("active").removeClass("active");
}
else{
$('.navbar-header ul li a').removeClass("active");
}
});
})(jQuery);

(function ($) {
$(window).scroll(function () {
  $("#navigation_lines").each(function (index) {
    let id = $(this).attr("id");
    if ($(this).offset().top - 600 < $(window).scrollTop()) {
      switch (index) {
        case 0:
          $(".nav-line").removeClass(
            "white", 1000
          );
          break;
        case 1:
          $(".nav-line").addClass(
            "white", 1000
          );
          break;
        case 2:
          $(".nav-line").addClass(
            "white", 1000
          ); м
          break;
        case 3:
          $(".nav-line").removeClass(
            "white", 1000
          );
          break;
      }
    }
  });
});
})(jQuery);