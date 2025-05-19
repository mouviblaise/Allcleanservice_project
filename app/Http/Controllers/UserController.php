<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        // Validation des données d'entrée
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6', // Le mot de passe doit faire au moins 6 caractères
        ]);

        // Crée un nouvel utilisateur avec un mot de passe crypté
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Cryptage du mot de passe
        $user->save();  // Sauvegarde l'utilisateur dans la base de données

        return response()->json([
            'message' => 'Utilisateur créé avec succès',
            'user' => $user
        ]);
    }
}
