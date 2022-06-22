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
//middleware('auth:sanctum')->
Route::get('/user', function () {
    $user=User::get();
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);
});
