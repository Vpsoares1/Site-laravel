<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function cadastro_produto(Request $request){
    return view ('cadastro_produto');
    }

    public function salvar_produto(Request $request){

        $request->validate([
            'nome_produto' => 'required',
            'descricao_produto' => 'nullable',
            'preco_produto' => 'required',
            'estoque_produto' => 'required',
            'data_validade' => 'nullable',
            'tipo_produto' => 'nullable',
        ]);

        try {
            $produto = new Produto();
            $produto->nome = $request->nome_produto;
            $produto->descrição = $request->descricao_produto;
            $produto->preço = $request->preco_produto;
            $produto->estoque = $request->estoque_produto;
            $produto->data_validade = $request->data_validade;
            $produto->tipo = $request->tipo_produto;
            $produto->save();

            $data =[];

            $data = [
                'erro' => 'n',
                'msg' => 'Produto cadastrado com sucesso'


            ];

            return response()-> json($data, 200);



        } catch (\Throwable $th) {
            throw $th;
            $data = [
                'erro' => 's',
                'msg' => 'Erro ao cadastrar produto'
            ];
            return response()->json($data, 200);
        }
                                                                                                                                                                                                                                                                                                                    


    }

    public function lista_produto(Request $request){
        
    $produtos = Produto::all(); 
    return view ('lista_produto')->with('produtos', $produtos);
    }


}
