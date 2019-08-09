<?php
require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\Ad;
use FacebookAds\Object\Lead;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

if(!defined('STDIN'))  define('STDIN',  fopen('php://stdin',  'r'));
if(!defined('STDOUT')) define('STDOUT', fopen('php://stdout', 'w'));
if(!defined('STDERR')) define('STDERR', fopen('php://stderr', 'w'));

$ACCESS_TOKEN = 'EAAj5S3HZCjFEBAL01GC9yGd4CsPEnNYkFFQC6UteuMwALMzJabSZBKQVnWSzKd3vBuCNo5mfSxLq4LAyjd6mZCNqaT4ph01tG8S1GaTN8a1eC543NjG4S7rMdR9IVj1UiglFZBFkq80trKFfZCCMGAYfkZCI0qN6YW5ZBFui3i8ayiRAMgpsvQYMHXTAqsX0GkZD';
$APP_SECRET = 'ddf0c9cf79112ad00f6bd2995551fc27';
$APP_ID = '2525902244121681';
$FORM_ID = '406744446638176';

$api = Api::init($APP_ID, $APP_SECRET, $ACCESS_TOKEN);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
);
echo json_encode((new Ad($FORM_ID))->getLeads(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);

//var_export(new Ad($FORM_ID));

//var_dump(json_encode(new Ad($FORM_ID)));