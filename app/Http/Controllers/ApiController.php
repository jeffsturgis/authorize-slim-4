<?php


namespace App\Http\Controllers;

use App\Support\JsonResponse;

class ApiController
{
    public function example($response)
    {
        $response->getBody()->write(json_encode(['test' => 'hello world'], JSON_PRETTY_PRINT));

        return $response;
    }
}