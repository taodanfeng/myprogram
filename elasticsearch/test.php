<?php
require './vendor/autoload.php';
$client = new Elasticsearch\Client();
print_r($client);
?>