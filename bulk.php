<?php
require __DIR__ . '/Facebook/autoload.php';

use FacebookAds\Object\Ad;
use FacebookAds\Object\Lead;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = 'EAAj5S3HZCjFEBAL01GC9yGd4CsPEnNYkFFQC6UteuMwALMzJabSZBKQVnWSzKd3vBuCNo5mfSxLq4LAyjd6mZCNqaT4ph01tG8S1GaTN8a1eC543NjG4S7rMdR9IVj1UiglFZBFkq80trKFfZCCMGAYfkZCI0qN6YW5ZBFui3i8ayiRAMgpsvQYMHXTAqsX0GkZD';
$app_secret = 'ddf0c9cf79112ad00f6bd2995551fc27';
$app_id = '2525902244121681';
$id = '406744446638176';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
);
echo json_encode((new Ad($id))->getLeads(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);