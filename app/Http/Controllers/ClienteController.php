<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $cliente;
    
    public function __construct()  {
        $this->cliente = new Cliente();
    }
    
    public function index(){
        return view("cliente.index");
    }
    public function salvar(Request $request){
        Cliente::create($request->all());
        return redirect("/cliente");
    }
    public function editar($id){
        $cliente = $this->getCliente($id);
        
        return view('Cliente.editar', [
            'cliente'   => $cliente
        ]);       
    }
    
    protected function getCliente($id)  {
        return $this->cliente->find($id);
    }

    public function pesquisar(Request $request){       
        $filtro = "";
        //filtra por codigo
        if ($request->id_cliente != ""){
            $filtro = $filtro." AND id = ".$request->id_cliente;
        }
        //filtra por nome
        if ($request->nome != ""){
            $filtro = $filtro." AND nome LIKE '%".$request->nome."%'";
        }
        //filtra por cpf
        if ($request->cpf != ""){
            $filtro = $filtro." AND cpf = '".$request->cpf."'";
        }
        //filtra por data de nascimento
        if ($request->data_nasc != ""){
            $filtro = $filtro." AND data_nasc = ".$request->data_nasc;
        }
        //filtra por email
        if ($request->email != ""){
            $filtro = $filtro." AND email LIKE '%".$request->email."%'";
        }
        //filtra por telefone
        if ($request->telefone != ""){
            $filtro = $filtro." AND telefone = ".$request->telefone;
        }
        //filtra por telefone
        if ($request->telefone != ""){
            $filtro = $filtro." AND telefone = ".$request->telefone;
        }
        //filtra por endereco
        if ($request->endereco != ""){
            $filtro = $filtro." AND endereco LIKE '%".$request->endereco."%'";
        } 
        $sql = "SELECT * FROM CLIENTE WHERE id > 0".$filtro;
        $resultSet = DB::select($sql);
        return $resultSet;
     }
}
