<?php

declare(strict_types=1);

namespace App\Controller\Objectbase;

use App\Lib\JsonResponse;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class Create extends Base
{
    public function __invoke(Request $request, Response $response): Response
    {
        $input = $request->getParsedBody();
        $objectbase = $this->getObjectbaseService()->create($input);

        return JsonResponse::withJson($response, json_encode($objectbase), 201);
    }
}
