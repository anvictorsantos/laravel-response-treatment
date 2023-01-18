# laravel 7.30.6

## Sobre o projeto
O projeto é baseado no artigo do Medium e tem como intuito criar uma tratativa universal para mensagens de resposta do tipo sucesso ou error.

## Build setup
```bash
# instalar as dependências do composer
$ composer install

# criar arquivo de environment
$ cp .env.example .env

# gerar a chave única da aplicação
$ php artisan key:generate

# criar as tabelas e popular com dados falsos
$ php artisan migrate:refresh --seed

# inicializar a aplicação
$ php artisan serve
```

## Sqlite
Este projeto utiliza o SQLite para armazenamento, logo, as variáveis de ambiente foram alteradas com esse intuito. Se você quiser usar o mesmo banco relacional, digitar o seguinte comando:
```bash
# criar o arquivo de database
$ touch database/database.sqlite

# substituir variávesi de conexão com o banco
$ DB_CONNECTION=sqlite
```

## PHP versão
Eu utilizei a versão 7.43.0 do PHP