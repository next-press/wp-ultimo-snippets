<?php
/**
 * Adds Google Tag Manager code to Ultimo's signup.
 *
 * This can also be used to insert other JavaScript integration snippets.
 *
 * INSTRUCTION :
 * Simply place your Google Tag Manager code between <!-- MAIN GTM CODE BELOW THIS LINE --> and <!-- END GTM CODE --> 
 * which you can find in line 24.
 *
 * @author Arindo Duque - NextPress
 * @since 0.0.1
 *
 */

/**
 * Adds the main GTM code to the header.
 *
 * @return void
 */
function wu_add_gtm_code() { ?>

<!-- MAIN GTM CODE BELOW THIS LINE -->

<!-- END GTM CODE -->

<?php } // end wu_add_gtm_code;

add_action('signup_header', 'wu_add_gtm_code');

/**
 * Adds GTM code after the body tag.
 *
 * @return void
 */
function wu_add_gtm_body_code() { ?>

<!-- GTM AFTER BODY CODE BELOW THIS LINE -->

<!-- END GTM CODE -->

<?php } // end wu_add_gtm_body_code;

add_action('wu_signup_header', 'wu_add_gtm_body_code');
