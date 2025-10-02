# Resumo

Siga estes passos para começar o desenvolvimento:

Crie um recurso (Resource) para o modelo que deseja gerenciar. Por exemplo, para um modelo User: `php artisan make:filament-resource User`

O comando acima irá gerar arquivos em `app/Filament/Resources/UserResource`. Você pode customizar os formulários e tabelas nesses arquivos.

Acesse o painel Filament em /admin para ver e gerenaciar os dados do modelo.

Para adicionar mais funcionalidades, consulte a [documentação oficial](https://filamentphp.com/docs/3.x/panels/resources/overview)
