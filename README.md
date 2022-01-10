# Teste Ramada
Esse projeto faz parte do desafio técnico de desenvolvedor da empresa Ramada.


Requisitos
php 7 ou superior.
composer
banco de dados mysql


Instalação


Para instalar clone o repositorio.


    git clone https://github.com/hudsonatlas/teste-ramada.git


Entre na pasta do projeto. 


    cd teste-ramada


execute os comandos.


    composer install


    npm rum prod


Copie o arquivo .env.example e renomeie para .env
e configure com os dados do banco
ex:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=testeRamada
    DB_USERNAME=root
    DB_PASSWORD=


execute o comando.


    php artisan serve


    localhost:8000/comics


Sera necessário criar um login para acessar a pagina.
para popula o banco com dados da última semana direto da api da Marvel execute o comando


    php artisan command:marvelApi