var width = $(window).width();

$(window).on("load", function(){
	if (width <= 768) {
		$("#navlink-cfp1, #navlink-pc1, #navlink-g1").hide();
	}else{
		$("#navlink-cfp1, #navlink-pc1, #navlink-g1").show();
	}
});

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
				scrollTop: $("#call-for-paper-sec").offset().top="1695px"
			},1000);
		}
	});
	$("#navlink-pc").on('click', function(e) {
		e.preventDefault();
		if (width >= 1000) {
			$('html, body').animate({
				scrollTop: $("#call-for-paper-sec").offset().top="2226px"
			},1000);
		}
	});
	$("#navlink-g").on('click', function(e) {
		e.preventDefault();
		if (width >= 1000) {
			$('html, body').animate({
				scrollTop: $("#call-for-paper-sec").offset().top="3166px"
			},1000);
		}
	});


	/* ----------------------------------------------------------- */
	/*  Gallery popup
	/* ----------------------------------------------------------- */
  	if (width <= 750) {
  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"240"});
  	}else if((width > 750)&&(width <= 1024)){
  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"480"});
  	}else{
  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"950", innerHeight:"535"});
  	}

});
