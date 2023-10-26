@include ('_partials/menu', ['page' => 'list'])


<h2>Terrenos</h2>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($terrenos as $cada) 
            <tr>
                <td>{{ $cada->id }}</td>
                <td>{{ $cada->nome }}</td>
                <td>{{ $cada->cidade }}</td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>