<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function canciones($id = null)
    {
        $listaCanciones = [];
        $listaCanciones[] = ['Nombre' => 'Hola', 'Artista' => 'Yo'];
        $listaCanciones[] = ['Nombre' => 'Hola2', 'Artista' => 'Yo2'];
        $listaCanciones[] = ['Nombre' => 'Hola3', 'Artista' => 'Yo3'];
    
        if(!is_null($id)){
            $cancion_se = $listaCanciones[$id];
        } else {
            $cancion_se = null;
        }
    
        return view('canciones', compact('listaCanciones', 'cancion_se'));
            //->with(['listaCanciones' => $listaCanciones]);
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function bautizo(Request $request)
    { 
        //dd($request ->all(), $request->nombre  ,$request->input('codigo'));
        //Recibe y Valida
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'codigo' => 'required|integer',
        ]);
        //Guarda
        //Redirecciona
        

    }
}
