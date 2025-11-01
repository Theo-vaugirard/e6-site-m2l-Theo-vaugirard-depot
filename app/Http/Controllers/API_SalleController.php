<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class API_SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('API_SalleController/index called successfully'); 

        $salles = Salle::all();

        return response()->json($salles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('API_SalleController/store called with data: ' . json_encode($request->all()));

        $validatedData = $request->validate([
            'numero_salle' => 'required|integer',
            'nom' => 'required|string|max:30',
            'capacite' => 'nullable|integer',
            'equipements' => 'nullable|string',
            'services' => 'nullable|string',
            'batiment' => 'nullable|char:1',
        ]);

        $salle = Salle::create($validatedData);
        return response()->json($salle, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $numero_salle)
    {
        Log::info('API_SalleController/show called with numero_salle: ' . $numero_salle);

        $salle = Salle::findOrFail($numero_salle);
        return response()->json($salle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $numero_salle)
    {
        Log::info('API_SalleController/update called with numero_salle: ' . $numero_salle . ' and data: ' . json_encode($request->all()));

        $salle = Salle::findOrFail($numero_salle);

        $validatedData = $request->validate([
            'nom' => 'nullable|string|max:30',
            'capacite' => 'nullable|integer',
            'equipements' => 'nullable|string',
            'services' => 'nullable|string',
            'batiment' => 'nullable|char:1',
        ]);

        $salle->update($validatedData);
        return response()->json($salle);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $numero_salle)
    {
        Log::info('API_SalleController/destroy called with numero_salle: ' . $numero_salle);
        
        $salle = Salle::findOrFail($numero_salle);
        $salle->delete();
        return response()->json(null, 204);
    }
}
