/**
 * Add user role on sign up
 */

add_action('wp_ultimo_registration', function($site_id, $user_id) {

    switch_to_blog($site_id);
    
    $curr_user = get_user_by('id', $user_id);
    $curr_user->add_role('author');

    restore_current_blog();

}, 10, 2);
