<?php

/**
 * Adds a custom currency to the list of available currencies on WP Ultimo
 */
add_filter('wu_currencies', function($currencies) {

  $extra = array(
    'OMR' => __('Omani Rial', 'wp-ultimo'),
  );

  return array_merge($extra, $currencies);

});
