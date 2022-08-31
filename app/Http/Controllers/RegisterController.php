<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|confirmed'
        ],
        [
            'required'  => 'Campo requerido.',
            'email'     => 'Correo invalido.',
            'confirmed' => 'Las contraseñas deben ser iguales.',
            'unique'    => 'Ya existe un usuario con ese correo',
        ]);

        $u = User::where('email', $request->email)->first();

        $user = User::create(request(['name', 'email', 'password']));
        $token = $user->createToken('auth_token')->plainTextToken;

        auth()->login($user);

        return redirect()->to('/');
    }
}
