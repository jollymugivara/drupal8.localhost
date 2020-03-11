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

function activateLinks() {

  const header_home = document.getElementById('first'),
    header_about = document.getElementById('second'),
    header_services = document.getElementById('third'),
    header_contact = document.getElementById('fourth');


  let section_home = document.getElementById('home');
  let section_about = document.getElementById('about');
  let section_contact = document.getElementById('footer');
  let section_services = document.getElementById('services');
  home_top = section_home.offsetTop + 100;
  about_top = section_about.offsetTop + 700
  services_top = section_services.offsetTop + 1500;
  contact_top = section_contact.offsetTop + 2400;


  let position = window.scrollY || document.documentElement.scrollTop;
  position += 50;
  if (position) {
    if (position <= home_top) {
      header_home.classList.add('active');
	    header_home.classList.add('white');
		 header_about.classList.add('white');
		header_contact.classList.add('white');
	  header_services.classList.add('white');
      header_about.classList.remove('active');
      header_services.classList.remove('active');
      header_contact.classList.remove('active');
	   } else if ((position > about_top) && (position <= services_top)) {
      header_about.classList.add('active');
	  header_about.classList.remove('white');
	  header_home.classList.remove('white');
	  header_contact.classList.remove('white');
	  header_services.classList.remove('white');
      header_home.classList.remove('active');
	  header_services.classList.remove('active');
    } else if ((position > services_top) && (position <= contact_top)) {
      header_services.classList.add('active');
      header_about.classList.remove('active');
	  header_contact.classList.remove('active');
	  header_about.classList.remove('white');
	  header_home.classList.remove('white');
	  header_contact.classList.remove('white');
	  header_services.classList.remove('white');
    } else if ((position > contact_top)) {
      header_contact.classList.add('active');
      header_services.classList.remove('active');
	   header_about.classList.add('white');
	  header_home.classList.add('white');
	  header_contact.classList.add('white');
	  header_services.classList.add('white');
    }
  }
}

