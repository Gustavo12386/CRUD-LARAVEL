@extends('layout.app')

@section('title','Edição')

@section('content')

<div class="container mt-5">
    <h1>Editar jogo</h1>
    <hr>
    <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="post">
        @csrf
        @method('PUT')
       <div class="form-group">
           <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" name="nome" value="{{ $jogos->nome }}" class="form-control" placeholder="Digite o nome do jogo">
           </div>
           <br>
           <div class="form-group">
              <label for="categoria">Categoria:</label>
              <input type="text" name="categoria" value="{{ $jogos->categoria }}" class="form-control" placeholder="Digite uma categoria do jogo">
           </div>
           <br>
           <div class="form-group">
              <label for="nome">Ano de Criação:</label>
              <input type="number" name="ano_criacao" value="{{ $jogos->ano_criacao }}" class="form-control" placeholder="Digite o ano de criação do jogo">
           </div>
           <br>
           <div class="form-group">
              <label for="nome">Valor:</label>
              <input type="text" name="valor" value="{{ $jogos->valor }}" class="form-control" placeholder="Digite o preço do jogo">
           </div>
           <br>
           <div class="form-group">
              <input type="submit" name="submit" class="btn btn-success" value="atualizar">
           </div>
       </div>
    </form>
</div>

@endsection