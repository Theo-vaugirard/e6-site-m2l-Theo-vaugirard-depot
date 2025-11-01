<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervenant;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class API_IntervenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('API_IntervenantController/index called successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('API_IntervenantController/store called with data: ' . json_encode($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Log::info('API_IntervenantController/show called with id: ' . $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info('API_IntervenantController/update called with id: ' . $id . ' and data: ' . json_encode($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Log::info('API_IntervenantController/destroy called with id: ' . $id);
    }
}
