# Sistema de Cadastro de Vendas e Comissões

O projeto "Cadastro de Vendas e Comissões" é um sistema desenvolvido utilizando Laravel Sail, uma estrutura moderna de desenvolvimento em PHP, para gerenciar vendas realizadas por vendedores e calcular suas comissões automaticamente.

🚀 

### 📋 Pré-requisitos

DAntes de começar, certifique-se de ter os seguintes requisitos instalados em sua máquina:

PHP
Composer
Docker
```

### 🔧 Instalação

Siga os passos abaixo para configurar o ambiente de desenvolvimento:

1 - Clone o repositório:

    git clone https://github.com/odanilosouza/HomeWork-DevPHP-I.git

2 - Navegue até o diretório do projeto:

    cd app/

3 - Caso necessário instale as dependências do projeto usando Composer:

    composer install

4 - Copie o arquivo de ambiente .env.example e configure o banco de dados:

    cp .env.example .env

5 - Configure as variáveis DB_* no arquivo .env com as informações do seu banco de dados MySQL.

    DB_CONNECTION=mysql

    DB_HOST=mysql

    DB_PORT=3306

    DB_DATABASE=***Nome do seu banco***

    DB_USERNAME=***Nome do seu usuário***

    DB_PASSWORD=***Senha do seu banco***

6 - Inicie o ambiente Docker (Laravel Sail):

    ./vendor/bin/sail up -d

7 - O sistema estará disponível em http://localhost

## ⚙️ Executando os testes

    ./vendor/bin/sail pest

## 🛠️ Construído com

  Application Name ................................................... Laravel  
  Laravel Version .................................................... 11.14.0  
  PHP Version .......................................................... 8.3.8  
  Composer Version ..................................................... 2.7.7  
  Environment .......................................................... local

## ✒️ Autor

Danilo Souza - https://github.com/odanilosouza
