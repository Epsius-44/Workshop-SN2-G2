<?php
get_header(); 
$posts = get_posts(array('post_type' => 'post', 'numberposts' => -1, 'category' => 4));
//var_dump($posts);
?>

<main>
    <div class="container">
        <section class="archive-article">
            <h1>Listes des fake news détectées : </h1>
            <div class="wrapper">
            <?php 
            foreach ($posts as $post) {
                echo '
                <a href="'.$post->guid.'">
                    <div class="card-archive-article">
                        '.get_the_post_thumbnail($post->ID, 'thumbnail', array('alt' => 'image illustrant l\'article')).'
                        <div class="card-archive-content">
                            <span>'.$post->post_title.'</span>
                            <p>Par '.get_user_by('id', $post->post_author)->display_name.' le '.$post->post_date.'</p>
                        </div>
                    </div>
                </a>
                ';
            }
            ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>