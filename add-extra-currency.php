<?php

/**
 * Adds a custom currency to the list of available currencies on WP Ultimo
 * 
 * INSTRUCTION:
 * Change the value to variable $extra (found in line 13) to whichever currency you would like to add.
 *
 */
add_filter('wu_currencies', function($currencies) {

  $extra = array(
    'OMR' => __('Omani Rial', 'wp-ultimo'),
  );

  return array_merge($extra, $currencies);

});
