<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Models\User;

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

Route::apiResources([
    'users' => \App\Http\Controllers\UserController::class,
    'languages' =>\App\Http\Controllers\LanguageController::class,
]);
Route::get('/languages/{language}', [\App\Http\Controllers\LanguageController::class, 'getLang']);
