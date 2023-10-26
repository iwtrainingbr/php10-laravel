# Laravel API

## Requisitos
- PHP >= 8
    - Extensions PHP:
        - curl
        - json
        - mysqli
- MySQL ou MariaDB
- Composer

## Primeiro para executar a aplicação

Instale as dependencias:
- `composer install`


Configure o arquivo de ambiente, copiando o `.env.example` para um novo arquivo `.env`


Execute as migrations para atualizar o banco de dados:
- `php artisan migrate`


Execute o servidor:
- `php -S localhost:8000 -t public`


## Documentação API RESTful

Categoria: 
    - id (int)
    - nome (string)
    - descricao (string)
    - createdAt
    - updatedAt

### Endpoints
- GET /categorias
- GET /categorias/:id
- POST /categorias
- PATCH /categorias/:id
- DELETE /categorias/:id 
