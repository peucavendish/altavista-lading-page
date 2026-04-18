# AV_LP

Landing e formulários em **Laravel 12** (PHP 8.2) com front-end via **Vite** e **Tailwind**. O repositório também contém materiais estáticos em `email-marketing/`, `artes/`, etc.

## Documentação de deploy

Instruções completas para **GitHub** e **servidor** (primeiro deploy e atualizações):

→ **[README-DEPLOY.md](README-DEPLOY.md)**

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
