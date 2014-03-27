<?php

$mongo_client = new MongoClient($config['db.server']);
$db = $mongo_client->selectDB($config['db.name']);