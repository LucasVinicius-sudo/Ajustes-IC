<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class HomeController extends Controller
{
    public function home(){
        return view("web.home");
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            "email.required"=>"E-mail é obrigatório.",
            "password.required"=>"Senha é obrigatória."
        ]);

        if (Auth::attempt($credentials)==true) {
            $request->session()->regenerate();

            // return redirect()->intended('web.subjects');
            return redirect()->view("web.subjects");
        }

        return back()->withErrors([
            'email' => 'As credenciais não estão nos registros.',
        ])->onlyInput('email');
    }
}
