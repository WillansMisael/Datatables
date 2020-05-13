<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('users',function(){
    //carga del lado del servidor
    //instalamos yajra con composer require yajra/laravel-datatables-oracle
    //formateo de datos 

    return datatables()
    ->eloquent(App\User::query())
    ->addColumn('btn','actions')
    ->rawColumns(['btn'])
    ->toJson();
});
