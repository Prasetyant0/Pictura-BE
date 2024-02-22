<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatorData = Validator::make($request->all(),
        [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'birthdate' => 'required|date',
            'passwordSignup' => 'required|min:8',
        ]);

        if ($validatorData->fails()) {
            return response()->json(['errors'=>$validatorData->errors()], 401);
        } else {
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'birthdate' => $request->birthdate,
                'password' => bcrypt($request->passwordSignup)
            ]);

            return response()->json(['status'=> 200]);
        }
    }

    public function login(Request $request)
    {
        
    }
}
