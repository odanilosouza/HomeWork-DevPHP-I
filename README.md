Passo a passo para rodar o projeto
Clone Repositório

git clone https://github.com/odanilosouza/HomeWork-DevPHP-I.git
cd app/
Crie o Arquivo .env

cp .env.example .env
Atualize as variáveis de ambiente do arquivo .env

APP_NAME=Laravel
APP_URL=http://localhost:80


DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

./vendor/bin/sail up

Instalar as dependências do projeto caso necessário

composer install
Gerar a key do projeto Laravel

php artisan key:generate

Acessar o projeto http://localhost:80