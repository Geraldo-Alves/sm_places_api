Esta API trata da realização de cadastro de usuários candidatos a um agendamento de vacinação, e do registro da aplicação das doses.

As agendas de vacinação possuem data de Início e data Fim de vigência, período no qual o usuário poderá se vacinar. As agendas possuem também o número da dose (se primeira ou segunda), à qual o usuário/paciente será submetido.

O usuário deve informar sua data de nascimento e dependento da data, será automaticamente encaixado em uma agenda de vacinação para cada dose da vacina.

O administrador pode visualizar os usuários, as agendas de vacinação e os agendamentos já realizados, além disso, pode também alterar o estado do agendamento indicando se a dose já foi aplicada ou não.

A API possui rotas seguras para realização das requisições. Após efetuado o login ou registro do usuário, o token de autenticação que é informado no resultado da requisição deverá ser utilizado no header das requisições seguras da seguinte forma:

{
    ...,
    Authorization: "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQi [Obs: Colar o token completo]"
    ...
}


Seguem os comandos para clonagem e montagem do ambiente para execução da API:

# Clonagem do git
    > git clone https://github.com/Geraldo-Alves/sm_places_api.git

# Após clonagem do git (Assumindo a pré instalação e configuração do Docker e composer)
    Dentro da pasta projeto, executar os seguintes comandos:

    > docker-compose build
        Comando para criação e configuração das imagens

    > docker-compose up -d
        Comando para subir os containers do docker com a Api, Nginx e Mysql

    > cd src
        Navegar para a pasta raiz da API
    
    > composer install    
        Instalação das depenências do Laravel

    > docker exec -it sm_places_api chmod -R 777 storage
        Comando para permitir acesso de escrita à pasta de registro de logs do Laravel.

    > cp .env.example .env
        Comando para definir as variáveis de ambiente da API 

    > docker exec -it sm_places_api php artisan migrate
        Comando para realizar a migração do banco de dados.

    > docker exec -it sm_places_api php artisan db:seed
        Comando para alimentação da base de dados (Admin e Agendas de Vacinação).

    > docker exec -it sm_places_api php artisan passport:install
        Comando para realizar a instalação do Passport, utilizado para autenticação segura do usuário.

    > docker exec -it sm_places_api php artisan passport:keys
        Definindo as chaves de autenticação da API
    
    > docker exec -it sm_places_api php artisan key:generate
        Definindo as chaves de autenticação da API

Seguem as rotas da aplicação que não necessitam do token:
# Login: Admin ou Usuário
    > [POST] http://localhost:8088/api/auth/login
        {
            "email": "admin@admin.com", 
            "password": "admin"
        }

# Registro de Usuário
    > [POST] http://localhost:8088/api/auth/register
        {
            "name": "Usuário 1",
            "email": "mail@mail.com",
            "password": "123456",
            "password_confirmation": "123456",
            "data_nascimento": "1971-09-05" 
        }

Seguem as rotas da aplicação que necessitam do token (Obrigatório):
# Rotas do Admin
    > [GET] http://localhost:8088/api/admin/agendamentos
        URI Params: [int] idade_minima, [int] aplicada {0, 1}
        Rota para listagem dos agendamentos, com filtro por idade minima ou por estado da aplicação

    > [GET] http://localhost:8088/api/admin/usuarios
        Rota para listagem dos usuários

    > [patch] http://agendamento/{id_agendamento}
        {
            "aplicada": [0, 1]
        }
        Rota para alteração do estado da aplicação da dose

# Rotas do Usuário
    > [GET] http://localhost:8088/api/usuario/dados
        Rota visualização dos dados do usuário autenticado
         
    > [GET] http://localhost:8088/api/admin/agendamentos
        Rota para visualização dos agendamentos do usuário autenticado
        
# Testes automatizados
    > docker exec -it sm_places_api php artisan test
        Comando para execução dos testes automatizados
    > AgendamentoTeste