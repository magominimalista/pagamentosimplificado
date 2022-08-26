<?php

Flight::route('POST /v1/withdraw', function() {
    Flight::json(array(
        'id' => 123
    ), 200);
});