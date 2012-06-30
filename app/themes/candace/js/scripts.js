/**
 * Candace Larson Javascript
 * @author Guillaume VanderEst <gui@exodus.io>
 */

$(function(){

	// move menu to the correct left position if the window is resized
	reposition_menu = function()
	{
		var wrapper_width = $('#wrapper').width();
		$('#header').css({ left : (wrapper_width - 960) / 2 });
	}

	$(window).resize(function(){
		reposition_menu();
	});
	reposition_menu();

	// if a menu item is clicked, scroll animate to it
	$('#logo a, #menu a').click(function(e){
		if ($(this).attr('href') == '#') {

			e.preventDefault();
			$.scrollTo(0, 1000);
			document.location.hash = '#';

		} else if ($(this).attr('href').substring(0, 1) == '#') {

			e.preventDefault();
			$.scrollTo('#' + $(this).attr('href'), 1000);
			document.location.hash = $(this).attr('href');
		}
	});

	// homepage carousel
	$('#carousel ul').cycle();

});
