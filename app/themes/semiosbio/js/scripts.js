/**
 * SemiosBIO Scripts
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

$(function(){
	$('#logo').css({ opacity: 0.8 });
	$('#logo').hover(function(){
		$(this).animate({ opacity: 1 }, 'fast');
	}, function(){
		$(this).animate({ opacity: 0.8 }, 'fast');
	});
	//
	// homepage banners
	$('#home-banner a').html('').after('<div class="bar"></div>');
	$('#home-banner .bar').css({ width: 0 }).fadeTo(0, 0);
	$('#home-banner-semios-guard .bar').css({ left: 0 });
	$('#home-banner-semios-net .bar').css({ right: 0 });
	$('#home-banner a').hover(function(){
		$(this).siblings('.bar').stop(true, true).animate({ opacity: 0.8, width: '50%' }, 'fast');
	}, function(){
		$(this).siblings('.bar').stop(true, true).animate({ opacity: 0, width: 0 }, 'fast');
	});

	// resize submenus
	$('#menu ul ul').css({
		overflow: 'hidden',
		position: 'absolute'
	}).slideUp('fast').stop(true, true);
	$('#menu ul ul').each(function(){
		console.log($(this).parents('li').offset().left);
	});
	$('#menu li').hover(function(){
		$(this).stop(true, true);
		$(this).children('ul').stop(true, true).slideDown('fast');
	}, function(){
		$(this).children('ul').stop(true, true).slideUp('fast');
	});
});
