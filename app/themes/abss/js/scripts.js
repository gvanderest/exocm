/** 
 * General Scripts
 */

$(function(){
	// disable parent menu clicks if they have a submenu
	$('#navtop > ul > li > a').each(function(){
		// if there is a list sibling, don't allow clicks
		if ($(this).siblings('ul').length > 0)
		{
			$(this).css({ cursor: 'default' });
			$(this).click(function(e){
				e.preventDefault();
			});
		}
	});

	// fancybox any gallery images
	$('.CMS_Tag_Gallery .images a').fancybox();
});
