<?php
/**
* Hide WP Ultimo meta box on admin dashboard
*
* INSTRUCTION:
* This code will remove WP Ultimo meta boxes from end-user's admin dashboard.
* Each line represents one metabox. Just remove the line for the metabox you wish to display.
*
*/

add_action('admin_head', function() {
  remove_meta_box('wp-ultimo-change-plan', 'wu-my-account', 'normal');
  remove_meta_box('wp-ultimo-status', 'wu-my-account', 'normal');
  remove_meta_box('wp-ultimo-actions', 'wu-my-account', 'normal');
  remove_meta_box('wu-mb-billing-history', 'wu-my-account', 'side');
}, 30);
