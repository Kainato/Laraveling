# Arquitetura padrão do Laravel

O Laravel segue o padrão **MVC (Model-View-Controller)** e tem uma estrutura de pastas bem organizada para separar responsabilidades:

### 1. **Public (`/public`)**

* Ponto de entrada da aplicação.
* Contém o `index.php` que inicializa o framework.
* Hospeda os arquivos públicos (CSS, JS, imagens).

### 2. **App (`/app`)**

* Coração da aplicação.
* Subdividida em:
  * **Models (`/app/Models`)** → Representam as tabelas do banco de dados (ORM Eloquent).
  * **Http/Controllers (`/app/Http/Controllers`)** → Controlam as requisições e chamadas às views ou APIs.
  * **Http/Middleware** → Interceptadores que tratam requisições antes ou depois de chegar nos controllers.
  * **Console** → Comandos do Artisan (linha de comando).
  * **Providers** → Serviços que registram recursos (injeção de dependência).

### 3. **Routes (`/routes`)**

* Define as rotas da aplicação.
* Arquivos principais:
  * `web.php` → Rotas para páginas (HTML).
  * `api.php` → Rotas de API (JSON).
  * `console.php` → Rotas de comandos Artisan.
  * `channels.php` → Rotas de broadcast/eventos.

### 4. **Resources (`/resources`)**

* Onde ficam as Views (Blade templates).
* Contém também assets (JS, CSS, Vue/React se usado).
* Estrutura típica:
  * `/views` → HTML com Blade.
  * `/js`, `/css`, `/sass` → Front-end.

### 5. **Database (`/database`)**

* Arquivos relacionados ao banco:
  * `migrations` → Estrutura das tabelas.
  * `seeders` → População inicial de dados.
  * `factories` → Geração de dados fake para testes.

### 6. **Config (`/config`)**

* Arquivos de configuração (app, database, mail, cache, etc).
* Alterações aqui mudam o comportamento da aplicação.

### 7. **Storage (`/storage`)**

* Onde ficam os logs, cache, e arquivos carregados pelo usuário.

### 8. **Vendor (`/vendor`)**

* Onde ficam todas as dependências instaladas pelo Composer.
