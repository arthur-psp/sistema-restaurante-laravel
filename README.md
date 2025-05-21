# Sistema de Restaurante em Laravel

Sistema de restaurante desenvolvido em Laravel (PHP), que utiliza dados mockados para simular clientes, mesas, pedidos, produtos e itens de pedido. O sistema está integrado com banco de dados PostgreSQL.

## Funcionalidades

- Cadastro e gerenciamento de clientes, mesas e produtos
- Simulação de reservas de mesas e pedidos com dados gerados via Faker
- Conexão e persistência dos dados em PostgreSQL

## Tecnologias Utilizadas

- Laravel (PHP Framework)
- Faker (para dados mockados)
- PostgreSQL (banco de dados relacional)
- Composer (gerenciador de dependências PHP)

## Requisitos

- PHP >= 8.0
- Composer
- PostgreSQL instalado e configurado
- Extensões PHP necessárias para Laravel (pdo_pgsql, mbstring, etc.)

## Como Rodar

1. Clone o repositório:

   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
   cd nome-do-repositorio

2. Instale as dependências:

   ```bash
   composer install
   
3. Configure o arquivo .env com suas credenciais do PostgreSql:

   ```bash
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

4. Rode as migrations e seeders (que usam Faker para popular dados):

    ```bash
    php artisan migrate --seed

5. Inicie o servidor local

    ```
    php artisan serve

6. Acesse no navegador: http://localhost:8000


## Estrutura do Projeto

- /app - Código fonte do Laravel

- /database/factories - Factories que usam Faker para gerar dados

- /database/migrations - Scripts para criar as tabelas no banco

- /routes - Definição das rotas da aplicação

## Contato

Para dúvidas ou sugestões, entre em contato pelo email: apspolti@gmail.com



