
/**
 * Insert class on WP Ultimo sign up pages for custom styling.
 */
 
add_action('admin_print_footer_scripts', 'registration_steps_insertclass', 10);

function registration_steps_insertclass() { ?>
<script>

(function($) {
$(document).ready(function(){
  $( ".wu-content-plan" ).parents('body').addClass( "wu-body-plan" );
  $( ".wu-content-template" ).parents('body').addClass( "wu-body-template" );
  $( ".wu-content-domain" ).parents('body').addClass( "wu-body-domain" );
  $( ".wu-content-account" ).parents('body').addClass( "wu-body-account" );
});
})(jQuery)
</script>
<?php
}
