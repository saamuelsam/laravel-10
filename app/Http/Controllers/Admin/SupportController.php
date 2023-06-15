<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {

        $supports = $support->all();
        /* dd($supports); */

        return view('/admin/supports/index', compact('supports'));
    }

    public function show(string|int $id)  //trabalhando com tipagem. E temos o id do suport que vai manipular
    {

        /*
        if(!$support = Support::find($id)) //recuperando o support pelo id */

        // Support::find($id)
        // Support::where('id', $id)->first();// permite especificar qual coluna vou filtrar
        // Support::where('id', '!=', $id)->first();
        if(!$support = Support::find($id)){//recuperando o support pelo id. O metodo find recupera um item pelo id
           return back(); //se ainda não tiver o valor do id ele retorna para a view
        } 
       return view('admin/supports/show', compact('support')); //retorna a view show  
    }

    public function create() 
    {
        return view('admin/supports/create');
    }

    public function store(Request $resquest, Support $support /* O support faz todos os cadastros */) 
    {
        $data = $resquest->all();//pega todos os dados
        $data['status'] = 'a';

        $support->create($data);//devolve o objeto que acabou de ser inserido

        return redirect()->route('supports.index'); //redireciona o usuario depois de enviar o formulario
    }
}   
