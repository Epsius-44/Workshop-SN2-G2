<?php
require_once(__DIR__ . '/OpenGraph.php');

add_shortcode('similar-page', function ($atts, $content = null){
    $url = $atts['url'];
    $page = OpenGraph::fetch($url);
    $title = str_replace(' ', '+', $page->title);
    $request = 'https://serpapi.com/search.json?q='.urlencode($title).'&hl=fr&gl=fr&api_key='.PLUGIN_API_KEY;
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $request,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_SSL_VERIFYPEER => false
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response, false)->organic_results;
    $return = '<div class="list-article-result">';
    foreach ($response as $data) {
        $return .= '
<div class="article separator">
    <a class="link-article" href="'.$data->link.'" target="_blank" rel="noopener">
        <h3 class="title-article-result">'.$data->title.'</h3>
    </a>
    <span>
        <a class="link-article" href="http://'.parse_url($data->link, PHP_URL_HOST).'" target="_blank" rel="noopener">'.parse_url($data->link, PHP_URL_HOST).'</a>
    </span>
    <span> - </span>
    <span>'.$data->snippet.'</span>
</div>
        ';
    }
    $return .= '</div>';
    return $return;
});