<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    //
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'ANAOUTHORIZED'], 401);
       
        }
        $token = $user->createToken('token-name')->plainTextToken;
        return response()->json(
            [
                'message' => 'success',
                'user' => $user,
                'token' => $token,
            ],
            200,
        );
    }
}
