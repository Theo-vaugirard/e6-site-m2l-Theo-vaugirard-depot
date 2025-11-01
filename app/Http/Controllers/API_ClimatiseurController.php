<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Climatiseur;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class API_ClimatiseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('API_ClimatiseurController/index called successfully');

        $climatiseurs = Climatiseur::with(['salle'])->get();

        if ($climatiseurs->isEmpty()) {
            return response()->json(['message' => 'Aucun climatiseur trouvé.'], 404);
        }

        return response()->json($climatiseurs, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('API_ClimatiseurController/store called with data: ' . json_encode($request->all()));

        try{
        $validatedData = $request->validate([  
            'salle.numero_salle' => 'required|integer|exists:salles,numero_salle',
            'marque' => 'required|string|max:100',
            'modele' => 'required|string|max:100',
            'puissance' => 'required|integer',
            'surface_min' => 'sometimes|integer',
            'surface_max' => 'sometimes|integer',
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json(['message' => 'Données invalides.', 'errors' => $e->errors()], 422);
    }

        $climatiseur = Climatiseur::create($validatedData);

        return response()->json("Création réussie du climatiseur réussie $climatiseur.", 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        Log::info('API_ClimatiseurController/show called with id: ' . $id);

        $climatiseur = Climatiseur::with(['salle'])->find($id);

        if (!$climatiseur) {
            return response()->json(['message' => 'Climatiseur non trouvé.'], 404);
        }

        return response()->json($climatiseur, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        Log::info('Api_ClimatiseurController/UPDATE called successfully' . 'Climatiseur ID: '.$id);

        $climatiseur = Climatiseur::find($id);

        if (!$climatiseur) {
            return response()->json(['message' => 'Climatiseur non trouvé.'], 404);
        }

        try {
            $validatedData = $request->validate([
                'salle.numero_salle' => 'required|integer|exists:salles,numero_salle',
                'marque' => 'sometimes|string|max:100',
                'modele' => 'sometimes|string|max:100',
                'puissance' => 'sometimes|integer',
                'surface_min' => 'sometimes|integer',
                'surface_max' => 'sometimes|integer',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['message' => 'Données invalides.', 'errors' => $e->errors()], 422);
        }

        $climatiseur->update($validatedData);

        return response()->json($climatiseur, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Log::info('API_ClimatiseurController/destroy called with id: ' . $id);
        
        $climatiseur = Climatiseur::find($id);

        if (!$climatiseur) {
            return response()->json(['message' => 'Climatiseur non trouvé.'], 404);
        }

        $climatiseur->delete();

        return response()->json(['message' => 'Climatiseur supprimé avec succès.']);
    }
}
