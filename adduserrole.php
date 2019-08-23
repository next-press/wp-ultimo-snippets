<?php
/**
* Add user role on sign up
*
* INSTRUCTION :
* This example adds a second user role 'Author' to user account upon registration. 
* Note: first role or default user role is what you set under WP Ultimo settings.
*
* To add a different role other than 'Author', you simply just need to change the value of the code found on line 18 for example.
* $curr_user->add_role('editor');
*
*/

add_action('wp_ultimo_registration', function($site_id, $user_id) {

    switch_to_blog($site_id);
    
    $curr_user = get_user_by('id', $user_id);
    $curr_user->add_role('author');

    restore_current_blog();

}, 10, 2);
