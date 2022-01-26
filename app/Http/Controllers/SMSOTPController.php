<?php

namespace App\Http\Controllers;

use App\Models\OTP;
use Carbon\Carbon;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class SMSOTPController extends Controller
{
    public function sendMessage($to, $message)
    {
        $username = env('MOBIREACH_USERNAME');
        $password = env('MOBIREACH_PASSWORD');
        $from = env('MOBIREACH_FROM');

        $fullApiUrl = "https://api.mobireach.com.bd/SendTextMessage?Username={$username}&Password={$password}&From={$from}&To={$to}&Message={$message}";

        $client = new Client();

        try {
            $client->request('GET', $fullApiUrl);
        } catch (GuzzleException $exception) {
            return false;
        }

        return true;
    }

    public function sendOTP()
    {
        $otp = auth()->user()->otps()->create(['token' => Random::generate(4, '0-9')]);

        $res = $this->sendMessage(auth()->user()->phone, "Your Parents Care One-Time PIN is {$otp->token}. It will expire in 10 minutes.");

        return response()->json(['message' => $res ? 'Please check your inbox for OTP' : "An OTP could not be sent"], $res ? 200 : 500);
    }

    public function verifyOTP(Request $request)
    {

        $validated = $request->validate([
            'token' => 'string|min:4|max:4'
        ]);

        $otp = auth()->user()->otps()->where('token', $validated['token'])->first();

        if (!$otp || Carbon::now()->gt(Carbon::parse($otp->created_at)->addMinutes(10))) {
            return response()->json(['message' => 'Invalid OTP'], 422);
        }

        auth()->user()->update(['phone_verified_at' => Carbon::now()]);

        auth()->user()->otps()->delete();

        return response()->json(['message' => 'Phone number has been verified.']);
    }
}
