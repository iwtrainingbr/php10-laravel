@include ('_partials/menu', ['page' => 'add'])

<h2>Novo Terreno</h2>

<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label>Nome</label>
    <input type="text" name="nome" placeholder="Nome" class="form-control mb-3">

    <label>Cidade</label>
    <input type="text" name="cidade" placeholder="Nome" class="form-control mb-3">

    <button class="btn btn-primary">Pronto</button>
</form>