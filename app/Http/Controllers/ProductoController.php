<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function createProducto(){


        $producto = DB::table("productos")->get();

        return view('producto',["producto"=>$producto]);
    }
}
