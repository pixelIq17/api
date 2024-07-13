<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Modelo;
use Illuminate\Http\Request;

class modelo_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos = Modelo::all();
        return response()->json($modelos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $modelos = new Modelo();
        $modelos->Nombre_modelo = $request->Nombre_modelo;
        $modelos->ID_marca = $request->Nombre_modelo;
        $modelos->save();

        return response()->json([
            "message" => "Registro Agregado Correctamente!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Modelo $modelo)
    {
        $modelos = Modelo::find($modelo);

        if(!empty($modelos)) {
            return response()->json($modelos);
        }
        else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelo $modelo)
    {
        $modelos = Modelo::find($modelo);

        $modelos->Nombre_modelo = $request->Nombre_modelo;
        $modelos->ID_marca = $request->Nombre_modelo;
        $modelos->save();

        return response()->json([
            "message" => "Registro Actualizado Correctamente!"
        ]);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelo $modelo)
    {
        $modelos = Modelo::find($modelo);
        $modelos->delete();

        return response()->json([
            "message" => "Registro Eliminado Correctamente!"
        ]);
    }
}
