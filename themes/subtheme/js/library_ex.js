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
$(window).scroll(function () {
  $(".region-header").each(function (index) {
    let id = $(this).attr("id");
    if ($(this).offset().top - 300 < $(window).scrollTop()) {
      $('.nav-line[href="#' + id + '"]')
        .addClass("active")
        .siblings()
        .removeClass("active");
    }
  });
});
});