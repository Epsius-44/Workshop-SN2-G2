<?php get_header(); ?>

    <main>
        <div class="wrapper">
            <section class="archive-article">
                <div class="container">
                    <div class="card-archive-article">
                        <?php the_post_thumbnail('large', array('id' => 'img-article', 'alt' => 'image illustrant l\'article')) ?>
                        <span><?php the_title(); ?></span>
                        <p>Par <?php the_author(); ?> le <?php the_date(); ?></p>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php get_footer(); ?>