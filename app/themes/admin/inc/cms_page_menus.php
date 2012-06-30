<script>
// toggle display of a menu_page
function cms_check_menus_active()
{
	// for each active checkbox
	$('.CMS_MenuPageSelector .active input').each(function(){
		var fields = $(this).parents('h3').siblings('.field');
		if (!$(this).is(':checked'))
		{
			fields.hide();
		} else {
			fields.fadeIn();
		}
	});
}

cms_check_menus_active();
$('.CMS_MenuPageSelector .active input').click(function(){
	cms_check_menus_active();
});

// when leaving the title box, if the slug and menu page titles are empty, fill them
$('#form_title').blur(function(){

	var title = $(this).val();

	var $slug = $('#form_slug');
	if ($slug.val() == '')
	{
		$slug.val(title.trim().replace(/[^a-z0-9]+/gi,'-').toLowerCase());
	}
});
</script>

