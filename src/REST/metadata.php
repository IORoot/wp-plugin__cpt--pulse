<?php

namespace andyp\labs\cpt\pulse\REST;

/**
 * Return Metadata on post request to 
 * https://dev.pulse.londonparkour.com/wp-json/wp/v2/pulse
 */
class metadata
{
    public function __construct()
    {

        add_action( 'rest_api_init', function () {
            register_rest_field( 'pulse', 'channelId', array(
                'get_callback' => function( $post_arr ) {
                    return get_post_meta( $post_arr['id'], 'channelId', true );
                },
            ) );
        } );
        

    }
}