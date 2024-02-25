<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

        return redirect('/')->withErrors(['login' => 'The provided credentials do not match our records.']);
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
