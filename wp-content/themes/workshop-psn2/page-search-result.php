<?php
get_header();?>

    <div class="container-search-result">
        <section class="search-section">
            <div class="form-container">
                <form action="<?php echo get_site_url().'/search-result' ?>" class="form-search" method="get">
                    <div class="input-container">
                        <input name="search" id="search" class="input-search" type="text" placeholder="Vérifier un article..." required pattern="(?:(?:https?|ftp|http):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?">
                        <button class="button-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                </form>
            </div>
        </section>
        <section class="result-section">
            <div class="result-fake">
                <div class="container-result">
                    <div class="grammar-result">
                        <span>Orthographe: 45 / 100</span>
                    </div>
                    <div class="source-result">
                        <span>Score de confiance de la source: </span>
                        <span class="">?</span>
                        <span>/4</span>
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
                                <a class="link-article" href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a class="link-article" href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                            <div class="article separator-bottom">
                                <a class="link-article" href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a class="link-article" href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                            <div class="article separator-bottom">
                                <a class="link-article" href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a class="link-article" href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                            <div class="article separator-bottom">
                                <a class="link-article" href="" target="_blank" rel="noopener">
                                    <h3 class="title-article-result">titre de l'article</h3>
                                </a>
                                <span><a class="link-article" href="" target="_blank" rel="noopener">Source</a></span>
                                <span> - </span>
                                <span>15/02/2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-result">
                <div class="container-result">
                    <h2>Articles avec une image similaire</h2>
                    <div class="container-card-img">
                        <div class="card-img">
                            <a class="article-img-link link-article" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            class="img-result-article"
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>                            </a>

                            <div class="img-source-link"><a class="link-article" href="" target="_blank" rel="noopener">lien de la
                                    source</a></div>
                            <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                        <div class="card-img">
                            <a class="article-img-link link-article" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            class="img-result-article"
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>                            </a>

                            <div class="img-source-link"><a class="link-article" href="" target="_blank" rel="noopener">lien de la
                                    source</a></div>
                            <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                        <div class="card-img">
                            <a class="article-img-link link-article" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            class="img-result-article"
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>
                                <div class="img-source-link"><a class="link-article" href="" target="_blank" rel="noopener">lien de la
                                        source</a></div>                            </a>

                            <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                        <div class="card-img">
                            <a class="article-img-link link-article" href="" target="_blank" rel="noopener">
                                <div class="image-result"><img
                                            class="img-result-article"
                                            src="<?php echo get_template_directory_uri() . '/assets/images/random.jpg' ?>"
                                            alt=""></div>
                                <div class="img-title"><h3 class="result-image-title">Superbe titreanjzdkjaznbdkjabzdaj
                                        danzjdanzld</h3></div>                            </a>

                            <div class="img-source-link"><a class="link-article" href="" target="_blank" rel="noopener">lien de la
                                    source</a></div>
                            <div class="img-date"><span class="date">10/05/2021</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();