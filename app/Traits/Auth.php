<?php

namespace App\Traits;

use App\Models\Admin;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
use Nette\Schema\ValidationException;

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

    public static function forgotPassword(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $status = Password::sendResetLink($request->only('email'));

        if($status == Password::RESET_LINK_SENT){
            return ['message' => __($status)];
        }

        return response(['message'=> __($status)], 500);
    }

    public static function resetPassword(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'token'),
            function($user) use($request) {
                $user->update(['password' => Hash::make($request->password)]);
                event(new PasswordReset($user));
            }
        );

        if($status == Password::RESET_LINK_SENT){
            return ['message' => __($status)];
        }

        return response(['message'=> __($status)], 500);
    }
}
