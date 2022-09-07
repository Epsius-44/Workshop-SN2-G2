<?php
get_header();
?>
<div class="container-background background-white">
<div class="container background-white">
    <div class="error-404 center">
        <h1>Erreur <span class="rainbow rainbow_text_animated">404</span></h1>
    </div>
    <div class="image-404 center">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>" alt="">
    </div>
    <div class="text-404 center">
        <span>Oups! Il semblerait que cette page n'existe pas 😭. <a class="text-404" href="<?php echo get_home_url() ?>">Retourner à la page d'accueil ?</a></span>
    </div>
</div>
</div>
<?php
get_header();
?>
