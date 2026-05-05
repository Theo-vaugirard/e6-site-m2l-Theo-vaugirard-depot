<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Afficher le formulaire d'inscription
     */
    public function showForm()
    {
        return view('register');
    }

    /**
     * Traiter l'inscription
     */
    public function register(Request $request)
    {
        // ✅ Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // ✅ Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ✅ Connexion automatique après inscription
        Auth::login($user);

        // ✅ Redirection
        return redirect()->route('home')->with('success', 'Compte créé avec succès !');
    }
}
