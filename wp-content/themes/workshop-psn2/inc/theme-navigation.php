<?php

/**
 * Enregistre les menu de navigation
 */
function workshop_psn2_menus()
{

    $locations = array(
        // 'primary' => __('Menu principal', 'workshop-psn2'),
    );

    register_nav_menus($locations);
}

add_action('init', 'workshop_psn2_menus');
