<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get("/lenguaje",[\App\Http\Controllers\LenguajeController::class,'index']);
route::get("/crearlenguaje",[\App\Http\Controllers\LenguajeController::class,'create']);
route::delete("/eliminar/{id}",[\App\Http\Controllers\LenguajeController::class,'destroy'])->name('destroy');
route::get("/mod/{id}",[\App\Http\Controllers\LenguajeController::class,'edit']);
route::patch("/modifi/{id}",[\App\Http\Controllers\LenguajeController::class,'update'])->name("update");
route::post("/guardar",[\App\Http\Controllers\LenguajeController::class,'store']);

route::get("/",[\App\Http\Controllers\CriptomonedaController::class,'index']);
route::get("/crear",[\App\Http\Controllers\CriptomonedaController::class,'create']);
route::get("/editar/{id}",[\App\Http\Controllers\CriptomonedaController::class,'edit']);
route::delete("/delete/{id}",[\App\Http\Controllers\CriptomonedaController::class,'destroy'])->name('destroy');
route::post("/save",[\App\Http\Controllers\CriptomonedaController::class,'store']);
route::patch("/modificar/{id}",[\App\Http\Controllers\CriptomonedaController::class,'update'])->name("update");

//Route::get('/', function () {
//    return view('index');
//});
