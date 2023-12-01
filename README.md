O foco desse projeto é criar um painel gráfico de visualização de logs utilizadando Laravel + Spatie Activy Log

A utilização desse Log-view é simples, você entrar na pasta do projeto laravel, cria o arquivo .env e depois rodar apenas um comando no Docker para fazer todas as configurações de banco de dados. 

Após ter criado o .env e feito as configurações certas do nome do banco que deseja utilizar, user e password, é hora de rodar os comandos do Sail: 

- php artisan sail:install
- ./vendor/bin/sail up

Depois disso ele irá criar as imagens e tudo corretamente no Docker !

## Outros detalhes:
No laravel existe uma funcionalidade Stub que podemos customizar alguns processos, exemplo: 

- Se toda vez que eu criar uma Model eu precisar passar a mesma configuração, isso pode ser um trabalho repetitivo e cansativo, então pra isso é utilizado o Stub.

Na configuração desse projeto você não precisará passar toda vez as mesmas configurações do Spatie/ActivyLog - ele já está configurado para que toda vez que você rodar o comando: <b>php artisan make:model NomedaModel </b>
ele já irá trazer as configurações certinhas do ActivyLog pra ficar monitorando as ações no sistema.

## Acesso a visualização dos logs: 
É simples, você vai no navegador e digita: localhost:8000/activy-log
Pronto, já poderá visualizar os logs do sistema.
