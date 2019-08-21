
/**
 * Hide WP Ultimo meta box on admin dashboard
 */

add_action('admin_head', function() {

  remove_meta_box('wp-ultimo-change-plan', 'wu-my-account', 'normal');
  remove_meta_box('wp-ultimo-status', 'wu-my-account', 'normal');
  remove_meta_box('wp-ultimo-actions', 'wu-my-account', 'normal');
  remove_meta_box('wu-mb-billing-history', 'wu-my-account', 'side');

}, 30);
