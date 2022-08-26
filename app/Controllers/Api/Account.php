<?php

Flight::route('GET /v1/account', function() {
  
    Flight::json(array(
        'id' => 123
    ), 200);
});