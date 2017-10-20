
<div class="navbar navbar-dark bg-dark">
  <div class="container d-flex justify-content-between">
    <a href="/" class="navbar-brand">LH</a>
    @if(Auth::check())
      <a href="/clientes" class="navbar-brand small-font">Clientes</a>
      <a href="/produtos" class="navbar-brand small-font">Produtos</a>
      <a href="/venda" class="navbar-brand small-font">Nova Venda</a>
      <span class="navbar-brand ml-auto small-font">{{'Bem vindo(a), ' . Auth::user()->username}}</span>
      <span class="navbar-brand small-font">{{'|'}}</span>
      <a href="/logout" class="navbar-brand small-font">Sair</a>
    @else
      <a href="/login" class="navbar-brand ml-auto small-font">Login</a>
      <a href="/registrar" class="navbar-brand small-font">Cadastre-se</a>
    @endif

  </div>
</div>
