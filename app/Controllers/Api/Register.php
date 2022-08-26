<?php

Flight::route('POST /v1/register', function() {
   
    Flight::json(array(
        'id' => 123
    ), 200);
    
});