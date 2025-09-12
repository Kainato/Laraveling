# 📦 Composer

## ✨ O que é?

- É um **gerenciador de dependências para PHP**.
- Permite declarar as bibliotecas que o projeto precisa e instalá-las/atualizá-las automaticamente.
- Funciona parecido com o **npm** (JavaScript) ou **pip** (Python), mas focado no ecossistema PHP.

### 🔧 Principais usos
- Baixar pacotes e frameworks (ex: **Laravel**, **Symfony**).
- Gerenciar versões das dependências.
- Facilitar o **autoload de classes**.

---

## 💻 Como instalar no Mac

1. Verifique se o **Homebrew** está instalado:

   ```bash
   brew --version
   ```

   - Se não tiver, instale com:
     ```bash
     /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
     ```

2. Instale o **Composer**:
   ```bash
   brew install composer
   ```

3. Verifique a versão:
   ```bash
   composer -V
   ```

---

# 🚀 Instalando o ambiente TEATech Laravel no Mac

### 1. Instalar o Homebrew
Se já fez o passo acima, pode pular.

---

### 2. Instalar o MySQL via brew
```bash
brew install mysql
brew services start mysql
```

- Para verificar logs:
  ```bash
  /opt/homebrew/var/mysql/MacBook-Air-de-teatec.local.err
  ```

---

### 3. Instalar o **DBeaver**

1. Criar nova conexão `localhost`.
2. Criar database chamada **teatech**.
3. Testar a conexão local para garantir que está ok.
4. Importar o dump:
   - Se tiver o arquivo `DumpYYYYMMDD.sql`, importe.
   - Caso não tenha, peça para outro dev.
   - Se o dump falhar, rode no terminal:

     ```bash
     mysqldump
     cd ~/Downloads
     mysql -u root
     use teatec;
     source Dump20250903.sql
     ```

5. Rodar script adicional de tabelas:
   ```
   Database > sqls > gerais > generate_log_tables_after_dump.sql
   ```

---

### 4. Instalar o PHP (via Herd)
Baixe em: [Laravel Herd MacOS](https://herd.laravel.com/download/latest/macos)  

- Instale na pasta de projetos (ex: `Documentos/Github`).

---

### 5. Clonar o projeto TEATech no GitHub

```bash
git clone <url-do-projeto>
```

- Criar o arquivo `.env`:
  - Se não tiver, peça para outro dev.
  - Alterar a variável:
    ```
    DB_DATABASE=nome_da_organizacao
    ```

---

### 6. Instalar VS Code e extensões

1. Baixar [VS Code](https://code.visualstudio.com/).
2. Instalar extensão: [Laravel Extension Pack](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack).
3. Instalar **fish** (terminal mais amigável) pelo terminal com auxílio do **brew**
4. Instalar **Node.js** (via Herd + fish) pelo terminal com auxílio do **brew**
5. Rodar no terminal do VS Code:

   ```bash
   npm install
   npm run build
   php artisan migrate
   php artisan scripts:run
   ```

---

✅ Pronto! Ambiente configurado e Laravel rodando.
