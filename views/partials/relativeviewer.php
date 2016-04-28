<?php
require($_SERVER['DOCUMENT_ROOT'].'/../vendor/autoload.php');
$domain = $_GET['domain'];
$ip = $_GET['ip'];
$path = $_GET['path'];

$browser = new \GuzzleHttp\Client();

$content = $browser->get($ip.$path, [
    'headers' => [
        'Host' => $domain,
    ],
]);
$headers = $content->getHeaders();
foreach($headers as $header => $values)
{
    foreach($values as $value)
    {
        header($header.":".$value);
    }
}
echo $content->getBody();