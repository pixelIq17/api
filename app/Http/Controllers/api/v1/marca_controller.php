<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;

class marca_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();
        return response()->json($marcas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $marcas = new Marca();
        $marcas->Nombre_marca = $request->Nombre_marca;
        $marcas->save();

        return response()->json([
            "message" => "Registro Agregado Correctamente!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        $marcas = Marca::find($marca);

        if(!empty($marcas)) {
            return response()->json($marcas);
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
    public function update(Request $request, Marca $marca)
    {
        $marcas = Marca::find($marca);

        $marcas->Nombre_marca = $request->Nombre_marca;
        $marcas->save();

        return response()->json([
            "message" => "Registro Actualizado Correctamente!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca)
    {
        $marcas = Marca::find($marca);
        $marcas->delete();

        return response()->json([
            "message" => "Registro Eliminado Correctamente!"
        ]);
    }
}
