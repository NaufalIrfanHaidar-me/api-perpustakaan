<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthC extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || Hash::check($request->password, $user->paswword)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return $user->createToken('user login')->plainTextToken;
    }
}
