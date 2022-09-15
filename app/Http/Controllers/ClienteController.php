<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Alert;



class ClienteController extends Controller
{
    
    public function createclientes(){
        $clientes = DB::table('clientes')->get();
        Alert::alert('Title', 'Message', 'Type');
        return view("clientes",["clientes"=>$clientes]);
    }

    public function storeclientes(Request $request){
        $inserta =new Cliente();
        $inserta->Nombre=$request->name;
        $inserta->Telefono=$request->phone;
        $inserta->Email=$request->email;
        $inserta->Direccion=$request->direccion;
        $inserta->Estado=$request->estado;
        $inserta->save();

       // $clientes = DB::table('clientes')->get();
       return redirect()->to("/clientes");
        // return view("clientes",["clientes"=>$clientes]);
        //return view("clientes",["clientes"=>$clientes]);
    }
    public function updateclientes(Request $request, $id){
        $obtener = Cliente::find($id);
        
        $obtener->Nombre=$request->name;
        $obtener->Telefono=$request->phone;
        $obtener->Email=$request->email;
        $obtener->Direccion=$request->direccion;
        $obtener->Estado=$request->estado;
        $obtener->save();
        //$obtener->update($request);
       
        return redirect()->to("/clientes")->with('alert', 'Updated!');;
    }
}
