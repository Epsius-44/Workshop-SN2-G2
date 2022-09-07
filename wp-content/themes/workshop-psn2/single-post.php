<?php get_header(); ?>

    <main>
        <section id="page-article">
            <div class="container">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/pokora.png' ?>"
                     alt="image illustrant l'article" id="img-article">
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