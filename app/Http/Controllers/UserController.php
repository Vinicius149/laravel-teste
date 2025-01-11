<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function cadastrar(Request $request)
    {
    $dados =  $request->validate([
        'name' => 'required|min:3|max:100|',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|max:20',
    ]);
    if ($request->filled('password')) {
        $dados['password'] = bcrypt($request->password);
    } else {
        unset($dados['password']);
    }
    $usuario = User::create($dados);
    auth()->login($usuario);
    return redirect('/lista');

    }

    public function lista()
    {
        $users = User::all();
        return view('sistema.lista', compact('users'));
    }

    public function edit(User $user)
    {
        return view('sistema.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $dados = $request->validate([
            'name' => 'min:3|max:100',
            'email' => 'email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6|max:20',
        ]);
        $dados['password'] = bcrypt($dados['password']);
        $user->update($dados);

        return redirect('/lista');
    }

    public function apagar(User $user)
    {
        $user->delete();
        return redirect('/lista');
    }
 
}
