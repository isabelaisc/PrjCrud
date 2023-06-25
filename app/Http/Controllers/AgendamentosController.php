<?php

namespace App\Http\Controllers;
use App\Models\Agendamentos;
use Illuminate\Http\Request;

class AgendamentosController extends Controller
{
    public function store(Request $request){

     // Enviando os dados para o banco de dados
     $agendamento = new Agendamentos();
     $agendamento->nome = $request->nome;
     $agendamento->telefone = $request->telefone;
     $agendamento->origem = $request->origem;
     $agendamento->data_contato = $request->contato;
     $agendamento->observacao = $request->observacao;
     $agendamento->save();

     // Retornando para o formulário de cadastro
     return redirect()->route('index')
         ->width('success', 'Agendamento criado com sucesso!');

}

    // Método get para mostrar os dados na tabela
    public function show(){

        //Recupers todos os agendamentos do banco de dados
        $tableagenda = Agendamentos::all();

        // Retorna a view 'consultar' com os agendamentos recuperados
        return view('consulta', ['agendamentos' => $tableagenda]); 
    }
    
    // Editar os dados da tabela
    public function edit($id){

        //Referencia os dados do banco de dados
        $tableagenda = Agendamentos::findOrFail($id);

        // Retorna a view 'editar' com os dados alterados
        return view('editar', ['agendamentos' => $tableagenda]); 
    }

    // Atualizando os dados editados da tabela
    public function update(Request $request){

        //Referencia os dados do banco de dados
        Agendamentos::findOrFail($request -> $id)->update($request->all());

        // Retorna a view 'consulta' com os dados alterados
        return redirect('/consulta'); 
    }

    // Excluindo os dados da tabela
    public function delete($id){

        //Referencia os dados do banco de dados
        $agendamentos = Agendamentos::findOrFail($id)->delete();

        // Retorna a view 'consulta' com os dados excluídos
        return redirect('/consulta'); 
    }

}
?>
