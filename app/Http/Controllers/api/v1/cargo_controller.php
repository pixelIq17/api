<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\Request;

class cargo_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = Cargo::all();
        return response()->json($cargos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cargos = new Cargo();
        $cargos->Nombre_cargo = $request->Nombre_cargo;
        $cargos->Sueldo_cargo = $request->Sueldo_cargo;
        $cargos->save();

        return response()->json([
            "message" => "Registro Agregado Correctamente!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo)
    {
        $cargos = Cargo::find($cargo);

        if(!empty($cargos)) {
            return response()->json($cargos);
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
    public function update(Request $request, Cargo $cargo)
    {
        $cargos = Cargo::find($cargo);

        $cargos->Nombre_cargo = $request->Nombre_cargo;
        $cargos->Sueldo_cargo = $request->Sueldo_cargo;
        $cargos->save();

        return response()->json([
            "message" => "Registro Actualizado Correctamente!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        $cargos = Cargo::find($cargo);
        $cargos->delete();

        return response()->json([
            "message" => "Registro Eliminado Correctamente!"
        ]);
    }
}
