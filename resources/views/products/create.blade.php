@extends('layouts.master')

@section('content')
  <div class="marging-padding">

    <div>
      <h3>Cadastro de Produtos</h3>
      <hr>
    </div>

    <form method="POST" action="/produtos">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Nome do Produto</label>
        <input type="text" class="form-control" id="name" placeholder="Nome"
        name="name" required>
      </div>

      <div class="form-group">
        <label for="value">Preço</label>
        <input type="number" class="form-control" id="value" size="99" step="0.01"
        placeholder="0,00" name="value" required>
      </div>

      <div class="form-group d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Adicionar</button>
      </div>

    </div>
  @endsection
