<?php
/**
 * Plugin Name: Upload Filter Switch
 * Plugin URI: https://github.com/gibso/Wordpress-Upload-Filter-Switch
 * Description: This plugin switches the built in wordpress upload filter off.
 * Version: 0.0.1
 * Author: Oliver Görtz
 */

add_filter('map_meta_cap', 'map_unrestricted_upload_filter', 0, 2);

function map_unrestricted_upload_filter($caps, $cap) {
    if ($cap == 'unfiltered_upload') {
        $caps = array();
        $caps[] = $cap;
    }

    return $caps;
}
