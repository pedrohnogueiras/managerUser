# managerUser

Projeto utiliza o framework Laravel 8.

Pode ser necessario:

```sh
PHP 8
composer
NodeJs
Npm
``` 
## Inicar o projeto

Para iniciar o projeto, seguir o passo a passo da inicialização do Laravel.

Se atentar as chaves do banco dentro do arquivo .env.

```sh
DB_CONNECTION
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
````

realizar as migrations atraves do comando 

```sh
php artisan migrate 
````

Após as migrates. Inicializar o serviço de server.

```sh
php artisan serve
```

Caso sejá necessarios, o bootstrap deve ser instalado. 
Executar os comandos abaixo.

```sh
composer require laravel/ui

php artisan ui bootstrap

php artisan ui bootstrap --auth

npm install && npm run dev
```