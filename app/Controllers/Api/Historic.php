<?php

Flight::route('GET /v1/historic', function() {
    Flight::json(array(
        'id' => 123
    ), 200);
});