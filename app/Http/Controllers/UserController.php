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
    $dados['password'] = bcrypt($dados['password']);
    $usuario = User::create($dados);
    auth()->login($usuario);
    return redirect('/lista');

    }

    public function lista()
    {
        $users = User::all();
        return view('sistema.lista', compact('users'));
    }
 
}
