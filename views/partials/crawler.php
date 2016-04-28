<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php');
$url = $_GET['url'];
$ip = $_GET['ip'];
$www = (bool) $_GET['www'];

$browser = new \GuzzleHttp\Client([]);

$host = $url;
if($www === "true"){
    $host = 'www.'.$url;
}

$content = $browser->get($ip, [
    'headers' => [
        'Host' => $host,
    ],
//    'debug' => true
]);
libxml_use_internal_errors(true);
use PHPHtmlParser\Dom;
$dom = new Dom;
$dom->load($content->getBody()->getContents());
$meta = $dom->find('meta');
if($meta != null && method_exists($meta, 'delete'))
{
    $meta->delete();
}

$html = $dom->innerHtml;

$dom = new DOMDocument();
$dom->loadHTML($html);

foreach($dom->getElementsByTagName('head') as $head)
{
    $base = $dom->createElement('base');
    $base->setAttribute('href', "http://{$_SERVER['HTTP_HOST']}/partials/relativeviewer.php?domain=$url&ip=$ip&path=");
    $head->insertBefore($base, $head->firstChild);
}

echo $dom->saveHTML();
libxml_clear_errors();
?>


