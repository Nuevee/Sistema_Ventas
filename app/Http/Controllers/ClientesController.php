<?php

namespace App\Http\Controllers;
use App\Models\Clientes;
use Illuminate\Http\Request;

class clientesController extends Controller
{

    //listado de clientes
    public function listar(){
        $data['clientes']= Clientes::paginate(3);
        return view('clientes.listar',$data);
    }
    //formulario cliente
    public function clientesform(){
        return view('clientes.clientesform');
    }

    //guardar cliente
    public function guardar(Request $request){
        $validator = $this->validate($request, [
            'nombre'=> 'required|string|max:255',
            'telefono'=> 'required|numeric|min:9',
            'correo'=> 'required|string|max:255|email|unique:clientes'
        ]);
        $userdata = request()->except('_token');
        Clientes::insert($userdata);
        return back()->with('clienteGuardado','Ciente Guardado');
    }
    //eliminar cliente
    public function delete($id_cliente){
        Clientes::destroy($id_cliente);
        return back()->with('clienteEliminado','Cliente Eliminado');

    }
}
