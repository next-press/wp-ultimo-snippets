/**
 * Change tool tip on WP Ultimo sign up fields
 */

add_filter('wu_signup_site_title_tooltip', function() {
	  return "your site title tooltip here";
 });

add_filter('wu_signup_site_url_tooltip', function() {
	  return "your site URL tooltip here";
 });
