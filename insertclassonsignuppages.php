<?php
/**
* Insert class on WP Ultimo sign up pages for custom styling.
*
* INSTRUCTIONS:
* Some users prefer to add different stylings or CSS on sign up pages. This code will allow you to insert additional class
* on each pages for you to be able to target specific elements per pages.
*
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
