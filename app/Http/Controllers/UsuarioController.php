<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'tu_nombre, mensaje por medio del controlador']);
    }  
}



