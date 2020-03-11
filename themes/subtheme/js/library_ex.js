(function ($) {

  $(this).on('scroll', function () {

    $(window).bind('scroll', function(){
      activateLinks();
    })});

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

function activateLinks() {

  const header_home = document.getElementById('first'),
    header_about = document.getElementById('second'),
    header_services = document.getElementById('third'),
    header_contact = document.getElementById('fourth');


  let section_home = document.getElementById('home');
  let section_contact = document.getElementById('footer');
  let section_services = document.getElementById('services');
  home_top = section_home.offsetTop + 100;
  services_top = section_services.offsetTop - 100;
  contact_top = section_contact.offsetTop + 2000;


  let position = window.scrollY || document.documentElement.scrollTop;
  position += 50;
  if (position) {
    if (position <= home_top) {
      header_home.classList.add('active');
      header_services.classList.remove('active');
      header_services.classList.remove('active');
      header_contact.classList.remove('active');
    } else if ((position > services_top) && (position <= contact_top)) {
     //code
    } else if ((position > contact_top)) {
      header_contact.classList.add('active');
      header_home.classList.remove('active');
    }
  }
}
