<?php
// ============================================================================
// File:    index.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================

require_once(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR .  "vendor" . DIRECTORY_SEPARATOR . "autoload.php");


use ProjectName\Config\DatabaseConfig;
use ProjectName\Routes\RouteConfig;

use Seymenkonuk\Framework\Application;


Application::configure(dirname(__DIR__) . DIRECTORY_SEPARATOR . "app")
    ->withRouting(RouteConfig::class)
    ->withDbConfig(
        DatabaseConfig::MYSQL_HOST,
        DatabaseConfig::MYSQL_PORT,
        DatabaseConfig::MYSQL_DB_NAME,
        DatabaseConfig::MYSQL_CHARSET,
        DatabaseConfig::MYSQL_USER,
        DatabaseConfig::MYSQL_PASSWORD,
    )
    ->run();
