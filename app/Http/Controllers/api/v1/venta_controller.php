<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use Illuminate\Http\Request;

class venta_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        return response()->json($ventas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ventas = new Venta();
        $ventas->ID_auto = $request->ID_auto;
        $ventas->ID_empleado = $request->ID_empleado;
        $ventas->ID_cliente = $request->ID_cliente;
        $ventas->Fecha_venta = $request->Fecha_venta;
        $ventas->Total_venta = $request->Total_venta;
        $ventas->save();

        return response()->json([
            "message" => "Registro Agregado Correctamente!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        $ventas = Venta::find($venta);

        if(!empty($ventas)) {
            return response()->json($ventas);
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
    public function update(Request $request, Venta $venta)
    {
        $ventas = Venta::find($venta);

        $ventas->ID_auto = $request->ID_auto;
        $ventas->ID_empleado = $request->ID_empleado;
        $ventas->ID_cliente = $request->ID_cliente;
        $ventas->Fecha_venta = $request->Fecha_venta;
        $ventas->Total_venta = $request->Total_venta;
        $ventas->save();

        return response()->json([
            "message" => "Registro Actualizado Correctamente!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $ventas = Venta::find($venta);
        $ventas->delete();

        return response()->json([
            "message" => "Registro Eliminado Correctamente!"
        ]);
    }
}
