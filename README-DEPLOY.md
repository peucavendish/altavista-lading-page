# Deploy — GitHub e servidor

Guia para versionar o projeto no GitHub e publicar atualizações no servidor de produção. Aplicação: **Laravel 12** com **Vite** (assets em `public/build`).

## Pré-requisitos

**Na sua máquina**

- Git
- Conta no GitHub e permissão no repositório

**No servidor**

- PHP **8.2+** com extensões usuais do Laravel (`openssl`, `pdo`, `mbstring`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`, `fileinfo`; e a extensão do driver de banco escolhido)
- [Composer](https://getcomposer.org/) instalado globalmente
- Node.js **LTS** e npm (apenas para rodar `npm ci` / `npm run build` no deploy; o Node não precisa ficar escutando em produção)
- Servidor web (Nginx ou Apache) com document root apontando para `public/`
- Banco de dados (MySQL/MariaDB/PostgreSQL ou SQLite, conforme `.env` de produção)

---

## Parte 1 — GitHub

### 1.1 Criar o repositório

1. No GitHub: **New repository** (pode ser privado).
2. **Não** marque “Initialize with README” se você já tem o código local (evita conflito no primeiro push).

### 1.2 Conectar o projeto local ao remoto

No diretório do projeto:

```bash
git remote add origin git@github.com:ORG_OU_USUARIO/NOME_DO_REPO.git
git branch -M main
git push -u origin main
```

Se o remoto já existir com outro URL, ajuste com `git remote set-url origin ...`.

### 1.3 O que **não** deve ir para o GitHub

Confirme que estes itens **não** são commitados (o `.gitignore` do projeto já cobre a maior parte):

- `.env`, `.env.production` e backups de ambiente
- `vendor/`, `node_modules/`, `public/build/`, `public/hot`
- chaves SSH (`.pem`), certificados e segredos de API

Use sempre `.env.example` como modelo; no servidor você copia para `.env` e preenche os valores reais.

### 1.4 Fluxo de trabalho sugerido

- Desenvolvimento em branch (`feature/...`), merge na `main` via PR ou merge local.
- Cada deploy em produção deve partir de um commit na branch que o servidor vai puxar (em geral `main`).

---

## Parte 2 — Servidor (primeiro deploy)

Valores como usuário, caminho e domínio são exemplos — adapte ao seu ambiente.

### 2.1 Clonar o repositório

```bash
sudo mkdir -p /var/www
sudo chown $USER:$USER /var/www
cd /var/www
git clone git@github.com:ORG_OU_USUARIO/NOME_DO_REPO.git av_lp
cd av_lp
```

Configure deploy por **SSH key** no servidor (read-only ao repositório) ou **Personal Access Token** com HTTPS.

### 2.2 Ambiente Laravel

```bash
cp .env.example .env
nano .env   # ou vim
```

Ajuste pelo menos:

- `APP_NAME`, `APP_ENV=production`, `APP_DEBUG=false`
- `APP_URL=https://seu-dominio.com.br`
- `APP_KEY` — gere com `php artisan key:generate` (após instalar dependências PHP, ver abaixo)
- Banco: `DB_*` (ou `DB_CONNECTION=sqlite` e caminho do arquivo, se for o caso)
- `SESSION_DRIVER`, `CACHE_STORE`, `QUEUE_CONNECTION` conforme produção (muitas vezes `database` ou `redis`)

### 2.3 Dependências e build

```bash
composer install --no-dev --optimize-autoloader
php artisan key:generate --force
npm ci
npm run build
```

### 2.4 Banco e storage

```bash
php artisan migrate --force
php artisan storage:link
```

Garanta permissões de escrita para o usuário do PHP nas pastas `storage/` e `bootstrap/cache/` (ex.: `www-data` ou `nginx`).

### 2.5 Otimização (produção)

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 2.6 Servidor web

- **Document root** deve ser o diretório `public/` do projeto (não a raiz do repositório).
- PHP-FPM: use a mesma versão de PHP que você usou no `composer install`.
- HTTPS: configure certificado (Let’s Encrypt, etc.) e redirecione HTTP → HTTPS.

---

## Parte 3 — Deploy de atualizações (rotina)

No servidor, dentro da pasta do projeto:

```bash
git fetch origin
git checkout main
git pull origin main

composer install --no-dev --optimize-autoloader
npm ci
npm run build

php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Se algo falhar, você pode limpar caches antes de recachear:

```bash
php artisan optimize:clear
# depois rode novamente config:cache, route:cache, view:cache
```

Reinicie o PHP-FPM (ou o queue worker, se usar filas) se a sua stack exigir recarregar opcode após deploy:

```bash
# Exemplo Debian/Ubuntu — nome do serviço pode variar
sudo systemctl reload php8.2-fpm
```

---

## Parte 4 — Checklist rápido pós-deploy

- [ ] Site abre em HTTPS e `APP_URL` bate com o domínio real
- [ ] `APP_DEBUG=false` em produção
- [ ] Formulários e rotas críticas testadas  
- [ ] Logs em `storage/logs/` sem erros novos  
- [ ] Jobs/fila: supervisor ou systemd configurado, se `QUEUE_CONNECTION` não for `sync`  

---

## Problemas comuns

| Sintoma | O que verificar |
|--------|------------------|
| Página em branco /500 | `storage/logs/laravel.log`, permissões de `storage/` e `bootstrap/cache/`, `APP_KEY` definido |
| CSS/JS quebrados | `npm run build` rodou? pasta `public/build` existe e foi deployada? |
| Erro de classe / autoload | `composer install` no servidor; não commitar `vendor/` |
| Mix/Vite antigo | Limpar cache do navegador; confirmar que não há `public/hot` apontando para dev |

---

## Referências

- [Laravel — Deployment](https://laravel.com/docs/deployment)
- [Vite — build](https://vitejs.dev/guide/build.html)
