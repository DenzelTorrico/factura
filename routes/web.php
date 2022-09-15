<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Register;
use App\Http\Controllers\Users;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/users",[Users::class,"createusers"])->name("createusers.index");
Route::get('/login', [Users::class,"create"])->name("login.index");
Route::post('/login', [Users::class,"store"])->name("login.store");

Route::get('/register', [Register::class,"create"])->name("register.index");
Route::post('/register', [Register::class,"store"])->name("register.store");

Route::get("/clientes",[ClienteController::class,"createclientes"])->name("createclientes.index");
Route::post("/clientes",[ClienteController::class,"storeclientes"])->name("storeclientes.store");
Route::put("/clientes/{id}",[ClienteController::class,"updateclientes"])->name("clientes.update");

Route::get("/productos",[ProductoController::class,"createProducto"])->name("createProducto.index");
Route::post("/productos",[ProductoController::class,"storeProducto"])->name("storeProducto.store");
