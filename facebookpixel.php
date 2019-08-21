/**
 * add facebook pixel
 */

add_action('in_admin_footer', function() {

	if (!function_exists('wu_get_current_subscription')) {

		return;

	} // end if;Í

	$sub = wu_get_current_subscription();

	if ($sub) {

		$converted = get_user_meta($sub->user_id, 'wu_converted', true);

		if (!$converted) { ?>

      <!-- PIXEL CODE STARTS AFTER THIS LINE -->

        <!-- PLACE PIXEL CODE HERE -->

      <!-- PIXEL CODE ENDS ABOCE THIS LINE -->

			<?php

			/**
			 * Update the trigger status
			 */
			update_user_meta($sub->user_id, 'wu_converted', 1);

		} // end if;

	} // end if;

});
