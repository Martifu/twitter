<?php

namespace App\Http\Controllers;

use App\publicaciones;
use Illuminate\Http\Request;

class publicacion extends Controller
{
    function todasPublicaciones()
    {
        $publicaciones = publicaciones::all();
        return view('Inicio', compact('publicaciones'));
    }

}
