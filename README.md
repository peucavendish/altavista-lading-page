# AV_LP

Landing e formulários em **Laravel 12** (PHP 8.2) com front-end via **Vite** e **Tailwind**. O repositório também contém materiais estáticos em `email-marketing/`, `artes/`, etc.

## Documentação de deploy

Instruções completas para **GitHub** e **servidor** (primeiro deploy e atualizações):

→ **[README-DEPLOY.md](README-DEPLOY.md)**

### Produção — AWS EC2 (atalho)

Na pasta do projeto, com a chave `LP_AV.pem`:

```bash
ssh -i LP_AV.pem ec2-user@ec2-3-87-71-227.compute-1.amazonaws.com
```

Na instância:

```bash
cd ~/altavista-lading-page
git pull origin main
composer install --no-dev --optimize-autoloader || true
php artisan migrate --force || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true
```

Notas: não commite a chave `.pem`; se alterar o front (Vite), na EC2 use `npm ci` e `npm run build`. Detalhes e checklist em [README-DEPLOY.md](README-DEPLOY.md).

## Ambiente local (resumo)

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
php artisan migrate
npm run dev
```

Em outro terminal, com o Vite rodando, sirva a aplicação:

```bash
php artisan serve
```

Ajuste `.env` (banco, URL, mail) conforme necessário. Detalhes de produção estão no [README-DEPLOY.md](README-DEPLOY.md).

## Referência do framework

- [Documentação Laravel](https://laravel.com/docs)
