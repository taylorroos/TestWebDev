# TestWebDev Taylor
Projeto para teste de Desenvolvedor Web

# Iniciando o Teste:

* Criar um 'fork' deste repositório.
* No repositório que realizou 'fork' executar os próximos passos.

# Realizando o Teste:

Objetivo: Lista de contato telefônico.

* CRUD de contatos
  * Campos:
    * Nome
    * E-mail
    * Telefone
    * CEP

# Resultado esperado
  
* Interface gráfica.
* Repositório com o código feito.
* Banco de dados.
* Link do sistema em produção.
* Criar Pull Request no repositório principal.

# Nice to have

* Login e senha para controle de acesso.
* BOT de Deploy.
* Validação de Código.
* Documentação.
* Outros módulos que julgar importante.


# Como rodar o projeto
Instale as dependências

```
npm install

composer install
```

Copie o arquivo `.env.example` e o renomeie para: `.env`

Crie o banco de dados e adicione os dados de acesso no arquivo `.env`

Rode: `php artisan key:generate`

Rode as migrations e os seeders:
```
php artisan migrate

php artisan db:seed
```

Iniciando o servidor
```
php artisan serve
```

Caso for editar o javascript use: `npm run watch-poll` para ficar 'ouvindo' as alterações.
