<?php

/**
 * Enregistre et ajout le CSS
 */
function workshop_psn2_register_styles()
{
    wp_enqueue_style('workshop-psn2-app-css', get_template_directory_uri() . '/css/styles.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('fontawsome-all-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts', 'workshop_psn2_register_styles');

/**
 * Enregistre et ajout les polices
 */
function workshop_psn2_register_font_admin()
{
    // wp_register_style('workshop_psn2_wp_admin_css', "https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,800;0,900;1,400;1,500;1,800;1,900&display=swap", false, wp_get_theme()->get('Version'));
    // wp_enqueue_style('workshop_psn2_wp_admin_css');
}

add_action('admin_enqueue_scripts', 'workshop_psn2_register_font_admin');

// Barre latérale plus large sur l'éditeur de contenu
function workshop_psn2_wider_sidebar()
{
    echo
    '<style>
        .interface-complementary-area{ width: 450px !important; }
    </style>';
}

add_action('admin_head', 'workshop_psn2_wider_sidebar');

/**
 * Enregistre et ajoute le JS
 */
function workshop_psn2_register_scripts()
{
    wp_enqueue_script('workshop-psn2-app-js', get_template_directory_uri() . '/scripts/app.js', array("jquery"), wp_get_theme()->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'workshop_psn2_register_scripts');

function workshop_psn2_theme_add_editor_styles()
{
    add_editor_style('css/editor.css');
}

add_action('admin_init', 'workshop_psn2_theme_add_editor_styles');
