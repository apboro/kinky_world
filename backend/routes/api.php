<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    $user = User::all();
    return response()->json($user);
});
Route::post('/user/add', function () {
    //$request->validate([
    //    'city' => 'required|string|max:255',
        //      'description' => 'required|string',
        //      'email' => 'required|string|email|max:255|unique:users',
        //      'password' => ['required', 'confirmed', Rules\Password::defaults()],
   // ]);
    $user = User::factory()->create([
        'city' => 'Moscow',
    ]);

});
