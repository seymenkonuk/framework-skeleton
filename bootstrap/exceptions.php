<?php
// ============================================================================
// File:    exceptions.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================


use Seymenkonuk\Framework\Application;
use Seymenkonuk\Framework\Exception\FileNotFoundException;
use Seymenkonuk\Framework\Exception\FileUploadException;
use Seymenkonuk\Framework\Exception\RouteNotFoundException;
use Seymenkonuk\Framework\Exception\ValidationException;
use Seymenkonuk\Framework\Http\Exception\AuthorizationException;
use Seymenkonuk\Framework\Http\Exception\NotFoundException;
use Seymenkonuk\Framework\Http\Response\IResponse;


return function (Application $app) {
    $app->withException(function (NotFoundException|RouteNotFoundException|FileNotFoundException $exception, IResponse $response): IResponse {
        return $response->notFound();
    });
    $app->withException(function (ValidationException|FileUploadException $exception, IResponse $response): IResponse {
        return $response->badRequest();
    });
    $app->withException(function (AuthorizationException $exception, IResponse $response): IResponse {
        return $response->forbidden();
    });
    $app->withException(function (Throwable $exception, IResponse $response): IResponse {
        return $response->internalServerError();
    });
};
