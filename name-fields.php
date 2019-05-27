<?php

/**
 * We need to hook as soon as we can, to make sure we 
 * modify the steps before they get used
 */
add_action('init', function() {

    /**
     * Now we add the fields
     * The first argument tells the API the step we want to add fields to, in our case, customer-info
     * The type argument tells which type of field we should render, we currently support
     * text, number, password, email, url, html, submit
     */
	wu_add_signup_field('account', 'first_name', 1, array(
		'name'    => 'First Name',
		'tooltip' => "Tooltip text to give the user tips about the field (optional)",
		'type'    => 'text',
	));

	wu_add_signup_field('account', 'last_name', 2, array(
		'name'    => 'Last Name',
		'tooltip' => "Tooltip text to give the user tips about the field (optional)",
		'type'    => 'text',
	));

});
