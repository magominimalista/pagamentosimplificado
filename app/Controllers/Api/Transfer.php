<?php

Flight::route('POST /v1/transfer', function() {
    Flight::json(array(
        'id' => 123
    ), 200);
});