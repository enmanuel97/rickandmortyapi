<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends AppBaseController
{
    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $fields = $request->all();
            $user   = User::where('email', $fields['email'])->first();

            if (!$user || !Hash::check($fields['password'], $user->password))
            {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }

            $token = $user->createToken('authToken')->plainTextToken;

            return $this->sendSuccess("User logged in", [
                'accessToken'   => $token,
                'userData'      => $user,
            ]);
        } catch (Exception $e) {
            return $this->sendError($e);
        }
    }
}
