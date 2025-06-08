<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('app.login');
    }

    public function login(AuthRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return redirect()->route('Inicio')->with('success', 'Login realizado com sucesso!');
        }

        return back()->withErrors(['email' => 'E-mail ou senha inválidos.'])->withInput();

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout realizado com sucesso!');
    }

}