<?php
require_once(__DIR__ . '/OpenGraph.php');

add_shortcode('similar-image', function ($atts, $content = null){
    $url = $atts['url'];
    $img = OpenGraph::fetch($url)->image;
    $request = 'https://serpapi.com/search.json?engine=google_reverse_image&google_domain=google.com&image_url='.urlencode($img).'&api_key='.PLUGIN_API_KEY ;
    if (($data = @file_get_contents($request)) === false) {
        $error = error_get_last();
        return '
<div class="container-card-img">
    <div class="card-img">
        <a class="article-img-link link-article" href="#" target="_blank" rel="noopener">
            <div class="image-result">
                <img class="img-result-article"
                    src="'. get_template_directory_uri() .'/assets/images/error.svg" alt="Image d\'illustration de l\'article">
            </div>
            <div class="img-title">
                <h3 class="result-image-title">Impossible de charger les images similaire</h3>
            </div>
        </a>
    </div>
</div>
        ';
    } else {
        $data = json_decode($data, false);
        $return = '<div class="container-card-img">';
        foreach ($data->image_results as $image_result) {
            if (isset($image_result->thumbnail)) :
                $return .= '
<div class="card-img">
    <a class="article-img-link link-article" href="'.$image_result->link.'" target="_blank" rel="noopener">
        <div class="image-result">
            <img class="img-result-article"
                src="'.$img.'"alt="Image d\'illustration de l\'article">
        </div>
        <div class="img-title">
            <h3 class="result-image-title">'.$image_result->title.'</h3>
        </div>
    </a>
    <div class="img-source-link">
        <a class="link-article" href="http://'.parse_url($image_result->link, PHP_URL_HOST).'" target="_blank" rel="noopener">
            '.parse_url($image_result->link, PHP_URL_HOST).'
        </a>
    </div>
</div>
                ';
            endif;
        }
        if ($return === '<div class="container-card-img">') {
            $return .= '
<div class="card-img">
    <a class="article-img-link link-article" href="#" target="_blank" rel="noopener">
        <div class="image-result">
            <img class="img-result-article"
                src="'. get_template_directory_uri() .'/assets/images/error.svg" alt="Image d\'illustration de l\'article">
        </div>
        <div class="img-title">
            <h3 class="result-image-title">Aucune image similaire trouvée</h3>
        </div>
    </a>
</div>
            ';
        }
        $return .= '</div>';
        return $return;
    }
});