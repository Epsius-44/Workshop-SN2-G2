<?php get_header() ?>

    <section class="bienvenue">
        <h1> Bienvenue sur Fake News Academy </h1>
    </section>

    <section class="exemple-fake-news">
        <div class="container-front-page">
            <div class="card-fake-news">
                <h2> Exemple de fake news </h2>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/tweet_fake.png' ?>"
                     alt="Fake Tweet">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/fauxpostmacron.png' ?>"
                     alt="Fake Tweet Macron">
            </div>
        </div>
    </section>

    <section class="list-bouton">
        <button type="button" class="btn btn-primary">Conseil</button>
        <button type="button" class="btn btn-primary">Detecter</button>
        <button type="button" class="btn btn-primary">Outils</button>
    </section>

<?php get_footer(); ?>