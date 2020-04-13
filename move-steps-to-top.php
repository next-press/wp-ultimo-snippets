<?php
/**
 * Move steps navigation to top of the page.
 *
 * INSTRUCTIONS:
 * This code will simply move the steps navigation bar from the bottom ot the page to the top.
 * Add this to your wp-content/mu-plugins folder. If that folder doesn't exist, you can simply create it.
 * You can use the code as is. No changes needed.
 */

add_action('admin_print_footer_scripts', 'wu_steps_ultimo_top', 10);

function wu_steps_ultimo_top() { ?>

  <script>
    (function($) {
      $(document).ready(function() {
        var steps = $(".wu-setup-steps");
        $(steps).insertAfter("#wu-setup-logo");
      });
    })(jQuery)
  </script>

	<?php
  
} // end wu_steps_ultimo_top;
