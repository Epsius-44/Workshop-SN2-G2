<?php get_header(); ?>

    <main>
        <section id="page-article">
            <div class="container">
                <img src="https://via.placeholder.com/900x300/A9A6A5" alt="image illustrant l'article">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <h5>Par <?php the_author(); ?> le <?php the_date(); ?></h5>
                        <p><?php the_content(); ?></p>
                    <?php endwhile;
                endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>