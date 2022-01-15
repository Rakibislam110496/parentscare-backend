<?php

namespace App\Traits;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

trait Auth
{
    public static function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => "required|string",
        ]);

        $user = self::where('email', $validated['email'])->first();
        if ($user && Hash::check($validated['password'], $user->password)) {
            if(!$user->is_active){
                return response()->json(['errors' => true, 'message' => 'User is inactive. Contact support for further queries.']);
            }

            $accessToken = $user->createToken('accessToken')->plainTextToken;
            return response()->json(['accessToken' => $accessToken, 'user' => $user]);
        }
        return response()->json(['errors' => true, 'message' => 'Username or Password is incorrect.'], 403);

    }
}
