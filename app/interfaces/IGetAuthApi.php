<?php

namespace interfaces;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

interface IGetAuthApi {

    public static function getToken ( Request $request, Response $response, array $args ) : Response;
}