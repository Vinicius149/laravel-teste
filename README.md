# Projeto Laravel - CRUD

Este é um projeto Laravel criado como parte de um teste prático para uma vaga de desenvolvedor. O projeto inclui funcionalidades para cadastrar, listar, editar e excluir usuários.

## Requisitos

Docker Desktop
ou
docker-compose

## Instalação

1. Clone o repositório para o seu ambiente local:

```sh
git clone https://github.com/Vinicius149/laravel-teste.git &&
cd laravel-teste
```

2. Dentro do diretório do projeto, execute o comando para criar o container com as dependências:

```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

3. Copie o arquivo .env.example para .env e configure suas variáveis de ambiente, incluindo as configurações do banco de dados:

```sh
cp .env.example .env
```
4. Configure o banco de dados no arquivo .env que foi criado, mais precisamente na linha 24, o arquivo está oculto e estará visível apenas dentro do seu editor de código:
```sh
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=teste
DB_USERNAME=root
DB_PASSWORD=password
```

# Executando o Projeto

1. Inicie o servidor de desenvolvimento do Laravel:

```sh
./vendor/bin/sail up
```
2. Em outro terminal, mas ainda dentro da pasta do projeto, gere a chave da aplicação:

```sh
./vendor/bin/sail artisan key:generate
```

3.Execute as migrações para criar as tabelas no banco de dados:

```sh
./vendor/bin/sail artisan migrate
```

4. Acesse o projeto no seu navegador:

```sh
http://localhost:80
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
