<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index ()
    {
        return view('login');
    }
    public function login (Request $request)
    {
        $request->validate ([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
//        Первый вариант без ничего
//        if (Auth::attempt($validated)) {
//            return redirect('user');
//        }
        if (!Auth::attempt($request->only('login', 'password'))) {
            return back()->withErrors([
                'login' => 'Неверный логин или пароль',
                'password' => 'Неверный логин или пароль',
            ])
                ->withInput($request->only('login'));
        }

        return redirect('list');
    }
}
