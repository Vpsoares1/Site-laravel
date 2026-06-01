<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roupas;

class RoupasController extends Controller
{
    public function cadastro_roupa(Request $request){
    return view ('cadastro_roupa');
    }

    public function salvar_roupa(Request $request){

        $request->validate([
            'nome_roupa' => 'required',
            'descricao_roupa' => 'nullable',
            'preco_roupa' => 'required',
            'estoque_roupa' => 'required',
            'tamanho_roupa' => 'nullable',
            'peca_roupa' => 'nullable',
        ]);

        try {
            $roupa = new Roupas();
            $roupa->nome = $request->nome_roupa;
            $roupa->descrição = $request->descricao_roupa;
            $roupa->preço = $request->preco_roupa;
            $roupa->estoque = $request->estoque_roupa;
            $roupa->tamanho = $request->tamanho_roupa;
            $roupa->peça = $request->peca_roupa;
            $roupa->save();

            $data =[];

            $data = [
                'erro' => 'n',
                'msg' => 'Roupa cadastrada com sucesso'


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

     

    public function lista_roupa(Request $request){
        
    $roupa = Roupas::all(); 
    return view ('lista_roupa')->with('roupas', $roupa);
    }
}
