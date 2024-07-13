<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();
        return response()->json($autos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Numero_placa' => 'required|string',
            'ID_modelo' => 'required|string',
            'ID_marca' => 'required|string',
            'Precio_auto' => 'required|numeric',
        ]);

        $auto = Auto::create($request->all());

        return response()->json([
            "message" => "Registro Agregado Correctamente!",
            "auto" => $auto
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(  $auto)
    {
        $auto = Auto::find($auto);
        if(!empty($auto)) {
            return response()->json($auto);
        }
        else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auto $auto)
    {
        $request->validate([
            'Numero_placa' => 'required|string',
            'ID_modelo' => 'required|string',
            'ID_marca' => 'required|string',
            'Precio_auto' => 'required|numeric',
        ]);
    
        $auto->update($request->all());
    
        return response()->json([
            "message" => "Registro Actualizado Correctamente!",
            "auto" => $auto
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        $auto->delete();

        return response()->json([
            "message" => "Registro Eliminado Correctamente!"
        ]);
    }
}

