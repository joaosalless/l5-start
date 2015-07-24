Esqueleto para iniciar um projeto [Laravel](http://laravel.com/) 5.1
====================================

### Scaffold e API Generator
Este esqueleto utiliza [laravel-api-generator (https://github.com/joaosalless/laravel-api-generator)](https://github.com/joaosalless/laravel-api-generator) para geração automatizada de código utilizando comandos como estes:

OBS.: Neste exemplo, tudo é gerado apartir de uma tabela existente no banco de dados.
```
php artisan mitul.generator:api --fromTable --tableName=table Model

php artisan mitul.generator:scaffold --breadcrumbs --fromTable --tableName=table Model

php artisan mitul.generator:scaffold_api Model --breadcrumbs --fromTable --tableName=table
```

> **Arquivos Gerados:**
> Migration
> Model
> Presenter
> Repository
> RepositoryInterface
> Controller
> Requests
> View
> - index.blade.php
> - table.blade.php
> - show.blade.php
> - show_fields.blade.php
> - create.blade.php
> - edit.blade.php
> - fields.blade.php

Atualiza `routes.php` automaticamente

Documentação [aqui](https://github.com/joaosalless/laravel-api-generator)

----------