<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\v1\AutoController;

Route::prefix('v1')->group(function () {

    Route::resource('marcas', 'api\v1\marca_controller');
    Route::post('marcas/{marca}', 'api\v1\marca_controller@update');
    Route::delete('marcas/{marca}', 'api\v1\marca_controller@destroy');

    Route::resource('modelos', 'api\v1\modelo_controller');
    Route::post('modelos/{modelo}', 'api\v1\modelo_controller@update');
    Route::delete('modelos/{modelo}', 'api\v1\modelo_controller@destroy');


    Route::get('autos', [AutoController::class, 'index']);
    Route::post('autos', [AutoController::class, 'store']);
    Route::get('autos/{auto}', [AutoController::class, 'show']);
    Route::put('autos/{auto}', [AutoController::class, 'update']);
    Route::delete('autos/{auto}', [AutoController::class, 'destroy']);
    
    Route::resource('cargos', 'api\v1\cargo_controller');
    Route::post('cargos/{cargo}', 'api\v1\cargo_controller@update');
    Route::delete('cargos/{cargo}', 'api\v1\cargo_controller@destroy');

    Route::resource('clientes', 'api\v1\cliente_controller');
    Route::post('clientes/{cliente}', 'api\v1\cliente_controller@update');
    Route::delete('clientes/{cliente}', 'api\v1\cliente_controller@destroy');

    Route::resource('empleados', 'api\v1\empleado_controller');
    Route::post('empleados/{empleado}', 'api\v1\empleado_controller@update');
    Route::delete('empleados/{empleado}', 'api\v1\empleado_controller@destroy');

    Route::resource('ventas', 'api\v1\venta_controller');
    Route::post('ventas/{venta}', 'api\v1\venta_controller@update');
    Route::delete('ventas/{venta}', 'api\v1\venta_controller@destroy');

});