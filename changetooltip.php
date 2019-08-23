<?php
/**
* Change tool tip on WP Ultimo sign up fields
*
* INSTRUCTION:
* Choose a filter below depending on which field you want to add or replace the tooltip. 
*
* Filters
* Site URL field = wu_signup_site_url_tooltip 
* Site Title field = wu_signup_site_title_tooltip
* Username field = wu_signup_username_tooltip
* Email field = wu_signup_email_tooltip
* Password field = wu_signup_password_tooltip
* Password confirm field = wu_signup_password_conf_tooltip
*
* The example code below will replce the tooltip for the site title and site URL fields.
*/

add_filter('wu_signup_site_title_tooltip', function() {
	  return "your site title tooltip here";
 });

add_filter('wu_signup_site_url_tooltip', function() {
	  return "your site URL tooltip here";
 });
