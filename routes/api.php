<?php

//use App\API\v1;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    //Route::apiResource('project', v1\Project\ProjectController::class);
    //Route::apiResource('module', v1\Project\ModuleController::class);
    //Route::apiResource('product', v1\Project\ProductController::class);
    //Route::apiResource('version', v1\Project\VersionController::class);
});
