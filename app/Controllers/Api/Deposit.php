<?php

Flight::route('PUT /v1/deposit', function() {
    Flight::json(array(
        'id' => 123
    ), 200);
});