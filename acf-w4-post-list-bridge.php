<?php
/*
Plugin Name: Advanced Custom Fields: W4 Post List Bridge
Plugin URI: http://github.com/pmill/acf-w4-post-list-bridge/
Description: This plugin provides a [post_field field="field-name"] shortcode connecting an Advanced Custom Fields field to your W4 Post List list template
Version: 1.0.0
Author: pmill
Author URI: http://github.com/pmill
License: GPL
Copyright: pmill
*/

add_filter('w4pl/get_shortcodes', 'w4pl_acf_bridge');

function w4pl_acf_bridge()
{
    return array(
        'post_field' => array(
            'group' 	=> 'Post',
            'callback' 	=> 'w4pl_shortcode_post_field',
            'desc' 		=> ''
        ),
    );
}

function w4pl_shortcode_post_field()
{
    /** @var WP_POST $post */
    global $post;

    return get_field('file_url', $post->ID);
}
