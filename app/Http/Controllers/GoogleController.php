<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\Login as LoginMail; 

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            $existingUser = User::where('email', $googleUser->getEmail())->first();

            if ($existingUser) {
                // Update Google ID if not set
                if (empty($existingUser->google_id)) {
                    $existingUser->update(['google_id' => $googleUser->getId()]);
                }
                Auth::login($existingUser);
                $user = $existingUser;
            } else {
                $newUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'email_verified_at' => now(),
                    'password' => bcrypt(str()->random(16)),
                ]);
                Auth::login($newUser);
                $user = $newUser;
            }

            // Send login email
            try {
                Mail::to($user->email)->send(new LoginMail($user));
            } catch (\Exception $e) {
                Log::error('Failed to send registration email: ' . $e->getMessage());
            }

            return redirect()->route('base.home');

        } catch (\Exception $e) {
            Log::error('Google login failed: ' . $e->getMessage());
            return redirect()->route('base.login')
                ->with('error', 'Google login failed. Please try again.');
        }
    }

    public function login()
    {
        return view('base.login');
    }
}