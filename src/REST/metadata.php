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

        /**
         * https://wordpress.stackexchange.com/questions/331832/how-to-return-meta-data-from-the-rest-api
         */
        add_action( 'rest_api_init', function () {

            /**
             * Add thesee two fields so that the pulse-stack plugin can grab the data
             * and use it to create the stack on londonparkour.com
             */
            register_rest_field( 'pulse', 'channelTitle', array(
                'get_callback' => function( $post_arr ) {
                    return get_post_meta( $post_arr['id'], 'channelTitle', true );
                },
            ) );

            register_rest_field( 'pulse', 'videoId', array(
                'get_callback' => function( $post_arr ) {
                    return get_post_meta( $post_arr['id'], 'videoId', true );
                },
            ) );

            register_rest_field( 'pulse', 'imageURL', array(
                'get_callback' => function( $post_arr ) {
                    return get_the_post_thumbnail_url( $post_arr['id'], 'medium' );
                },
            ) );


            register_rest_field( 'pulse', 'imageWidth', array(
                'get_callback' => function( $post_arr ) {
                    $img = wp_get_attachment_image_src(get_post_thumbnail_id($post_arr['id']), 'medium');
                    return $img[1];
                },
            ) );

            register_rest_field( 'pulse', 'imageHeight', array(
                'get_callback' => function( $post_arr ) {
                    $img = wp_get_attachment_image_src(get_post_thumbnail_id($post_arr['id']), 'medium');
                    return $img[2];
                },
            ) );

        } );

    }
}