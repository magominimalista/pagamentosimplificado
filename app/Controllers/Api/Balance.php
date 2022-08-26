<?php

Flight::route('GET /v1/balance', function() {
    Flight::json(array(
        'id' => 123
    ), 200);
});