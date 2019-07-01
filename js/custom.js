var width = $(window).width();

/* ----------------------------------------------------------- */
/*  Navbar scolling functions
/* ----------------------------------------------------------- */
$(window).on('scroll', function(){
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		$(".navbar").addClass('navbar-scroll').fadeIn('slow');
		$(".navbar-brand").addClass('navbar-img-scroll').fadeIn('slow');
	}else{
		$(".navbar").removeClass('navbar-scroll').fadeIn('slow');
		$(".navbar-brand").removeClass('navbar-img-scroll').fadeIn('slow');
	}
});


$(document).ready(function(){

	/* ----------------------------------------------------------- */
	/*  Home page navbar link click scrolling functions
	/* ----------------------------------------------------------- */
	$("#navlink-cfp").on('click', function(e) {
		e.preventDefault();
		if (width >= 1000) {
			$('html, body').animate({
				scrollTop: $("#call-for-paper-sec").offset().top="1755px"
			},1000);
		}
	});
	$("#navlink-pc").on('click', function(e) {
		e.preventDefault();
		if (width >= 1000) {
			$('html, body').animate({
				scrollTop: $("#call-for-paper-sec").offset().top="2285px"
			},1000);
		}
	});
	$("#navlink-g").on('click', function(e) {
		e.preventDefault();
		if (width >= 1000) {
			$('html, body').animate({
				scrollTop: $("#call-for-paper-sec").offset().top="3020px"
			},1000);
		}
	});


	/* ----------------------------------------------------------- */
	/*  Gallery popup
	/* ----------------------------------------------------------- */
  	if (width <= 750) {
  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"190"});
  	}else if((width > 750)&&(width <= 1024)){
  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"400"});
  	}else{
  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"950", innerHeight:"535"});
  	}

});
