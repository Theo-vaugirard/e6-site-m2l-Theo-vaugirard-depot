<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ouvrage;
use Illuminate\Support\Facades\Log;

class API_TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($typeOuvrage)
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('API_TypeController/store called with data: ' . json_encode($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $types, string $id)
    {
        Log::info('API_TypeController/show called with types: ' . $types . ' and id: ' . $id);

        return response()->json(['types' => $types, 'ouvrage' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info('API_TypeController/update called with id: ' . $id . ' and data: ' . json_encode($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Log::info('API_TypeController/destroy called with id: ' . $id);
    }
}
