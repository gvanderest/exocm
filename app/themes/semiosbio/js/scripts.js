/**
 * SemiosBIO Scripts
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

$(function(){
	// homepage banners
	$('#home-banner a').html('').after('<div class="bar"></div>');
	$('#home-banner .bar').fadeTo(0, 0);
	$('#home-banner-semios-guard .bar').css({ left: '-50%' });
	$('#home-banner-semios-guard a').hover(function(){
		$(this).siblings('.bar').stop(true, true).animate({ opacity: 1, left: 0 }, 'fast');
	}, function(){
		$(this).siblings('.bar').stop(true, true).animate({ opacity: 0, left: '-50%' }, 'fast');
	});
	$('#home-banner-semios-net .bar').css({ left: '100%' });
	$('#home-banner-semios-net a').hover(function(){
		$(this).siblings('.bar').stop(true, true).animate({ opacity: 1, left: '50%' }, 'fast');
	}, function(){
		$(this).siblings('.bar').stop(true, true).animate({ opacity: 0, left: '100%' }, 'fast');
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
