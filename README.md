# Projeto Laravel - CRUD

Este é um projeto Laravel criado como parte de um teste prático para uma vaga de desenvolvedor. O projeto inclui funcionalidades para cadastrar, listar, editar e excluir usuários.

## Requisitos

- PHP >= 8.2
- Composer
- MySQL >= 8.0

## Instalação

1. Clone o repositório para o seu ambiente local:

```sh
git clone https://github.com/Vinicius149/laravel-teste.git &&
cd laravel-teste
```

2. Instale as dependências do PHP usando o Composer:

```sh
composer install
```

3. Copie o arquivo .env.example para .env e configure suas variáveis de ambiente, incluindo as configurações do banco de dados:

```sh
cp .env.example .env
```

4. Gere a chave da aplicação:

```sh
php artisan key:generate
```
5. Configure o banco de dados no arquivo .env:
```sh
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=teste
DB_USERNAME=root
DB_PASSWORD=password
```

6. Execute as migrações para criar as tabelas no banco de dados:
```sh
php artisan migrate
```
# Executando o Projeto

1. Inicie o servidor de desenvolvimento do Laravel:

```sh
php artisan serve
```

2. Acesse o projeto no seu navegador:

```sh
http://localhost:8000
```

# Funcionalidades

```sh
Cadastrar Usuário: Acesse /sistema para cadastrar um novo usuário.
Listar Usuários: Acesse /lista para ver a lista de usuários cadastrados.
Editar Usuário: Na lista de usuários, clique em "Editar" para modificar os dados de um usuário.
Excluir Usuário: Na lista de usuários, clique em "Excluir" para remover um usuário.
```
# Estrutura do Projeto
```sh
Controllers: UserController.php
Views: sistema e welcome.blade.php
Rotas: web.php
CSS: styles.css
```


Este `README.md` fornece instruções claras sobre como configurar e executar o projeto Laravel, incluindo a instalação de dependências, configuração do banco de dados, execução de migrações e início do servidor de desenvolvimento. Além disso, descreve as funcionalidades principais do projeto e a estrutura dos arquivos.
