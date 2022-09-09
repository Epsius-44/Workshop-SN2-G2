<?php
add_shortcode('decodex-watcher', function ($atts, $content = null){
    $url = $atts['url'];
    $url = parse_url($url, PHP_URL_HOST);
    $request = 'https://api.decodexwatcher.communiquons.org/site/'.$url.'/infos';
    if (($data = @file_get_contents($request)) === false) {
        $error = error_get_last();
        return '
<div class="source-result">
    <span>Score de confiance de la source: </span>
    <span class="">?</span>
    <span>/4</span>
</div>
<div class="source-commentary-result">
    <span>Cette source n\'a pas été vérifiée !</span>
</div>
        ';
    } else {
        $data = json_decode($data, false);
        return '
<div class="source-result">
    <span>Score de confiance de la source: </span>
    <span class="">'.$data->trustLevel.'</span>
    <span>/4</span>
</div>
<div class="source-commentary-result">
        <span>Présentation de la source : '.$data->comment.'</span>
    </div>
        ';
    }
});