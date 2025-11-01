<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

    public function connexion()
    {
        Log::info('Visite de la page de connexion');

        return view('connexion');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        Log::info('Tentative de connexion pour l\'utilisateur: ' . $request->input('email'));   

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'erreur' => 'Login ou mot de passe incorrect.',
        ])->onlyInput('email');
    }

    public function deconnexion(Request $request): RedirectResponse
    {
        Log::info('Déconnexion de l\'utilisateur: ' . Auth::user()->email);
        
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
