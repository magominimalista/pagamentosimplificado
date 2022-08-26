<?php

Flight::route('/', function() {
    $data = [
        'bodyClass' => 'frontpage'
    ];
    Flight::render('index.php', $data);
});