<?php
get_header();
$url = filter_input(INPUT_GET, "search");
?>

    <div class="container-search-result">
        <section class="search-section">
            <div class="form-container">
                <form action="<?php echo get_site_url().'/search-result' ?>" class="form-search" method="get">
                    <div class="input-container">
                        <input name="search" id="search" class="input-search" type="text" placeholder="Vérifier un article..." required value="<?php echo $url ?>" pattern="(?:(?:https?|ftp|http):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?">
                        <button class="button-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                </form>
            </div>
        </section>
        <section class="result-section">
            <div class="result-fake">
                <div class="container-result">
                    <div>
                        <h2>Fiabilité de la source</h2>
                    </div>
                    <?php echo do_shortcode('[decodex-watcher url="'.$url.'"]'); ?>
                </div>
                <div class="container-result">
                    <div class="article-result">
                        <div>
                            <h2>Articles similaires</h2>
                        </div>
                        <?php echo do_shortcode('[similar-page url="'.$url.'"]'); ?>
                    </div>
                </div>
            </div>
            <div class="img-result">
                <div class="container-result">
                    <h2>Articles avec une image similaire</h2>
                    <div class="container-card-img">
                    <?php echo do_shortcode('[similar-image url="'.$url.'"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();