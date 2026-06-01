@extends('layouts.principal')

@section('title', 'Cadastro de Produto')

@section('content')


<div class="container">
    <h1 class="text-center">Lista de Produtos</h1>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">descrição</th>
      <th scope="col">preço</th>
      <th scope="col">estoque</th>
      <th scope="col">tipo</th>
      <th scope="col">data_validade</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $p)
    <tr>
      <th scope="row">{{ $p->id }}</th>
      <td>{{ $p->nome }}</td>
      <td>{{ $p->descricao }}</td>
      <td>{{ $p->preco }}</td>
      <td>{{ $p->estoque }}</td>
      <td>{{ $p->tipo }}</td>
      <td>{{ $p->data_validade }}</td>
    </tr>

    @endforeach
  </tbody>
</table>
</div>


@endsection