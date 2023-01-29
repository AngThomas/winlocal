<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {

        $input = $request->validated();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('winLocal')->plainTextToken;
        $success['name'] =  $user->name;

        return response()->json(['success' => 'You successfully registered new member', 'access' => $success], 200);

    }

    public function login(Request $request): JsonResponse
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('winLocal')->plainTextToken;
            $success['name'] =  $user->name;

            return response()->json(['success' => 'You successfully logged in', 'access' => $success], 200);
        }

        else{
            return response()->json(["You are unauthorized, begone!"],401);
        }
    }
}
