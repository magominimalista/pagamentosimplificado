<?php

use Lcobucci\JWT\Encoding\ChainedFormatter;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Token\Builder;

Flight::route('POST /v1/login', function() {

    $tokenBuilder = (new Builder(new JoseEncoder(), ChainedFormatter::default()));
    $algorithm    = new Sha256();
    $signingKey   = InMemory::plainText(random_bytes(32));

    $now   = new DateTimeImmutable();
    $token = $tokenBuilder
        // Configures the issuer (iss claim)
        ->issuedBy('http://localhost:8000/v1/')
        // Configures the audience (aud claim)
        ->permittedFor('http://localhost:8000/v1/')
        // Configures the id (jti claim)
        ->identifiedBy('meuusuario')
        // Configures the time that the token was issue (iat claim)
        ->issuedAt($now)
        // Configures the time that the token can be used (nbf claim)
        ->canOnlyBeUsedAfter($now->modify('+1 minute'))
        // Configures the expiration time of the token (exp claim)
        ->expiresAt($now->modify('+1 hour'))
        // Configures a new claim, called "uid"
        ->withClaim('uid', 1)
        // Configures a new header, called "foo"
        ->withHeader('foo', 'bar')
        // Builds a new token
        ->getToken($algorithm, $signingKey);

    Flight::json(array(
        'bear' => $token->toString(),
        'id' => 123
    ), 200);
});