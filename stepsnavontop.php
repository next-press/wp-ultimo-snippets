/**
*  Move steps navigation to top of the page
*
* INSTRUCTIONS:
* This code will simply more the steps navigation bar from the bottom ot the page to the top.
* You can use the code as is. No changes needed.
*/

add_action('admin_print_footer_scripts', 'steps_ultimo_top', 10);
function steps_ultimo_top() { ?>
<script>
	(function($) {
		$(document).ready(function(){
			var steps = $(".wu-setup-steps");
			$(steps).insertAfter("#wu-setup-logo");
		});
	})(jQuery)
</script>
< ?php
}
