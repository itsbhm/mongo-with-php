<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/util/db.php';

$client = new MongoDB\Client(_DB_HOST);

$collection = $client->ieducation->courseContents;

$cursor = $collection->find(['_id' => 'course-id']);

var_dump($cursor);
?>