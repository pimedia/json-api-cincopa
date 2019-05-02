<?php

/*

  Plugin Name: JSON API Cincopa

  Plugin URI: http://www.parorrey.com/solutions/json-api-cincopa/

  Description: Extends the JSON API for RESTful BuddyPress Cincopa galleries listing for any user

  Version: 1.7
  
  Author: Ali Qureshi

  Author URI: http://www.parorrey.com/

  License: GPLv3

 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

define('JSON_API_CINCOPA_HOME', dirname(__FILE__));


if (!is_plugin_active('json-api/json-api.php')) {

    add_action('admin_notices', 'pim_draw_notice_json_api_cincopa');

    return;

}

if (!is_plugin_active('buddypress-easy-albums-photos-video-and-music-next-gen/loader.php')) {

    add_action('admin_notices', 'pim_draw_notice_buddypress_easy_albums');

    return;

}

add_filter('json_api_controllers', 'pimJsonApiCincopaController');

add_filter('json_api_cincopa_controller_path', 'setCincopaControllerPath');


function pim_draw_notice_json_api_cincopa() {

    echo '<div id="message" class="error fade"><p style="line-height: 150%">';

    _e('<strong>JSON API Cincopa</strong> requires the JSON API plugin to be activated. Please <a href="http://wordpress.org/plugins/json-api/‎">install / activate JSON API</a> first.', 'json-api-cincopa');

    echo '</p></div>';

}

function pim_draw_notice_buddypress_easy_albums() {

    echo '<div id="message" class="error fade"><p style="line-height: 150%">';

    _e('<strong>JSON API Cincopa</strong> requires the Easy Albums - Buddypress users create and share images, video and audio albums - the easy way. plugin to be activated. Please <a href="https://wordpress.org/plugins/buddypress-easy-albums-photos-video-and-music-next-gen/‎">install / activate Easy Albums</a> first.', 'json-api-cincopa');

    echo '</p></div>';

}

function pimJsonApiCincopaController($aControllers) {

    $aControllers[] = 'Cincopa';

    return $aControllers;

}



function setCincopaControllerPath($sDefaultPath) {

    return dirname(__FILE__) . '/controllers/Cincopa.php';

}