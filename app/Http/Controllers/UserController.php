<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('app.register');
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect()->route('user.create')->with('success', 'Cadastro realizado com sucesso! Faça login para acessar o sistema.');
    }

    public function edit()
    {
        $user = auth()->user();
        return view('app.users.edit', compact('user'));
    }

    public function update(UserRequest $request)
    {
        $data = $request->validated();
        auth()->user()->update($data);
        return redirect()->route('user.edit')->with('success', 'Dados atualizados com sucesso!');
    }
}