$(document).ready(function() {

	WebFontConfig = {
		google: { 
			families: [
			'Open+Sans:300i,400,500,600,700,800'
			]
		}
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();


	$('.why_prices .price_block table tbody tr td').hover(function() {
		var current = $(this);
		var current_index = current.index()+1;
		$('.why_prices .price_block table tbody tr td:nth-child('+current_index+')').toggleClass('hover');
	});

	$('header nav ul li a').click(function(e) {
		e.preventDefault();
		var target = $(this).attr('href');
		var targetOffset = $(target).offset().top -70 ;
		$('body,html').animate({ scrollTop: targetOffset },1000);
		$('header nav').removeClass('active');
	});

	$('.fancybox').fancybox();

	$('.modal_open').click(function(e) {

		e.preventDefault();

		var target = $(this).attr('data-target');
		console.log(target);

		$.fancybox.open('#modal' , {
			beforeShow: function() {

				$('#modal #formsended').val(target);
			}
		} );
	});

	$('.faq_open').click(function(e) {

		e.preventDefault();

		var target = $(this).attr('data-target');
		console.log(target);

		$.fancybox.open('#modal2' , {
			beforeShow: function() {

				$('#modal2 #formsended2').val(target);
			}
		} );
	});

	$('a.logo').click(function(e) {
		e.preventDefault();
		$('body,html').animate({ scrollTop: 0 },1000);
	});

	if (window.matchMedia("(min-width: 1100px)").matches) {
		new WOW().init();
	}

	$('a.menu_button').click(function(e) {
		e.preventDefault();
		$('header nav').toggleClass('active');
	});

	// $('form').submit(function(e) {
	// 	e.preventDefault();
	// 	var msg  = $(this).serialize();

	// 	$.ajax({
	// 		type: 'GET',
	// 		url: 'thankyou.php',
	// 		data:  msg,
	// 		success: function(data) {
	// 			$.fancybox.open('#success');           
	// 		},
	// 		error:  function(xhr, str){
	// 			$.fancybox.open('#notsended');
	// 		}
	// 	});

	// 	return false;
	// });


});


$(window).scroll(function() {

	if (window.matchMedia("(min-width: 1020px)").matches) {

		var wst = $(window).scrollTop();
		var hh = $('header .top_header .inside').outerHeight();

		if ( wst >= hh ) {
			$('header').addClass('fixed');
			$('.page_wrap').addClass('fixed');
		}
		else {
			$('header').removeClass('fixed');
			$('.page_wrap').removeClass('fixed');
		}

	}

});


// era custom
document.querySelectorAll('#scroll-button').forEach(function(button){
	addEventListener('click', function() {
		document.getElementById('target-podrobnee').scrollIntoView({ behavior: 'smooth' });
		history.pushState(null, '', window.location.pathname); 
	})
});

window.addEventListener('load', function() {
	if (window.location.hash) {
		history.replaceState(null, '', window.location.pathname);
	}
});