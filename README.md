# Teste

Este projeto é destinado a pôr em exercício aprendizados e conhecimento técnico simulando um cadastro de pessoas.

## Breifing
### Objetivo
O principal objetivo deste projeto é criar um API em Laravel, que possibilita:

- Listar produtos disponíveis
- Cadastrar nova venda
- Consultar vendas realizadas
- Consultar uma venda específica
- Cancelar uma venda
- Cadastrar novas produtos a uma venda


# Padrões adotados
Para criação da API foi adotado alguns padrões e conceitos para melhor legibilidade e manutenção do projeto, como:
SOLID
Design Pattern (Requests, Resources, Services, Filters)

# Tecnologias
- API desenvolvida em Laravel
- Banco de Dados em MYSQL
- PHPUnit para testes

## Uso
Para rodar o projeto é necessário ter o **docker** configurador e um terminal **bash**. Após o clonar o repositório, deve ser acessada a pasta raiz do projeto e rodado o comando: `docker compose up -d` no terminal. Feito isso, só aguardar o projeto rodar e executar todos os scripts necessários. Caso desejar dados nas tabelas de banco de dados pode rodar o seeder com o comando `php artisan db:seed`. Para rodar os testes de integração, acessar o container e executar o comando `php artisan test`.

**Produtos:**

Lista de produtos: **[GET]** `/api/products`.

Mostrar um produto: **[GET]** `/api/products/1`.

Salvar um produto: **[POST]** `/api/products`, payload: `{ "name": "{name}", "description": "{description}", "price": {price} }`.

Alterar um produto: **[PUT]** `/api/products/1`, payload: `{ "name": "{name}", "description": "{description}", "price": {price} }`.

Excluir um produto: **[DELETE]** `/api/products/1`.

**COLLECTION**

[https://api.postman.com/collections/3409729-b94465d6-c025-48ce-b583-cdf3fac02277?access_key=PMAT-01HQXDY211TBGCRFZG1TE6RJE4](https://api.postman.com/collections/3409729-b94465d6-c025-48ce-b583-cdf3fac02277?access_key=PMAT-01HQXDY211TBGCRFZG1TE6RJE4)

## Autor
- Autor - Jonathan Cruz
- [https://jonathansc92.github.io/jonathancruzdev/?language=ptBr](https://jonathansc92.github.io/jonathancruzdev/?language=ptBr)