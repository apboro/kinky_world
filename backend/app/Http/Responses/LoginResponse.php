<?php

namespace App\Http\Responses;

use App\Http\Resources\UserResource;
use App\Models\User;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('api-token')->plainTextToken;
        return response(['data' => $user, 'token'=> $token]);
    }


}
