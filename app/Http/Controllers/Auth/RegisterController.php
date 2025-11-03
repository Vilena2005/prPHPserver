<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function show ()
    {
        return view('register');
    }

    public function register (Request $request)
    {
        $validated = $request->validate ([
            'name' => 'required|min:3|max:255',
            'login' => 'required|string|min:3|max:255|unique:users',
            'password' => 'required|string|min:8|regex:/[a-zA-Z]/|regex:/[0-9]/',
        ]);

        $user = User::create([
            'name' => $validated ['name'],
            'login'=> $validated ['login'],
            'password' => $validated ['password'],
        ]);

        Auth::login($user);

        return redirect('list');
    }
}

