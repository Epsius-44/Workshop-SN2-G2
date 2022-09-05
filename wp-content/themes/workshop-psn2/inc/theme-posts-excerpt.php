<?php
// Définit la taille des textes mis dans le flux RSS
function workshop_psn2_excerpt_length($length)
{
    if (is_feed())
        return 180; //180 mots pour les flux RSS
    elseif (is_tag())
        return 200; //200 mots pour les pages de mots-clés
    else
        return 18; //90 mots pour le reste du site
}

add_filter('excerpt_length', 'workshop_psn2_excerpt_length', 100);