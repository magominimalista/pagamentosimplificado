<?php

Flight::route('GET /v1/users', function() {
    Flight::json(array(
        'id' => 123
    ), 200);
});