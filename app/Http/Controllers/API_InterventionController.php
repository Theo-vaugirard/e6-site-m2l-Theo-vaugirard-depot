<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervention;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class API_InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('API_InterventionController/index called successfully');

        $interventions = Intervention::with(['salle', 'intervenant'])->get();

        if ($interventions->isEmpty()) {
            // Retourner une erreur 404 si aucune intervention n'est trouvée
            return response()->json(['message' => 'Aucune intervention trouvée.'], 404);
        }
        return response()->json($interventions,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('API_InterventionController/store called with data: ' . json_encode($request->all()));

        try {
            // Validation des données entrantes
            $validatedData = $request->validate([
                'salle.numero_salle' => 'required|integer|exists:salles,numero_salle',
                'intervenant.numero_intervenant' => 'required|integer|exists:intervenants,numero_intervenant',
                'date_heure' => 'sometimes|date',
                "motif" => 'sometimes|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Données invalides.', 'errors' => $e->errors()], 422);
        }

        // Création de la nouvelle intervention
        $intervention = Intervention::create($validatedData);

        // Retourner une réponse JSON avec les détails de l'intervention créée
        return response()->json("Création de l'intervention réussie : $intervention", 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        Log::info('API_InterventionController/show called with id: ' . $id);

        $intervention = Intervention::with(['salle', 'intervenant'])->find($id);

        if (!$intervention) {
            return response()->json(['message' => 'Intervention non trouvée.'], 404);
        }

        return response()->json($intervention,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        Log::info('API_InterventionController/update called with id: ' . $id);

        $intervention = Intervention::find($id);

        if (!$intervention) {
            return response()->json(['message' => 'Intervention non trouvée.'], 404);
        }

        try {
            // Validation des données entrantes
            $validatedData = $request->validate([
                'salle.numero_salle' => 'required|integer|exists:salles,numero_salle',
                'intervenant.numero_intervenant' => 'required|integer|exists:intervenants,numero_intervenant',
                'date_heure' => 'sometimes|date',
                "motif" => 'sometimes|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Données invalides.', 'errors' => $e->errors()], 422);
        }

        // Mise à jour de l'intervention avec les données validées
        $intervention->update($validatedData);

        return response()->json($intervention,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Log::info('API_InterventionController/destroy called with id: ' . $id);
        
        $intervention = Intervention::find($id);

        if (!$intervention) {
            return response()->json(['message' => 'Intervention non trouvée.'], 404);
        }

        // Suppression de l'intervention
        $intervention->delete();

        return response()->json(['message' => 'Intervention supprimée avec succès.'],200);
    }
}
