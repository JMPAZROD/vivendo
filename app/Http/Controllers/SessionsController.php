<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if(auth()->attempt(request(['email', 'password'])) == false)
        {
            return back()->withErrors([
                'message'   => 'El correo o contraseña son incorrectos'
            ]);
        }

        return redirect()->to('/');
    }

    public function destroy()
    {
        // auth()->user()->tokens()->delete();
        auth()->logout();

        return redirect()->to('/');
    }
}
