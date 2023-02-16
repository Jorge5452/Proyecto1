<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/canciones/{id?}', [PaginaController::class, 'canciones']);


Route::get('/contacto', [PaginaController::class, 'contacto']);

Route::post('/contacto', [PaginaController::class, 'bautizo']);


    // route::get('canciones/{id}', function ($id){
    //     $listaCanciones = [];
    //     $listaCanciones[] = ['Nombre' => 'Hola', 'Artista' => 'Yo'];
    //     $listaCanciones[] = ['Nombre' => 'Hola2', 'Artista' => 'Yo2'];
    //     $listaCanciones[] = ['Nombre' => 'Hola3', 'Artista' => 'Yo3'];

    //     $cancion_seleccionada = $listaCanciones[$id];

    //     $otravariable = 'HOLA';
    //     //dd($listaCanciones);

    //     return view('cancion-detalle', compact('cancion_seleccionada'));
    // });