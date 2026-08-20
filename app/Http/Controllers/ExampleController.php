<?php
// ============================================================================
// File:    ExampleController.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================

namespace App\Http\Controllers;


use App\Http\Middlewares\ExampleMiddleware;
use App\Http\Schemas\ExampleSchema;

use Seymenkonuk\Framework\Attribute\Middleware;
use Seymenkonuk\Framework\Attribute\Schema;
use Seymenkonuk\Framework\Http\Controller;
use Seymenkonuk\Framework\Http\Request\IRequest;
use Seymenkonuk\Framework\Http\Response\IResponse;


#[Middleware(ExampleMiddleware::class)]
class ExampleController extends Controller
{
    #[Schema(ExampleSchema::class)]
    public function index(IRequest $request, IResponse $response): IResponse
    {
        return $response->json($request->all());
    }
}
