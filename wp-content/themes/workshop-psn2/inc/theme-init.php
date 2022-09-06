<?php

/**
 * Configure les paramètres par défaut du thème et enregistre la prise en charge de diverses fonctionnalités WordPress.
 *
 * Notez que cette fonction est connectée au hook after_setup_theme, qui s’exécute avant le hook init.
 * Le hook init est trop tard pour certaines fonctionnalités, telles que l’indication de la 
 * prise en charge des vignettes de publication.
 */
function workshop_psn2_theme_support()
{
    // Implémente la modification du css de l'éditeur par le thème
    add_theme_support('editor-styles');

    // Implémente les couleurs du thème dans l'éditeur
    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('gris', 'workshop-psn2-gris'),
            'slug' => 'gris',
            'color' => '#373737',
        ),
        array(
            'name' => __('orange', 'workshop-psn2-orande'),
            'slug' => 'orange',
            'color' => '#D68C29',
        ),
        array(
            'name' => __('blanc', 'workshop-psn2-blanc'),
            'slug' => 'blanc',
            'color' => '#F6F6F6'
        ),
        array(
            'name' => __('noir', 'workshop-psn2-noir'),
            'slug' => 'noir',
            'color' => '#232323'
        )
    ));

    // Implémente le support du titre de la page par wordpress
    add_theme_support('title-tag');

    // Implémente la prise en charge du logo personnalisé
    add_theme_support('custom-logo');

    // Activez la prise en charge des vignettes de publication sur les publications et les pages.
    add_theme_support('post-thumbnails');

    // Ajoutez des messages et des commentaires par défaut des liens de flux RSS à l’en-tête.
    add_theme_support('automatic-feed-links');

    // Ajoutez la prise en charge d'une actualisation sélective des widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Ajoutez la prise en charge du contenu des embeds responsive.
    add_theme_support('responsive-embeds');

    /**
     * Basculer le balisage de base par défaut pour le formulaire de recherche, le formulaire de commentaire
     * et les commentaires pour générer un code HTML5 valide. 
     * */  
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}

add_action('after_setup_theme', 'workshop_psn2_theme_support');
