<?php
   /*
   Plugin Name: Jetpack Photon Quaity Fix
   Plugin URI: https://theadidkhan.com/jpqf
   Description: A plugin that fix the quality reduction by Photon
   Version: 1.0
   Author: The Adid Khan Groups
   Author URI: https://theadidkhan.com
   License: GPL2
   */
add_filter('jetpack_photon_pre_args', 'jetpackme_custom_photon_compression' );
function jetpackme_custom_photon_compression( $args ) {
    $args['quality'] = 80;
    $args['strip'] = 'all';
    return $args;
}   
?>