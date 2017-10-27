@extends('layouts.master')

@section('content')
  <div class="marging-padding">

    <h1>Lista de Clientes</h1>
    <hr>

    <div class="container">
      <div class="row">
        <form method="GET" class="input-group" action="/clientes/pesquisar">
          <input type="text" id="search" name="search" class="form-control"
          placeholder="Digite o nome do cliente" />
          <span class="input-group-btn">
            <button class="btn btn-success" type="button">
              <span class="fa fa-search fa-fw" aria-hidden="true"></span>
            </button>
          </span>
        </form>
      </div>
    </div>
    <br>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Setor</th>
          <th>Telefone</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clients as $client)
          <tr>
            <td><a href="/cliente/{{$client->id}}">{{ $client->name . " " .
              $client->surname }}</a></td>
              <td>{{ $client->setor }}</td>
              <td>{{ $client->phone_number }}</td>
              <td>
                <div class="form-group">
                  <form action="/cliente/{{$client->id}}/editar" method="GET">
                    {{csrf_field()}}
                    <button type="submit" class="linkbutton" target="blank" title="Editar">
                      <span class="fa fa-pencil fa-fw" aria-hidden="true"></span>
                    </button>
                  </form>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <form action="/cliente/{{$client->id}}/excluir" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$client->id}}" />
                    <button type="submit" class="linkbutton" target="blank" title="Excluir">
                      <span class="fa fa-trash fa-fw" aria-hidden="true"></span>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <hr>
      <div class="d-flex justify-content-end">
        <a href="/clientes/adicionar" class="btn btn-success">Adicionar Cliente</a>
      </div>
    </div>
  @endsection
