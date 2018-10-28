<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view("cliente.index");
    }
    public function salvar(Request $request){
        $cliente = Cliente::create($request->all());
        return redirect("/cliente");
    }
}
