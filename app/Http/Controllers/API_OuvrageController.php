<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ouvrage;
use Symfony\Component\ErrorHandler\Debug;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class API_OuvrageController extends Controller
{
    public function getOuvragesParType($typeOuvrage)
    {
        Log::info('Type d\'ouvrage demandé : ' . $typeOuvrage);

        if ($typeOuvrage === "tous") {
            $ouvrages = Ouvrage::all();
        } else {
            $ouvrages = Ouvrage::where('type', $typeOuvrage)->get();
        }


        if ($ouvrages->isEmpty()) {
            // Retourner une erreur 404 si aucun ouvrage n'est trouvé
            return response()->json(['message' => 'Aucun ouvrage trouvé avec ce type.'], 404);
        }



        // Retourner les résultats au format JSON
        return response()->json($ouvrages);
    }

    public function index()
    {
        Log::info('API_OuvrageController/index called successfully');

        $ouvrages = Ouvrage::all();

        if ($ouvrages->isEmpty()) {
            // Retourner une erreur 404 si aucun ouvrage n'est trouvé
            abort(404, 'Aucun ouvrage trouvé.');
        }

        // Retourner les résultats au format JSON
        return response()->json($ouvrages);
    }

    public function show(String $id)
    {
        Log::info('API_OuvrageController/show called with id: ' . $id);

        $ouvrage = Ouvrage::find($id);

        if (!$ouvrage) {
            // Retourner une erreur 404 si l'ouvrage n'est pas trouvé
          return response()->json(['message' => 'Ouvrage non trouvé.'], 404);
        }

        // Retourner le résultat au format JSON
        return response()->json($ouvrage);
    }

    public function store(Request $request)
    {
        Log::info('API_OuvrageController/store called with data: ' . json_encode($request->all()));

        try {

            // Valider les données entrantes
            $validatedData = $request->validate([
                'cote' => 'required|string',
                'auteur' => 'required|string',
                'titre' => 'required|string',
                'anneeParution' => 'sometimes|integer',
                'type' => 'sometimes|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Données invalides.', 'errors' => $e->validator->errors()], 422);
        }

        // Créer un nouvel ouvrage avec les données validées
        $ouvrage = Ouvrage::create($validatedData);

        // Retourner le nouvel ouvrage au format JSON avec un code de statut 201 (créé)
        return response()->json($validatedData, 201);
    }

    public function destroy(String $id)
    {
        Log::info('API_OuvrageController/destroy called with id: ' . $id);

        $ouvrage = Ouvrage::find($id);

        if (!$ouvrage) {
            // Retourner une erreur 404 si l'ouvrage n'est pas trouvé
            return response()->json(['message' => 'Ouvrage non trouvé.'], 404);
        }

        // Supprimer l'ouvrage
        $ouvrage->delete();

        // Retourner une réponse de succès
        return response()->json(['message' => 'Ouvrage supprimé avec succès.']);
    }

    public function update(Request $request, String $id)
    {
        Log::info('API_OuvrageController/update called with id: ' . $id);

        $ouvrage = Ouvrage::findOrFail($id);

        if (!$ouvrage) {
            // Retourner une erreur 404 si l'ouvrage n'est pas trouvé
            return response()->json(['message' => 'Ouvrage non trouvé.'], 404);
        }
        try {

            // Valider les données entrantes
            $validatedData = $request->validate([
                'auteur' => 'sometimes|string',
                'titre' => 'sometimes|string',
                'anneeParution' => 'sometimes|integer',
                'type' => 'sometimes|string',                
            ]);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Données invalides.', 'errors' => $e->validator->errors()], 422);
        }

        // Mettre à jour l'ouvrage avec les données validées
        $ouvrage->update($validatedData);

        // Retourner l'ouvrage mis à jour au format JSON
        return response()->json($ouvrage, 200);
    }
}
