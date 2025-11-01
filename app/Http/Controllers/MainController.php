<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function index()
    {
        Log::info('MainController index method called');

        return view('welcome', ['isWelcome' => true]);
    }

     public function evenements()
    {
        Log::info('MainController evenements method called');
        return view('evenements');
    }

    public function contact()
    {
        Log::info('MainController contact method called');
        return view('contact');
    }
}
