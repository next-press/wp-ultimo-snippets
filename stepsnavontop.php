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
<?php
}
