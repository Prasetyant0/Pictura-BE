<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'birthdate' => 'required|date',
            'passwordSignup' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 401);
        }
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'password' => bcrypt($request->passwordSignup),
        ]);
        Auth::login($user);
        // session()->put('showModal', true);
        session()->flash('success', "Welcome {$user->username} to Pictura!");
        return response()->json(['status' => 'success', 'user' => $user->username], 200);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Google authentication failed.');
        }

        if ($user->role === 'admin' || $user->role === 'superAdmin') {
            return redirect('/')->with('error', 'Access denied for Admin!');
        }

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::create([
                'email_verified_at' => now(),
                'fullName' => $user->name,
                'email' => $user->email,
                'password' => bcrypt("Defaultpassword123"),
                'remember_token' => Str::random(10),
                'role' => 'user',
                'provider' => 'google',
            ]);

            Auth::login($newUser);
        }

        return redirect()->route('home')->with('success', 'You have successfully logged in with Google!');
    }


    public function authenticate(Request $request)
    {
        $request->validate([
            'username-email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $this->getCredentials($request);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin' || $user->role === 'superAdmin') {
                Auth::logout();
                return redirect('/')->with('error', 'Access denied for Admin!');
            }
            return redirect('/home')->with('success', "Welcome back {$user->username} in Pictura");
        }

        return redirect('/')->with('error', 'The provided credentials do not match our records.');
    }


    protected function getCredentials(Request $request)
    {
        $loginField = filter_var($request->input('username-email'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        return [
            $loginField => $request->input('username-email'),
            'password' => $request->input('password'),
        ];
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have successfully logged out!');
    }
}
