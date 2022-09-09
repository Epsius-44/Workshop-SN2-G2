<?php 
/*
* Plugin Name: Workshop Plugin
* Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, magni?
* Version: 1.0.0
* Author: Epsius-44/Equipe-NCQTL
* Author URI: https://github.com/epsius-44
*/

// Affiche un message si un utilisateur trouve le fichier du plugin
defined('ABSPATH') or die('Rien à voir ici!');

// Fonction appeler à l'activation du plugin
register_activation_hook(__FILE__, function() {
    // Ajoute le fichier enabled symbolisant pour le plugin son état actif
    touch(__DIR__ . '/enabled');
});

// Fonction appeler à la désactivation du plugin
register_deactivation_hook(__FILE__, function() {
    // Supprime le fichier enabled symbolisant pour le plugin son état inactif
    unlink(__DIR__ . '/enabled');
});

require_once __DIR__ . '/includes/shortcode-decodex-watcher.php';
require_once __DIR__ . '/includes/shortcode-similar-page.php';
require_once __DIR__ . '/includes/shortcode-similar-image.php';
