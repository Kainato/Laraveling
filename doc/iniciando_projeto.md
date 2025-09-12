# Passo a passo para rodar o projeto

1. **Baixar as dependências**

   <pre class="overflow-visible!" data-start="199" data-end="233"><div class="contain-inline-size rounded-2xl relative bg-token-sidebar-surface-primary"><div class="sticky top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>composer install
   </span></span></code></div></div></pre>

   Isso baixa todas as dependências que o Laravel precisa (ficam na pasta `vendor/`).
2. **Configurar o arquivo `.env`**

   * Copie o `.env.example` e crie um `.env`:
     <pre class="overflow-visible!" data-start="407" data-end="449"><div class="contain-inline-size rounded-2xl relative bg-token-sidebar-surface-primary"><div class="sticky top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>cp</span><span> .env.example .</span><span>env</span><span>
     </span></span></code></div></div></pre>
   * Abra o `.env` e configure principalmente:
     * `APP_KEY` (vai ser gerado no próximo passo)
     * Conexão com banco de dados: `DB_CONNECTION`, `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
3. **Gerar a chave da aplicação**

   <pre class="overflow-visible!" data-start="694" data-end="736"><div class="contain-inline-size rounded-2xl relative bg-token-sidebar-surface-primary"><div class="sticky top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>php artisan key:generate
   </span></span></code></div></div></pre>
4. **Rodar as migrations (criar tabelas no banco)**

   <pre class="overflow-visible!" data-start="793" data-end="830"><div class="contain-inline-size rounded-2xl relative bg-token-sidebar-surface-primary"><div class="sticky top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>php artisan migrate
   </span></span></code></div></div></pre>

   *(se tiver seeders, você pode rodar `php artisan migrate --seed` para já popular os dados iniciais).*
5. **Iniciar o servidor**

   <pre class="overflow-visible!" data-start="966" data-end="1001"><div class="contain-inline-size rounded-2xl relative bg-token-sidebar-surface-primary"><div class="sticky top-9"><div class="absolute end-0 bottom-0 flex h-9 items-center pe-2"><div class="bg-token-bg-elevated-secondary text-token-text-secondary flex items-center gap-4 rounded-sm px-2 font-sans text-xs"></div></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="whitespace-pre! language-bash"><span><span>php artisan serve
   </span></span></code></div></div></pre>

   Isso sobe a aplicação em `http://127.0.0.1:8000`.

# Comandos Extras

- Laravel Route Preview
  - ⚡ Runs `php artisan route:list --json` in the background
