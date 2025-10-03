# Laraveling Project

Este projeto é uma aplicação Laravel que utiliza o Filament para gerenciar personagens em um sistema de RPG. Abaixo estão os detalhes dos arquivos e diretórios principais do projeto.

## Estrutura do Projeto

```
Laraveling
├── app
│   └── Filament
│       └── Resources
│           └── CharResource
│               ├── Pages
│               │   ├── CreateChar.php
│               │   ├── EditChar.php
│               │   ├── ListChars.php
│               │   └── ShowChar.php
│               └── CharResource.php
├── database
│   └── migrations
├── routes
│   └── web.php
├── composer.json
└── README.md
```

## Descrição dos Arquivos

- **app/Filament/Resources/CharResource/Pages/CreateChar.php**: Define a página para criar um novo personagem, estendendo a classe `CreateRecord`.

- **app/Filament/Resources/CharResource/Pages/EditChar.php**: Define a página para editar um personagem existente, estendendo a classe `EditRecord`.

- **app/Filament/Resources/CharResource/Pages/ListChars.php**: Define a página que lista todos os personagens, estendendo a classe `ListRecords`.

- **app/Filament/Resources/CharResource/Pages/ShowChar.php**: Define a página que exibe informações detalhadas de um personagem, estendendo a classe `ShowRecord`.

- **app/Filament/Resources/CharResource/CharResource.php**: Define o recurso `CharResource`, que representa o modelo `Character`, incluindo métodos para formulários, tabelas e relações.

- **database/migrations**: Contém os arquivos de migração do banco de dados para criar e modificar tabelas.

- **routes/web.php**: Define as rotas da aplicação, incluindo as rotas para acessar as páginas do Filament.

- **composer.json**: Arquivo de configuração do Composer, listando dependências e configurações de autoload.

## Instruções de Instalação

1. Clone o repositório:
   ```
   git clone <URL_DO_REPOSITORIO>
   ```

2. Navegue até o diretório do projeto:
   ```
   cd Laraveling
   ```

3. Instale as dependências do Composer:
   ```
   composer install
   ```

4. Configure o arquivo `.env` com suas credenciais de banco de dados.

5. Execute as migrações:
   ```
   php artisan migrate
   ```

6. Inicie o servidor de desenvolvimento:
   ```
   php artisan serve
   ```

Agora você pode acessar a aplicação em `http://localhost:8000`.