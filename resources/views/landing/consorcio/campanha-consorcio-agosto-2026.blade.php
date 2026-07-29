<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Campanha de Consórcio Agosto/26 – Antecipação de comissão, bônus para novos produtores e três rankings premiados. Alta Vista Investimentos.">
    <title>Campanha de Consórcio Agosto/26 | Alta Vista Investimentos</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @php
        $consultants = [
            ['name' => 'Anderson Soares', 'role' => 'Consultor', 'url' => 'https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/PY8gUDh0GUO5uoaUG6DlAQ2?ismsaljsauthenabled', 'backup' => false],
            ['name' => 'Camila Karayan', 'role' => 'Consultora', 'url' => 'https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/N3zgHwD05UiQCaNEaDpwAw2?ismsaljsauthenabled', 'backup' => false],
            ['name' => 'Rafael Carranca', 'role' => 'Consultor', 'url' => 'https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/eij_JH29xE2IaGZ_SlcxCQ2?ismsaljsauthenabled', 'backup' => false],
            ['name' => 'Solange Lopes', 'role' => 'Consultora', 'url' => 'https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/61rDAwbHM0-hcwPHGcnI1g2?ismsaljsauthenabled', 'backup' => false],
            ['name' => 'Tiago Gestinari', 'role' => 'Consultor', 'url' => 'https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/e2LvmFBv-E2meCLKPX-oiA2?ismsaljsauthenabled', 'backup' => false],
            ['name' => 'Paula Julien', 'role' => 'Backup', 'url' => 'https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/X1bIzrxqv0yv1f_bW0OnbQ2?ismsaljsauthenabled', 'backup' => true],
        ];
        $pjContacts = [
            ['name' => 'Marcio', 'wa' => '5521982909867', 'phone' => '(21) 98290-9867', 'email' => 'marcio.carvalho@globusseguros.com.br'],
            ['name' => 'Fernando Brito', 'wa' => '5521987715686', 'phone' => '(21) 98771-5686', 'email' => 'fernando.brito@globusseguros.com.br'],
            ['name' => 'Guido', 'wa' => '5521969994179', 'phone' => '(21) 96999-4179', 'email' => 'guido.guedes@avseguros.com.br'],
            ['name' => 'Lucas Zanetti', 'wa' => '5511976446749', 'phone' => '(11) 97644-6749', 'email' => 'lucas.zanetti@altavistainvest.com.br'],
            ['name' => 'Alexandro Melo', 'wa' => '5511951047635', 'phone' => '(11) 95104-7635', 'email' => 'alexandro.melo@altavistainvest.com.br'],
            ['name' => 'Gerald Marenco', 'wa' => '5511964383375', 'phone' => '(11) 96438-3375', 'email' => 'gerald.marenco@globusseguros.com.br'],
        ];
    @endphp
    <style>
        :root {
            --navy: #001845;
            --ink: #16213e;
            --gold: #FFC971;
            --card: #f5f7fc;
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        * { scroll-behavior: smooth; box-sizing: border-box; }
        body {
            font-family: 'GT America', Arial, sans-serif;
            background: var(--navy);
            margin: 0;
            min-height: 100vh;
            color: #ebedf2;
            overflow-x: hidden;
        }

        .hero-left {
            background: linear-gradient(135deg, rgba(0,24,69,0.94) 0%, rgba(0,24,69,0.85) 50%, rgba(22,33,62,0.9) 100%),
                url('https://images.pexels.com/photos/7821486/pexels-photo-7821486.jpeg?auto=compress&cs=tinysrgb&w=1260') center/cover no-repeat;
            min-height: 460px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2.75rem 1.25rem 4.5rem;
            position: relative;
        }
        .hero-left::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 40% 30%, rgba(255,201,113,0.12) 0%, transparent 50%);
            pointer-events: none;
        }
        .hero-inner { position: relative; z-index: 1; text-align: center; max-width: 880px; }
        .logo-hero {
            max-width: 280px;
            width: 100%;
            margin: 0 auto 1.5rem;
            display: block;
            filter: drop-shadow(0 4px 20px rgba(0,0,0,0.35));
        }
        .acao-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            padding: 0.55rem 1.4rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.82rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 1rem;
            box-shadow: 0 6px 22px rgba(255,201,113,0.35);
        }
        .hero-inner h1 {
            font-size: clamp(1.65rem, 4vw, 2.5rem);
            font-weight: 800;
            line-height: 1.2;
            margin: 0 0 0.9rem;
            text-shadow: 0 2px 18px rgba(0,24,69,0.5);
            color: #ebedf2;
        }
        .hero-inner h1 .accent { color: var(--gold); }
        .hero-inner .lead {
            font-size: 1.05rem;
            opacity: 0.95;
            line-height: 1.65;
            max-width: 640px;
            margin: 0 auto 1.85rem;
            color: #ebedf2;
        }
        .hero-chips {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            justify-content: center;
        }
        .hero-chips li {
            display: flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.6rem 1.15rem;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,201,113,0.2);
            border-radius: 12px;
            font-size: 0.88rem;
            font-weight: 600;
            color: #ebedf2;
        }
        .hero-chips li i { color: var(--gold); }

        .page-panel-wrap {
            max-width: 1020px;
            margin: 0 auto;
            padding: 0 0.5rem 0.5rem;
            margin-top: -2.5rem;
            position: relative;
            z-index: 2;
        }
        @media (min-width: 576px) {
            .page-panel-wrap { padding: 0 0.75rem 0.75rem; }
        }

        .white-panel {
            background: #fff;
            color: #333;
            border-radius: 22px;
            max-width: 1020px;
            margin: 0 auto;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
            border: 2px solid rgba(255,201,113,0.3);
        }
        @media (max-width: 576px) {
            .white-panel { border-radius: 0; }
            .page-panel-wrap { padding-left: 0; padding-right: 0; margin-top: -1.5rem; }
        }

        .section-pad { padding: 2.6rem 1.75rem 2.85rem; }
        @media (min-width: 768px) { .section-pad { padding: 3rem 2.5rem 3.25rem; } }

        .section-title {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--ink);
            margin: 0 0 0.85rem;
            text-align: center;
            letter-spacing: -0.02em;
        }
        .section-title .accent { color: #c9a227; }
        .section-sub {
            text-align: center;
            color: #555;
            font-size: 0.98rem;
            line-height: 1.7;
            max-width: 640px;
            margin: 0 auto 2rem;
        }
        .divider {
            height: 1px;
            background: rgba(0,24,69,0.08);
            margin: 2.5rem 0;
        }

        /* Rules */
        .rule-list {
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
            max-width: 780px;
            margin: 0 auto;
        }
        .rule-card {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            background: var(--card);
            border: 1px solid rgba(0,24,69,0.1);
            border-radius: 16px;
            padding: 1.2rem 1.25rem;
        }
        .rule-icon {
            flex-shrink: 0;
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: linear-gradient(145deg, rgba(255,201,113,0.22) 0%, rgba(255,201,113,0.08) 100%);
            border: 2px solid rgba(255,201,113,0.45);
            color: var(--navy);
            display: grid;
            place-items: center;
            font-size: 1.25rem;
        }
        .rule-body h3 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--ink);
            margin: 0 0 0.25rem;
        }
        .rule-body p {
            font-size: 0.9rem;
            color: #555;
            margin: 0;
            line-height: 1.5;
        }
        .rule-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
            margin-top: 0.7rem;
        }
        .tag {
            background: linear-gradient(135deg, rgba(255,201,113,0.35) 0%, rgba(255,201,113,0.15) 100%);
            color: #8a6914;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.3rem 0.75rem;
            border-radius: 100px;
        }

        /* Programs */
        .program-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.2rem;
        }
        .program-card {
            background: linear-gradient(180deg, #fff 0%, var(--card) 100%);
            border: 1px solid rgba(0,24,69,0.1);
            border-radius: 18px;
            padding: 1.5rem 1.35rem;
            box-shadow: 0 4px 18px rgba(0,24,69,0.06);
            height: 100%;
        }
        .program-label {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #8a6914;
            margin-bottom: 0.45rem;
        }
        .program-label i { color: var(--gold); filter: brightness(0.75); }
        .program-card h3 {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--ink);
            margin: 0 0 0.85rem;
        }
        .program-hero {
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--navy);
            letter-spacing: -0.02em;
            margin-bottom: 1.15rem;
            line-height: 1.15;
        }
        .program-hero span {
            font-size: 1rem;
            font-weight: 600;
            color: #555;
            margin-left: 0.3rem;
        }
        .program-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.9rem;
        }
        .program-list li {
            display: flex;
            gap: 0.7rem;
            align-items: flex-start;
        }
        .program-list .check {
            flex-shrink: 0;
            width: 22px;
            height: 22px;
            margin-top: 0.1rem;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            display: grid;
            place-items: center;
            font-size: 0.7rem;
            font-weight: 700;
        }
        .program-list strong {
            display: block;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--ink);
        }
        .program-list em {
            display: block;
            font-style: normal;
            font-size: 0.85rem;
            color: #555;
            line-height: 1.4;
        }

        /* Awards */
        .premio-total-banner {
            text-align: center;
            margin: -0.5rem auto 1.75rem;
            padding: 1rem 1.25rem;
            background: linear-gradient(135deg, rgba(255,201,113,0.22) 0%, rgba(255,201,113,0.08) 100%);
            border: 1px solid rgba(255,201,113,0.4);
            border-radius: 14px;
            max-width: 280px;
        }
        .premio-total-banner .value {
            display: block;
            font-size: 1.65rem;
            font-weight: 800;
            color: var(--navy);
            line-height: 1.1;
        }
        .premio-total-banner .label {
            font-size: 0.85rem;
            color: #8a6914;
            font-weight: 600;
        }
        .premio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        .premio-card {
            background: var(--navy);
            color: #ebedf2;
            border-radius: 16px;
            padding: 1.4rem 1.2rem;
            border: 1px solid rgba(255,201,113,0.25);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .premio-kicker {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 0.3rem;
        }
        .premio-card h3 {
            font-size: 1rem;
            font-weight: 700;
            margin: 0 0 0.85rem;
            color: #fff;
            line-height: 1.3;
        }
        .premio-amount {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--gold);
            margin-bottom: 1rem;
        }
        .rank-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
            flex: 1;
        }
        .rank-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255,255,255,0.08);
            border-radius: 100px;
            padding: 0.55rem 0.95rem;
            font-size: 0.86rem;
            color: rgba(255,255,255,0.85);
        }
        .rank-list .prize { font-weight: 700; color: #fff; }
        .premio-note {
            font-size: 0.76rem;
            color: rgba(255,255,255,0.55);
            margin: 0;
            line-height: 1.4;
        }

        /* Orientação */
        .orientacao-box {
            background: linear-gradient(135deg, rgba(255,201,113,0.18) 0%, rgba(255,201,113,0.06) 100%);
            border: 1px solid rgba(255,201,113,0.4);
            border-radius: 16px;
            padding: 1.35rem 1.5rem;
            max-width: 780px;
            margin: 0 auto 2rem;
        }
        .orientacao-box h3 {
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--ink);
            margin: 0 0 0.65rem;
            display: flex;
            align-items: center;
            gap: 0.45rem;
        }
        .orientacao-box h3 i { color: #c9a227; }
        .orientacao-box ul {
            margin: 0;
            padding-left: 1.2rem;
            color: #444;
            font-size: 0.95rem;
        }
        .orientacao-box li { margin-bottom: 0.35rem; }

        /* Consultants */
        .consultants-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.2rem;
        }
        .c-card {
            background: var(--card);
            border: 1px solid rgba(0,24,69,0.1);
            border-radius: 16px;
            padding: 1.35rem 1.15rem;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .c-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 28px rgba(0,24,69,0.12);
        }
        .c-card.backup {
            background: linear-gradient(180deg, #fff8e8 0%, var(--card) 100%);
            border-color: rgba(255,201,113,0.55);
            border-style: dashed;
        }
        .c-card h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--ink);
            margin: 0 0 0.25rem;
        }
        .c-card .role {
            display: block;
            font-size: 0.8rem;
            color: #718096;
            margin-bottom: 1rem;
        }
        .btn-book {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            width: 100%;
            padding: 0.7rem 1rem;
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            font-weight: 700;
            text-decoration: none;
            border-radius: 10px;
            font-size: 0.9rem;
        }
        .btn-book:hover { color: #000; filter: brightness(1.02); }

        /* PJ */
        .pj-grid { display: grid; gap: 0.75rem; }
        .pj-item {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.75rem 1rem;
            padding: 1rem 1.25rem;
            background: var(--card);
            border-radius: 12px;
            border: 1px solid rgba(0,24,69,0.1);
        }
        .pj-item .nome {
            font-weight: 700;
            color: var(--ink);
            min-width: 130px;
        }
        .pj-item .links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            background: #25d366;
            color: #fff;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 0.45rem 0.9rem;
            border-radius: 8px;
            text-decoration: none;
        }
        .btn-whatsapp:hover { background: #20bd5a; color: #fff; }
        .email-link {
            font-size: 0.85rem;
            color: #555;
            text-decoration: none;
        }
        .email-link:hover { color: #c9a227; text-decoration: underline; }

        .cta-box {
            text-align: center;
            padding: 1.75rem 1.75rem;
            background: var(--navy);
            color: #fff;
            border-radius: 16px;
            margin-top: 0.5rem;
            border: 1px solid rgba(255,201,113,0.25);
        }
        .cta-box p {
            margin: 0;
            font-size: 1rem;
            color: rgba(255,255,255,0.92);
            line-height: 1.55;
        }
        .cta-box .highlight {
            color: var(--gold);
            font-weight: 700;
            margin-top: 0.55rem;
            display: block;
        }

        footer {
            padding: 1.5rem 1.25rem 2rem;
            max-width: 1020px;
            margin: 0 auto;
        }
        footer small {
            color: rgba(255,255,255,0.88);
            font-size: 0.78rem;
            line-height: 1.5;
            display: block;
        }

        @media (max-width: 900px) {
            .premio-grid { grid-template-columns: 1fr; }
            .program-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 576px) {
            .pj-item { flex-direction: column; align-items: flex-start; }
            .pj-item .nome { min-width: auto; }
            .section-pad { padding: 2rem 1.25rem 2.25rem; }
        }
    </style>
</head>
<body>
    <header class="hero-left">
        <div class="hero-inner">
            <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo-hero" width="280" height="auto">
            <div class="acao-badge">Agosto / 26</div>
            <h1>Campanha de Consórcio <span class="accent">Agosto/26</span></h1>
            <p class="lead">
                Dois programas e três premiações rodando ao mesmo tempo: antecipação de comissão, bônus para novos produtores e três rankings premiados.
            </p>
            <ul class="hero-chips" aria-label="Resumo">
                <li><i class="bi bi-calendar3" aria-hidden="true"></i> 01 a 31 de agosto</li>
                <li><i class="bi bi-lightning-charge-fill" aria-hidden="true"></i> 2 programas</li>
                <li><i class="bi bi-trophy-fill" aria-hidden="true"></i> R$ 22.500 em prêmios</li>
            </ul>
        </div>
    </header>

    <div class="page-panel-wrap">
        <div class="white-panel">
            <div class="section-pad">
                <h2 class="section-title">Regras <span class="accent">gerais</span></h2>
                <p class="section-sub">Valem para todos os programas e premiações.</p>

                <div class="rule-list">
                    <article class="rule-card">
                        <div class="rule-icon" aria-hidden="true"><i class="bi bi-calendar3"></i></div>
                        <div class="rule-body">
                            <h3>Agendamento e boleto pago em agosto</h3>
                            <p>Ou outra data, caso as administradoras prorroguem as campanhas.</p>
                        </div>
                    </article>
                    <article class="rule-card">
                        <div class="rule-icon" aria-hidden="true"><i class="bi bi-slash-circle"></i></div>
                        <div class="rule-body">
                            <h3>Reuniões já iniciadas não contam</h3>
                            <p>Sejam elas em fases preliminares ou finais, não serão contabilizadas.</p>
                        </div>
                    </article>
                    <article class="rule-card">
                        <div class="rule-icon" aria-hidden="true"><i class="bi bi-printer"></i></div>
                        <div class="rule-body">
                            <h3>Vale a produção na Âncora e na Porto Seguro</h3>
                            <p>São as administradoras que apoiaram a Univalores na construção desta campanha.</p>
                            <div class="rule-tags">
                                <span class="tag">Âncora</span>
                                <span class="tag">Porto Seguro</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="divider"></div>

                <h2 class="section-title">Como <span class="accent">funciona</span></h2>
                <p class="section-sub">Dois programas independentes. Você pode participar dos dois.</p>

                <div class="program-grid">
                    <article class="program-card">
                        <div class="program-label"><i class="bi bi-fast-forward-fill"></i> Programa 1</div>
                        <h3>Antecipação de Comissão</h3>
                        <p class="program-hero">6 parcelas</p>
                        <ul class="program-list">
                            <li>
                                <span class="check"><i class="bi bi-check-lg"></i></span>
                                <div>
                                    <strong>Sua comissão vem antes</strong>
                                    <em>a comissão do assessor é antecipada</em>
                                </div>
                            </li>
                            <li>
                                <span class="check"><i class="bi bi-check-lg"></i></span>
                                <div>
                                    <strong>Vale a produção paga do período</strong>
                                    <em>Porto Seguro e Âncora</em>
                                </div>
                            </li>
                            <li>
                                <span class="check"><i class="bi bi-check-lg"></i></span>
                                <div>
                                    <strong>Comissões pagas em M+1</strong>
                                    <em>conforme comissão paga pelas administradoras</em>
                                </div>
                            </li>
                        </ul>
                    </article>
                    <article class="program-card">
                        <div class="program-label"><i class="bi bi-person-plus-fill"></i> Programa 2</div>
                        <h3>Bônus para Novos Produtores</h3>
                        <p class="program-hero">R$ 1.000<span>de bônus</span></p>
                        <ul class="program-list">
                            <li>
                                <span class="check"><i class="bi bi-check-lg"></i></span>
                                <div>
                                    <strong>A partir de R$ 500.000</strong>
                                    <em>em produção de consórcio no período</em>
                                </div>
                            </li>
                            <li>
                                <span class="check"><i class="bi bi-check-lg"></i></span>
                                <div>
                                    <strong>Só para quem ainda não produziu</strong>
                                    <em>assessores sem produção de consórcio em 2026</em>
                                </div>
                            </li>
                            <li>
                                <span class="check"><i class="bi bi-check-lg"></i></span>
                                <div>
                                    <strong>Período: 01 a 31 de agosto</strong>
                                    <em>bônus pago em outubro</em>
                                </div>
                            </li>
                        </ul>
                    </article>
                </div>

                <div class="divider"></div>

                <h2 class="section-title">Premiação</h2>
                <p class="section-sub">Três rankings independentes, apurados na produção de agosto.</p>
                <div class="premio-total-banner">
                    <span class="value">R$ 22.500</span>
                    <span class="label">no total</span>
                </div>

                <div class="premio-grid">
                    <article class="premio-card">
                        <div class="premio-kicker">Premiação 1</div>
                        <h3>Maior quantidade de clientes</h3>
                        <p class="premio-amount">R$ 10.000</p>
                        <ul class="rank-list">
                            <li><span>1º lugar</span><span class="prize">R$ 5.000</span></li>
                            <li><span>2º lugar</span><span class="prize">R$ 3.500</span></li>
                            <li><span>3º lugar</span><span class="prize">R$ 1.500</span></li>
                        </ul>
                        <p class="premio-note">Mínimo de 3 clientes · desempate por produção total</p>
                    </article>
                    <article class="premio-card">
                        <div class="premio-kicker">Premiação 2</div>
                        <h3>Maior valor de produção</h3>
                        <p class="premio-amount">R$ 10.000</p>
                        <ul class="rank-list">
                            <li><span>1º lugar</span><span class="prize">R$ 5.000</span></li>
                            <li><span>2º lugar</span><span class="prize">R$ 3.500</span></li>
                            <li><span>3º lugar</span><span class="prize">R$ 1.500</span></li>
                        </ul>
                        <p class="premio-note">Desempate por quantidade de clientes</p>
                    </article>
                    <article class="premio-card">
                        <div class="premio-kicker">Premiação 3</div>
                        <h3>Ranking de equipes por produção média</h3>
                        <p class="premio-amount">R$ 2.500</p>
                        <ul class="rank-list">
                            <li><span>Equipe campeã</span><span class="prize">R$ 2.500</span></li>
                        </ul>
                        <p class="premio-note">Maior produção média por assessor da equipe</p>
                    </article>
                </div>

                <div class="divider" id="agendamento"></div>

                <h2 class="section-title">Agendar com o <span class="accent">consultor de consórcio</span></h2>
                <p class="section-sub">Booking dos consultores disponível. Consulte os horários e agende diretamente as reuniões com seus clientes.</p>

                <div class="orientacao-box">
                    <h3><i class="bi bi-info-circle-fill"></i> Orientação importante</h3>
                    <ul>
                        <li><strong>Priorize o consultor que normalmente lhe atende.</strong></li>
                        <li>Se todas as agendas estiverem esgotadas, <strong>Paula Julien</strong> fica como backup — acione somente após esgotar as opções do seu consultor.</li>
                    </ul>
                </div>

                <div class="consultants-grid">
                    @foreach ($consultants as $c)
                        <article class="c-card{{ !empty($c['backup']) ? ' backup' : '' }}">
                            <h3>{{ $c['name'] }}</h3>
                            <span class="role">{{ $c['role'] }}</span>
                            <a class="btn-book" href="{{ $c['url'] }}" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-calendar-plus" aria-hidden="true"></i>
                                Abrir agenda
                            </a>
                        </article>
                    @endforeach
                </div>

                <div class="divider"></div>

                <h2 class="section-title">Consórcio PJ / <span class="accent">Operações para empresas</span></h2>
                <p class="section-sub">Oportunidades com consórcio para pessoa jurídica — time comercial PJ:</p>

                <div class="pj-grid">
                    @foreach ($pjContacts as $p)
                        <div class="pj-item">
                            <span class="nome">{{ $p['name'] }}</span>
                            <div class="links">
                                <a href="https://wa.me/{{ $p['wa'] }}" target="_blank" rel="noopener noreferrer" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> {{ $p['phone'] }}</a>
                                <a href="mailto:{{ $p['email'] }}" class="email-link">{{ $p['email'] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="cta-box" style="margin-top: 2rem;">
                    <p>Aproveitem a estrutura, agendem o máximo de reuniões e tragam oportunidades para o time de consórcio estruturar com vocês.</p>
                    <span class="highlight">Vamos fazer da Campanha de Consórcio Agosto/26 uma grande ação comercial.</span>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <small>
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. O Assessor de Investimento não administra o patrimônio de investidores. Para informações sobre produtos, contate seu assessor. Conteúdo destinado a assessores; pode ser confidencial.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
