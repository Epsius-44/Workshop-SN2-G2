<?php

/**
 * Enregistre les menu de navigation
 */
function workshop_psn2_menus()
{

    $locations = array(
        'navbar' => __('Menu principal (navbar)', 'workshop-psn2'),
    );

    register_nav_menus($locations);
}

add_action('init', 'workshop_psn2_menus');
