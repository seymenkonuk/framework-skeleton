<?php
// ============================================================================
// File:    WebRoutes.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================

namespace Routes;


use App\Http\Controllers\ExampleController;

use Seymenkonuk\Framework\Routing\RouteConfig;
use Seymenkonuk\Framework\Routing\Router;


class WebRoutes extends RouteConfig
{
    public function register(Router $router): void
    {
        $router->registerController(ExampleController::class);
    }
}
