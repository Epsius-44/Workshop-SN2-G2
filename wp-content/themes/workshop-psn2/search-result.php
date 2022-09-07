<?php
/*
 *  Template Name: Result search
 */
get_header();
?>
    <div class="container-search-result">
        <section class="search-section">
            <div class="form-container">
                <form action="" class="form-search">
                    <div class="input-container">
                        <input class="input-search" type="text" placeholder="Vérifier un article...">
                        <button class="button-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </section>
        <section class="result-section">
            <div class="img-result">
                <div class="container-result">
                    <h2>Articles avec une image similaire</h2>
                    <div class="container-card-img">
                        <div class="card-img">
                            <a class="article-img-link" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>                            </a>

                            <div class="img-source-link"><a href="" target="_blank" rel="noopener">lien de la
                                        source</a></div>
                                <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                        <div class="card-img">
                            <a class="article-img-link" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>                            </a>

                            <div class="img-source-link"><a href="" target="_blank" rel="noopener">lien de la
                                        source</a></div>
                                <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                        <div class="card-img">
                            <a class="article-img-link" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>
                                <div class="img-source-link"><a href="" target="_blank" rel="noopener">lien de la
                                        source</a></div>                            </a>

                            <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                        <div class="card-img">
                            <a class="article-img-link" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>                            </a>

                            <div class="img-source-link"><a href="" target="_blank" rel="noopener">lien de la
                                        source</a></div>
                                <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result-fake">
                <div class="container-result">
                    <div class="grammar-result">
                        <span>Orthographe: 45 / 100</span>
                    </div>
                    <div class="source-result">
                        <span>Score de confiance de la source: ?/4</span>
                    </div>
                    <div class="source-commentary-result">
                        <span>Commentaire sur la source: Yolo</span>
                    </div>
                </div>
                <div class="container-result">
                    <div class="article-result">
                        <div>
                            <h2>Articles similaires</h2>
                        </div>
                        <div class="list-article-result">
                            <div class="article separator">
                                <a href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                            <div class="article separator-bottom">
                                <a href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                            <div class="article separator-bottom">
                                <a href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                            <div class="article separator-bottom">
                                <a href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();