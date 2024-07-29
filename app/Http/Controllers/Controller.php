<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *    title="Swagger with Laravel",
 *    version="8.6.0",
 * )
 * @OA\SecurityScheme(
 *     type="http",
 *     securityScheme="bearerAuth",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 */
abstract class Controller
{
    //
}
