<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Labs - CPT: Pulse ',
        'icon'      => 'flash-circle',
        'color'     => '#E86546',
        'path'      => __FILE__,
    ]);
} );