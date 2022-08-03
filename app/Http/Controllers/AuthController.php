<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class AuthController extends AppBaseController
{
    public function login(LoginRequest $request)
    {
        try {
            $fields = $request->all();
            $user   = User::where('email', $fields['email'])->first();

            if (!$user || !Hash::check($fields['password'], $user->password))
            {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }

            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user'  => $user,
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
