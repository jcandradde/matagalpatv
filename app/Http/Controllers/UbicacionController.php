<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    
    //
    
    public function index()
    {
        
        
        return view('ubicacion',['ubicaciones' => [2,3,466], 'title' => 'ubicaciones' ]);
    }
}
