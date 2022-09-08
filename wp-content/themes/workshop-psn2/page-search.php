<?php
get_header(); ?>

<div class="container-search-result">
    <section class="search-section full-page-search">
        <div class="form-container form-center">
            <form action="<?php echo get_site_url()?>/search-result" method="get" class="form-search">
                <div class="input-container">
                    <input class="full-input-search" type="text" placeholder="Vérifier un article...">
                    <button class="full-button-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
    </section>
</div>

<?php get_footer(); ?>
