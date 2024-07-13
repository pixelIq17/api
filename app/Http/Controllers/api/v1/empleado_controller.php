<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Empleados;
use Illuminate\Http\Request;

class empleado_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleados::all();
        return response()->json($empleados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleados = new Empleados();
        $empleados->DNI_empleado = $request->DNI_empleado;
        $empleados->Nombres_empleado = $request->Nombres_empleado;
        $empleados->Apellidos_empleado = $request->Apellidos_empleado;
        $empleados->ID_cargo = $request->ID_cargo;
        $empleados->save();

        return response()->json([
            "message" => "Registro Agregado Correctamente!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleados $empleados)
    {
        $empleados = Empleados::find($empleados);

        if(!empty($empleados)) {
            return response()->json($empleados);
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
    public function update(Request $request, Empleados $empleados)
    {
        $empleados = Empleados::find($empleados);

        $empleados->DNI_empleado = $request->DNI_empleado;
        $empleados->Nombres_empleado = $request->Nombres_empleado;
        $empleados->Apellidos_empleado = $request->Apellidos_empleado;
        $empleados->ID_cargo = $request->ID_cargo;
        $empleados->save();

        return response()->json([
            "message" => "Registro Actualizado Correctamente!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleados $empleados)
    {
        $empleados = Empleados::find($empleados);
        $empleados->delete();

        return response()->json([
            "message" => "Registro Eliminado Correctamente!"
        ]);
    }
}
