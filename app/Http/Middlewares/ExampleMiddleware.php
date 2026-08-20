<?php
// ============================================================================
// File:    ExampleMiddleware.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================

namespace App\Http\Middlewares;


use Closure;

use Seymenkonuk\Framework\Http\Middleware;
use Seymenkonuk\Framework\Http\Request\IRequest;
use Seymenkonuk\Framework\Http\Response\IResponse;


class ExampleMiddleware extends Middleware
{
    public function handle(IRequest $request, IResponse $response, Closure $next): IResponse
    {
        return $next($request, $response);
    }
}
