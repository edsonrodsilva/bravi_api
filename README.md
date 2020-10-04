## API REST with Laravel

## Introdução
Existem inumeras formas de deixar seu aplicativo com uma estrutura pronta para evolução, com funcionalidade comum de acesso a dados, fornecendo melhor capacidade de manutenção e desacoplando a infraestrutura ou tecnologia usada para acessar bancos de dados da camada de modelo de domínio.

##Instruções de Instalação
1. clone o projeto
2. crie um banco de dados no mysql sugiro o nome people.
3. configure o arquivo .env com as credenciar do banco de dados.
4. rode as migrations para criar as tabelas.
`php artisan migrate`
5. rode o db:seed para popular as tabelas com dados faker.
`php artisan db:seed`
Test a API usando Insomnia ou Postman para acessar os recursos listados abaixo.

## Repositoy Pattern
Eu implementei o **Pattern Repository** para tornar o código mais estruturado.

## Modelo do banco de dados

## Resumo das Etapas de contrução
1. Criar Models
2. Criar Factory
3. Criar Seeders
4. Controllers
5. Trait - ResponseAPI
Como as Traits são um mecanismo para reutilização de código em herança única vamos colocar alguns códigos reutilizáveis ​​para o aplicativo, para reduzir a criação da mesma função repetidamente. Neste caso, vamos criar funções para enviar a resposta JSON ao cliente.

6. Create a validation Request
If you using a Repository pattern, you not allowed to create a validation in a Controller or in the Repository itself, it must be separate.
6. Interfaces
Para descrever a classe quais método implementar.
7. Repository
8. Registering a new Provider
## 

## Resourses
### People
* Get All Person, method GET (api/persons).
* Create New Person, method POST (api/persons).
* Get Person By ID, method GET (api/persons/{id}).
* Update Person, method PUT (api/persons/{id}).
* Delete Person, method DELETE (api/persons/{id}).

### Contact
* Get All Contact, method GET (api/contacts).
* Create New Contact, method POST (api/contacts).
* Get Contact By ID, method GET (api/contacts/{id}).
* Update Contact, method PUT (api/contacts/{id}).
* Delete Contact, method DELETE (api/contacts/{id}).


### Conclusão 
Com mais de 10 anos de experiência me fez ver o quanto é importante
tornar seu código mais estruturado. Nunca escrever nenhuma lógica no controlador, está tudo bem se você precisar. Tornar o código mais reutilizável no futuro. Usando o Repository Pattern o código está mais estruturado a e mais sustentável mais facil de entender e manter.

