<?php

// Class auto loading by composer
require_once __DIR__ . '/vendor/autoload.php';

// DB Host
require_once __DIR__ . '/util/db.php';

// Prepare client connection with MongoDB
$client = new MongoDB\Client(_DB_HOST);

// Select Database and Collection
$collection = $client->ieducation->courseContents;

// Fetch available Data inside Collection
$cursor = $collection->find(array());

// Data Iteration
$data = iterator_to_array($cursor);

// Dump to check the data
var_dump($data);
?>