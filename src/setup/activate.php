<?php

namespace andyp\labs\cpt\pulse\setup;

class activate
{

    public function __construct()
    {
        register_activation_hook( ANDYP_LABS_CPT_PULSE_PLUGIN_FILE, [$this, 'flush_post_types'] );
    }

    public function flush_post_types() {

        $pulse = new \andyp\labs\cpt\pulse\initialise;
        $pulse->setup_cpt();
        $pulse->register_cpt();
        $pulse->run_cpt();

        global $wp_rewrite;
        $wp_rewrite->flush_rules();
    }

}