<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('networks', [\App\Http\Controllers\Api\SocialNetworkController::class, 'index']);
Route::get('cooks', [\App\Http\Controllers\Api\CookController::class, 'index']);
Route::resource('weathers', \App\Http\Controllers\Api\WeatherController::class);
