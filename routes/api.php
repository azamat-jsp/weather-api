<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('issues', [\App\Http\Controllers\Api\IssueController::class, 'getIssue']);
Route::resource('weathers', \App\Http\Controllers\Api\WeatherController::class);

Route::get('publish', [\App\Http\Controllers\Api\PublishController::class, 'publish']);

