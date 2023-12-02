<?php

use Illuminate\Http\Request;// De aqui sale response
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\personasControlador;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('personas', function () {
   // return "GET personas api";
    //});

    // Route::get('personas', function () {//php artisan db:seed
    //     $registros= DB::table('personas')
    //     ->select('id','imagen','username','password','token','nombres','disponible')
    //     ->get();
    //     $respuesta =['result' => 'ok', 'details' => $registros];
    //     return response() -> json($respuesta);
    //     });

    Route::get('personas', [personasControlador::class,"obtenerPersonas"]);

    Route::get('personas/{id}', [personasControlador::class,"obtenerPersonasId"]);

    Route::post('personas', [personasControlador::class, "crearPersona"]);

    // Route::post('personas/{nombre}/{disponible}', [personasControlador::class, "crearPersona"]);

    Route::put('personas/{id}', [personasControlador::class, "modificarPersona"]);
    
    Route::delete('personas/{id}', [personasControlador::class, "borrarPersona"]);