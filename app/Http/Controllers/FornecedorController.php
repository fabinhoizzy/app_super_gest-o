<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function index() {
        return view('app.fornecedor.index');
    }
    public function listar(Request $request) {

        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->get();

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores]);
    }
    public function adicionar(Request $request) {
        $msg='';

        if($request->input('_token') != '' && $request->input('id') == '') {
            $regras = [
              'nome' => 'required|min:3|max:40',
              'site' => 'required',
               'uf' => 'required|min:2|max:2',
              'email' => 'email'
            ];
            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' =>  'O campo nome deve ter no mínino 3 caracteres',
                'nome.max' =>  'O campo nome deve ter no máxino 3 caracteres',
                'uf.min' =>  'O campo nome deve ter no mínino 3 caracteres',
                'uf.max' =>  'O campo nome deve ter no máximo 3 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = "Cadastro realizado com sucesso";

        }
        //edição

        if($request->input('_token') != '' && $request->input('id') != '') {
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update) {
                $msg = 'Atualização realizada com sucesso';
            } else {
                echo 'Erro ao atualizar os dados';
            }

            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function editar($id, $msg = '') {
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }
}
