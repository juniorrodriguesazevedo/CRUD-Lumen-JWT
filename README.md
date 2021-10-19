## CRUD Lumen JWT

Projeto feito em Lumen/Framework para cadastrado de telefones com autenticação JWT.

### Bibliotecas usadas:
* [JWT Auth Laravel](https://github.com/tymondesigns/jwt-auth)

### Instalação: 

* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`. 
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Use o comando `php artisan jwt:secret` para criar um token no seu ENV.
* Use o comando `php artisan migrate` para fazer as migrações.
* Use o comando `php -S localhost:8000 -t public` para rodar em seu servidor.
* Navegue para `http://localhost:8000`. O aplicativo será carregado automaticamente.

### Uso
1 - Registre um usuário (use o POSTMAN) com a rota `localhost:8000/api/register` e você deverá obter uma resposta bem-sucedida como esta:

![Register](https://i.imgur.com/2k4Anas.png)

2 - Faça o login de um usuário usando a rota `localhost:8000/api/login` e você deverá obter uma resposta bem-sucedida como esta:

![Login](https://i.imgur.com/45jeAVC.png)

**OBS:** Use o token gerado

3 - Cadastrar Telefone com a rota `localhost:8000/api/phones` e você deverá obter uma resposta bem-sucedida como esta:

![Cadastrar Telefone](https://i.imgur.com/fGfeO9F.png)

### Lista de todas as APIs:
Method   | Descrição | Rota
--------- | ------ | ------
POST | Registrar usuário | `localhost:8000/api/register`
POST | Login de usuário | `localhost:8000/api/login`
GET | Retorna usuário logado | `localhost:8000/api/profile`
POST | Cadastrar telefone | `localhost:8000/api/phones`
GET | Lista de todos os telefones | `localhost:8000/api/phones`
GET | Pega telefone por ID | `localhost:8000/api/phones/id`
PUT | Atualizar telefone por ID | `localhost:8000/api/phones/id`
POST | Deletar telefone por ID | `localhost:8000/api/phones/id`

**Fonte:** [DEV](https://dev.to/ndiecodes/build-a-jwt-authenticated-api-with-lumen-2afm)
