<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\personas;

class personasControlador extends Controller
{
   public function obtenerPersonas() {//php artisan db:seed
            $registros= DB::table('personas')
            ->select('id','imagen','username','password','token','nombres','disponible')
            ->get();
            $respuesta =['result' => 'ok', 'details' => $registros];
            return response() -> json($respuesta);
   }

   public function obtenerPersonasId($id) {//php artisan db:seed
    $registros= DB::table('personas')
    ->select('id','imagen','username','password','token','nombres','disponible')
    ->where('id', '=', $id)
    ->get();
    $respuesta =['result' => 'ok', 'details' => $registros];
    return response() -> json($respuesta);
}

public function crearPersona(Request $request) {//php artisan db:seed
    personas::create([
        // 'imagen' => $request->imagen,
        // 'username' => $request->username,
        // 'password' => $request->password,
        // 'token' => $request-> token,
        'nombres' => $request->nombres,
        'disponible' => $request->disponible
    ]);
}

// public function crearPersona($nombre, $disponible) {//php artisan db:seed
//     personas::create([
//         // 'imagen' => $request->imagen,
//         // 'username' => $request->username,
//         // 'password' => $request->password,
//         // 'token' => $request-> token,
//         'nombres' => $nombre,
//         'disponible' => $disponible
//        ]);
// }

public function modificarPersona(Request $request, $id) {//php artisan db:seed
        $personaModificada = personas::find($id);
        $personaModificada -> nombres = $request->nombres;
        $personaModificada -> disponible = $request->disponible;
        $personaModificada->save();
}

public function borrarPersona($id){
    personas::destroy($id);
}
}
