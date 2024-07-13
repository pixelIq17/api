<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class cliente_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->Nombres_cliente = $request->Nombres_cliente;
        $clientes->Apellidos_cliente = $request->Apellidos_cliente;
        $clientes->save();

        return response()->json([
            "message" => "Registro Agregado Correctamente!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        $clientes = Cliente::find($cliente);

        if(!empty($clientes)) {
            return response()->json($clientes);
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
    public function update(Request $request, Cliente $cliente)
    {
        $clientes = Cliente::find($cliente);

        $clientes->Nombres_cliente = $request->Nombres_cliente;
        $clientes->Apellidos_cliente = $request->Apellidos_cliente;
        $clientes->save();

        return response()->json([
            "message" => "Registro Actualizado Correctamente!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $clientes = Cliente::find($cliente);
        $clientes->delete();

        return response()->json([
            "message" => "Registro Eliminado Correctamente!"
        ]);
    }
}
