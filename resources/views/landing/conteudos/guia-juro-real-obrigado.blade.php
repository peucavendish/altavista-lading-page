@php($pdfUrl = asset('downloads/o-guia-do-juro-real.pdf'))
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Baixe O Guia do Juro Real — material exclusivo Alta Vista Investimentos.">
    <title>Download — O Guia do Juro Real | Alta Vista</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root {
            --navy: #001845;
            --gold: #FFC971;
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                radial-gradient(circle at 20% 0%, rgba(255, 201, 113, .18) 0%, transparent 32%),
                radial-gradient(circle at 100% 100%, rgba(22, 33, 62, .3) 0%, transparent 44%),
                var(--navy);
            font-family: 'GT America', Arial, sans-serif;
            color: #EBEDF2;
            padding: 20px;
        }
        .thank-card {
            width: 100%;
            max-width: 820px;
            border-radius: 22px;
            background: #16213e;
            border: 1px solid rgba(255, 201, 113, .24);
            box-shadow: 0 14px 44px rgba(0, 0, 0, .28);
            padding: 2.6rem 2.2rem;
            text-align: center;
        }
        .logo { max-width: 320px; width: 100%; margin-bottom: 1.4rem; }
        .success-icon {
            width: 74px;
            height: 74px;
            border-radius: 999px;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 201, 113, .18);
            border: 1px solid rgba(255, 201, 113, .4);
            color: var(--gold);
            font-size: 2rem;
        }
        h1 {
            margin: 0 0 .8rem;
            color: var(--gold);
            font-weight: 800;
            font-size: clamp(1.7rem, 3vw, 2.3rem);
        }
        .lead {
            margin: 0 auto 1.1rem;
            max-width: 640px;
            line-height: 1.7;
            color: #EBEDF2;
            font-size: 1.05rem;
        }
        .pdf-preview {
            margin: 1.5rem auto 0;
            max-width: 520px;
            background: rgba(255, 201, 113, .1);
            border: 1px solid rgba(255, 201, 113, .28);
            border-radius: 14px;
            padding: 1.1rem 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            text-align: left;
        }
        .pdf-preview i {
            font-size: 2.4rem;
            color: var(--gold);
            flex-shrink: 0;
        }
        .pdf-preview strong { display: block; color: #fff; margin-bottom: .2rem; }
        .pdf-preview span { color: #cbd5e0; font-size: .9rem; }
        .action-row {
            margin-top: 1.6rem;
            display: flex;
            justify-content: center;
            gap: .7rem;
            flex-wrap: wrap;
        }
        .btn-main {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            border: 0;
            border-radius: 999px;
            padding: .9rem 1.6rem;
            font-weight: 700;
            text-decoration: none;
            background: linear-gradient(135deg, #FFC971 0%, #ffd89b 100%);
            color: #001845;
            box-shadow: 0 6px 20px rgba(255,201,113,0.35);
        }
        .btn-main:hover { color: #001845; filter: brightness(1.02); }
        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            border-radius: 999px;
            padding: .82rem 1.45rem;
            font-weight: 700;
            text-decoration: none;
            color: #EBEDF2;
            border: 1px solid rgba(226, 232, 240, .35);
            background: rgba(255, 255, 255, .05);
        }
        .btn-ghost:hover { color: #fff; border-color: rgba(226, 232, 240, .6); }
        .info {
            margin: 1.4rem auto 0;
            max-width: 620px;
            background: rgba(255, 255, 255, .05);
            border-left: 4px solid var(--gold);
            border-radius: 12px;
            padding: .95rem 1rem;
            color: #f7fafc;
            line-height: 1.6;
            font-size: .88rem;
            text-align: left;
        }
    </style>
</head>
<body>
    <main class="thank-card">
        <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo">

        <div class="success-icon">
            <i class="bi bi-check-circle-fill"></i>
        </div>

        <h1>Seu guia está pronto</h1>
        <p class="lead">
            Obrigado por se cadastrar. Clique abaixo para baixar <strong>O Guia do Juro Real</strong> — material exclusivo da Alta Vista Investimentos.
        </p>

        <div class="pdf-preview">
            <i class="bi bi-file-earmark-pdf"></i>
            <div>
                <strong>O Guia do Juro Real</strong>
                <span>PDF · Material educacional Alta Vista</span>
            </div>
        </div>

        <div class="action-row">
            <a href="{{ $pdfUrl }}" class="btn-main" download="O-Guia-do-Juro-Real.pdf">
                <i class="bi bi-download"></i>
                Baixar o PDF
            </a>
            <a href="{{ $pdfUrl }}" class="btn-ghost" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i>
                Abrir no navegador
            </a>
        </div>

        <div class="info">
            Investimentos envolvem riscos de mercado, crédito e liquidez. Rentabilidade passada não garante rentabilidade futura. Conteúdo educacional e informativo; não constitui recomendação de investimento.
        </div>
    </main>
</body>
</html>
