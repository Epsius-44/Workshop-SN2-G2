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
        <a href="" class="no-decoration">
            <div class="link" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,0.2)), url('<?php echo get_template_directory_uri().'/assets/images/conseil.jpg' ?>')">
                <span class="front-page-link">Conseil</span>
            </div>
        </a>
        <a href="" class="no-decoration">
            <div class="link" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo get_template_directory_uri().'/assets/images/archive.jpg' ?>')">
                <span class="front-page-link">Détecter</span>
            </div>
        </a>
        <a href="<?php echo get_home_url().'/search'?>" class="no-decoration">
            <div class="link" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo get_template_directory_uri().'/assets/images/outil.png' ?>')">
            <span class="front-page-link">Outils</span>
        </div>
        </a>

    </section>

<?php get_footer(); ?>