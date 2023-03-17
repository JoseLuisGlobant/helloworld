<?php

$mongoUrl = "mongodb+srv://mo0ng0us3r:bm5BTptW8RD9tpBa@globant.qgp6k40.mongodb.net/test?retryWrites=true&w=majority";
$client = new \MongoDB\Client($mongoUrl);

$collection = $client->test->messages;

$result = $collection->find();
foreach ($result as $document) {
    echo $document['message'] . "\n";
}


