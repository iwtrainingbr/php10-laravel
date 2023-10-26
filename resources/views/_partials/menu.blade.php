<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body class="container">
    <nav class="mb-3 mt-3">
        <a href="/terrenos" class="btn {{ $page === 'list' ? 'btn-dark' : 'btn-outline-dark' }}">Listar</a>
        <a href="/terrenos/add" class="btn {{ $page === 'add' ? 'btn-dark' : 'btn-outline-dark' }}">Novo</a>
    </nav>
    <hr>

