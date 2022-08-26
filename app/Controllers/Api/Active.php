<?php

Flight::route('POST /v1/active', function() {
    Flight::json(array(
        'id' => 123
    ), 200);
});