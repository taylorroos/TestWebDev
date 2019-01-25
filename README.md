# TestWebDev Taylor
Projeto para teste de Desenvolvedor Web

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
