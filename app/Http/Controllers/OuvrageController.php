<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(/*$type_ouvrage*/)
    {
        Log::info('OuvrageController index method called');
         //équivalent à "select * from ouvrages"
         $resultats = Ouvrage::all();

         $nbOuv = Ouvrage::count();
      
         //demande d'affichage de la liste des ouvrages à la vue
         return view('ouvrages', ["leslivres" => $resultats, "nbLivres" => $nbOuv]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::info('OuvrageController create method called');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('OuvrageController store method called');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ouvrage $ouvrage)
    {
        Log::info('OuvrageController show method called');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ouvrage $ouvrage)
    {
        Log::info('OuvrageController edit method called');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ouvrage $ouvrage)
    {
        Log::info('OuvrageController update method called');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrage $ouvrage)
    {
        Log::info('OuvrageController destroy method called');
    }
}
