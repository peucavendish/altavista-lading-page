<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos Econômicos e as mudanças no mercado — Linha fina: Como identificar choques, mudanças estruturais e o que realmente constrói patrimônio | Alta Vista Investimentos</title>
    <meta name="description" content="Como identificar choques, mudanças estruturais e o que realmente constrói patrimônio. Conteúdo sobre ciclos econômicos e mudanças no mercado, com a Alta Vista.">
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #001845;
            --ink: #16213e;
            --gold: #ffc971;
            --gold-strong: #e8b45a;
            --light: #ebedf2;
            --white: #ffffff;
            --muted: #6f7c98;
            --surface: #f6f8fe;
        }

        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'GT America', 'Inter', Arial, sans-serif;
            background: var(--navy);
            color: var(--light);
            margin: 0;
        }

        .hero {
            padding: 5rem 1rem 6.5rem;
            background:
                radial-gradient(circle at 80% 0%, rgba(255, 201, 113, 0.15), rgba(255, 201, 113, 0) 40%),
                linear-gradient(180deg, #001845 0%, #062862 100%);
        }

        .hero .container {
            text-align: center;
        }

        .hero-stack {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-bottom: 1rem;
        }

        .hero-logo {
            display: block;
            max-width: 340px;
            width: 100%;
            height: auto;
        }

        .badge-live {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.78rem;
            background: rgba(255, 201, 113, 0.18);
            border: 1px solid rgba(255, 201, 113, 0.35);
            color: var(--gold);
            border-radius: 999px;
            padding: 0.45rem 0.85rem;
            margin: 0 0 0.85rem;
            width: fit-content;
            flex-shrink: 0;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 700;
            line-height: 1;
            white-space: nowrap;
        }

        .hero h1 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            line-height: 1.08;
            font-weight: 800;
            color: #fff;
            margin: 0;
            letter-spacing: -0.02em;
            max-width: 46rem;
            width: 100%;
        }

        .hero-eyebrow {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.14em;
            color: var(--gold);
            margin: 0 auto 0.65rem;
            max-width: 46rem;
            line-height: 1.35;
        }

        .hero-eyebrow::after {
            content: "";
            display: block;
            width: 2.5rem;
            height: 2px;
            margin: 0.55rem auto 0;
            background: linear-gradient(90deg, transparent, var(--gold-strong), transparent);
            opacity: 0.85;
        }

        .hero h1 .hero-headline {
            display: block;
        }

        .hero h1 .title-line {
            display: block;
            font-size: clamp(1.2rem, 2.1vw, 1.8rem);
            font-weight: 600;
            color: #cfd9f7;
            margin-top: 0.55rem;
            line-height: 1.35;
            letter-spacing: -0.01em;
        }

        .highlight {
            color: var(--gold);
            font-weight: 800;
        }

        .subtitle {
            max-width: 760px;
            color: #d6def3;
            font-size: 1.08rem;
            margin: 0 auto 1.5rem;
        }

        .trust-row {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.8rem;
            max-width: 760px;
            margin: 0 auto;
        }

        .trust-card {
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(3px);
            padding: 0.85rem;
        }

        .trust-number {
            color: var(--gold);
            font-size: 1.1rem;
            font-weight: 800;
            margin-bottom: 0.15rem;
        }

        .trust-label {
            font-size: 0.86rem;
            color: #d8e0f6;
        }

        .main-wrap {
            margin-top: -4rem;
            position: relative;
            z-index: 3;
            padding: 0 1rem 4.5rem;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1.4fr 0.9fr;
            gap: 1.2rem;
        }

        .panel {
            background: var(--white);
            color: var(--ink);
            border-radius: 18px;
            border: 1px solid rgba(0, 24, 69, 0.08);
            box-shadow: 0 18px 48px rgba(4, 15, 45, 0.25);
            padding: 2rem;
        }

        .course-explainer {
            background: linear-gradient(180deg, #f8fbff 0%, #eef4ff 100%);
            border: 1px solid rgba(17, 48, 108, 0.14);
            border-radius: 14px;
            padding: 1rem 1rem 0.95rem;
            margin-bottom: 0.85rem;
        }

        .vsl-space {
            border-radius: 14px;
            border: 1px solid rgba(17, 48, 108, 0.2);
            background: #0d1735;
            overflow: hidden;
            margin-bottom: 0.95rem;
            aspect-ratio: 16 / 9;
        }

        .vsl-space iframe {
            width: 100%;
            height: 100%;
            border: 0;
            display: block;
        }

        .course-explainer h3 {
            margin: 0 0 0.45rem;
            font-size: 1.03rem;
            color: #123470;
            font-weight: 800;
        }

        .course-explainer p {
            margin: 0;
            color: #3f557e;
            line-height: 1.5;
            font-size: 0.94rem;
        }

        .offer-card {
            background: linear-gradient(180deg, #0d2a63 0%, #08214f 100%);
            color: #e9efff;
            border-radius: 18px;
            box-shadow: 0 18px 48px rgba(4, 15, 45, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.16);
            padding: 1.5rem 1.3rem;
            position: sticky;
            top: 1rem;
            height: fit-content;
        }

        .offer-title {
            color: #fff;
            font-size: 1.45rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 0.35rem;
        }

        .offer-subtitle {
            color: #cfd9f7;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 1.15rem;
        }

        .price {
            margin: 0.3rem 0 1.3rem;
            padding: 0.9rem 0.95rem;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.14);
        }
        .price small {
            color: #dbe5ff;
            display: block;
            margin-bottom: 0.35rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            font-size: 0.75rem;
            font-weight: 700;
        }
        .price strong {
            color: var(--gold);
            font-size: 2.3rem;
            font-weight: 800;
            line-height: 1.05;
            display: block;
        }

        .offer-items {
            list-style: none;
            padding: 0;
            margin: 0.7rem 0 1.2rem;
        }

        .offer-items li {
            font-size: 0.98rem;
            margin-bottom: 0.65rem;
            line-height: 1.45;
            padding-left: 1.3rem;
            position: relative;
            color: #e7eeff;
        }

        .offer-items li::before {
            content: "•";
            color: var(--gold);
            font-weight: 800;
            position: absolute;
            left: 0;
            top: 0;
        }

        .benefits {
            margin: 1.5rem 0;
            padding: 0;
            list-style: none;
        }

        .benefits li {
            margin-bottom: 0.75rem;
            padding-left: 1.5rem;
            position: relative;
            color: #25385e;
            font-weight: 500;
        }

        .benefits li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: #2e9e5b;
            font-weight: 700;
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.9rem;
            margin-top: 1.4rem;
        }

        .benefit-card {
            border: 1px solid rgba(0, 24, 69, 0.1);
            background: var(--surface);
            border-radius: 14px;
            padding: 1rem;
        }

        .benefit-card h3 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.35rem;
            color: #173160;
        }

        .benefit-card p {
            margin: 0;
            color: #4d607f;
            font-size: 0.92rem;
        }

        .audience-row {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.9rem;
            margin-top: 1.5rem;
        }

        .audience-card {
            background: #fff;
            border: 1px solid rgba(0, 24, 69, 0.1);
            border-radius: 14px;
            padding: 1rem;
            color: #2d3d60;
        }

        .audience-card p {
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .audience-card span {
            font-size: 0.82rem;
            color: #647595;
            font-weight: 600;
        }

        .section-cta {
            margin: 0 1rem 1.5rem;
        }

        .program-section {
            margin: 0 1rem 1.5rem;
        }

        .program-panel {
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid rgba(0, 24, 69, 0.1);
            box-shadow: 0 18px 48px rgba(4, 15, 45, 0.2);
            padding: 1.5rem;
            color: #22345a;
        }

        .program-panel h2 {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0f2b62;
            margin-bottom: 0.35rem;
        }

        .program-panel > p {
            color: #53678b;
            margin-bottom: 1rem;
        }

        .module-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.85rem;
        }

        .module-card {
            border: 1px solid rgba(0, 24, 69, 0.1);
            border-radius: 14px;
            background: #f8faff;
            padding: 1.05rem;
            box-shadow: 0 8px 20px rgba(17, 48, 108, 0.08);
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
        }

        .module-card h3 {
            font-size: 1.01rem;
            color: #11306c;
            font-weight: 800;
            margin: 0;
            line-height: 1.35;
        }

        .module-meta {
            color: #3e5c93;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            background: #eaf1ff;
            border: 1px solid #d6e3ff;
            border-radius: 999px;
            padding: 0.25rem 0.6rem;
            width: fit-content;
        }

        .module-topics {
            margin: 0;
            padding-left: 1.1rem;
            color: #2f436d;
        }

        .module-topics li {
            margin-bottom: 0.38rem;
            font-size: 0.92rem;
            line-height: 1.42;
        }

        .section-cta-inner {
            background: linear-gradient(90deg, #081f4e 0%, #123479 100%);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 18px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .section-cta h3 {
            margin: 0;
            color: #fff;
            font-size: 1.25rem;
            font-weight: 800;
        }

        .section-cta p {
            margin: 0.25rem 0 0;
            color: #dbe5ff;
        }

        .cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1.4rem;
        }

        .btn-buy {
            background: var(--gold);
            color: #001845;
            border: none;
            font-weight: 800;
            border-radius: 999px;
            padding: 0.85rem 1.5rem;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
        }

        .btn-buy:hover {
            background: var(--gold-strong);
            color: #001845;
            transform: translateY(-1px);
        }

        .btn-secondary-light {
            border: 1px solid rgba(0, 24, 69, 0.15);
            color: #2c3d64;
            border-radius: 999px;
            padding: 0.85rem 1.5rem;
            text-decoration: none;
            font-weight: 600;
            background: #fff;
            display: inline-block;
        }

        .btn-buy-full {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 0.45rem;
            font-size: 1.04rem;
            padding: 0.95rem 1.5rem;
        }

        .micro-note {
            font-size: 0.84rem;
            color: #d2ddfb;
            margin-top: 0.85rem;
            text-align: center;
        }

        footer {
            padding: 2rem 1rem 2.5rem;
        }

        footer small {
            color: #d8def0;
            line-height: 1.5;
            display: block;
            text-align: justify;
        }

        @media (max-width: 991px) {
            .hero { padding: 4rem 1rem 6rem; }
            .trust-row { grid-template-columns: 1fr; }
            .content-grid { grid-template-columns: 1fr; }
            .offer-card { position: static; }
            .benefit-grid { grid-template-columns: 1fr; }
            .audience-row { grid-template-columns: 1fr; }
            .module-list { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="container">
            <div class="hero-stack">
                <img src="/logo-altavista.png" alt="Alta Vista Investimentos" class="hero-logo mb-4">
                <span class="badge-live">Curso Online</span>
                <p class="hero-eyebrow">Aula gratuita</p>
                <h1>
                    <span class="hero-headline">Ciclos Econômicos e as mudanças no <span class="highlight">mercado</span></span>
                    <span class="title-line">Como identificar choques, mudanças estruturais e o que realmente constrói patrimônio.</span>
                </h1>
            </div>
            <p class="subtitle">
                Uma aula gratuita explicando que o mercado não muda toda hora
            </p>
            <div class="trust-row">
                <div class="trust-card">
                    <div class="trust-number">Didática simples</div>
                    <div class="trust-label">Conteúdo claro, sem complicação desnecessária.</div>
                </div>
                <div class="trust-card">
                    <div class="trust-number">100% online</div>
                    <div class="trust-label">Estude no seu ritmo, de onde estiver.</div>
                </div>
                <div class="trust-card">
                    <div class="trust-number">Aplicação prática</div>
                    <div class="trust-label">Você sai com direção para aplicar no dia a dia.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-wrap">
        <div class="container">
            <div class="content-grid">
                <div class="panel">
                    <h2 class="h4 fw-bold mb-3">Ciclos Econômicos e as mudanças no mercado</h2>

                    <div class="vsl-space">
                        <iframe
                            src="https://www.youtube.com/embed/Vhbq1RQKJVY?autoplay=1&mute=1&playsinline=1&rel=0&modestbranding=1&loop=1&playlist=Vhbq1RQKJVY"
                            title="Vídeo de apresentação do curso Inteligência em Investimentos"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>

                    <div class="course-explainer">
                        <h3>Uma formação para investir com mais clareza</h3>
                        <p>Curso online para quem quer organizar a vida financeira e entender investimentos de forma prática, sem depender de dicas aleatórias.</p>
                    </div>

                    <div class="course-explainer">
                        <h3>Como funciona</h3>
                        <p>Você percorre módulos progressivos, do básico ao estratégico: perfil, renda fixa, renda variável, fundos, alocação e comportamento.</p>
                    </div>

                    <div class="course-explainer">
                        <h3>Para quem foi feito</h3>
                        <p>Para pessoas que querem construir repertório financeiro para tomar decisões mais conscientes e consistentes no longo prazo.</p>
                    </div>

                    <ul class="benefits">
                        <li>Entenda como estruturar sua vida financeira na prática.</li>
                        <li>Aprenda os fundamentos para investir com mais segurança.</li>
                        <li>Crie um plano financeiro consistente para curto, médio e longo prazo.</li>
                        <li>Evite erros comuns que atrapalham o crescimento do patrimônio.</li>
                    </ul>

                    <div class="benefit-grid">
                        <article class="benefit-card">
                            <h3>Diagnóstico financeiro pessoal</h3>
                            <p>Entenda sua situação atual e identifique prioridades de ajuste.</p>
                        </article>
                        <article class="benefit-card">
                            <h3>Fundamentos de investimentos</h3>
                            <p>Conheça princípios para investir com coerência ao seu perfil.</p>
                        </article>
                        <article class="benefit-card">
                            <h3>Planejamento financeiro</h3>
                            <p>Organize metas e decisões com um plano aplicável ao dia a dia.</p>
                        </article>
                        <article class="benefit-card">
                            <h3>Visão de longo prazo</h3>
                            <p>Desenvolva hábitos financeiros sustentáveis ao longo do tempo.</p>
                        </article>
                    </div>

                    <div class="cta-group">
                        <a
                            class="btn-buy"
                            href="https://ponto-de-vista.tradeinsights.com/plano/inteligencia-financeira/inteligencia-financeira"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Quero garantir minha vaga
                        </a>
                        <a class="btn-secondary-light" href="#programa-curso">Ver conteúdo do curso</a>
                    </div>

                    <div class="audience-row">
                        <article class="audience-card">
                            <p>Para quem quer organizar a vida financeira e parar de depender de decisões por impulso.</p>
                            <span>Para quem é</span>
                        </article>
                        <article class="audience-card">
                            <p>Para quem busca uma base prática de planejamento, controle financeiro e investimentos.</p>
                            <span>O que você encontra</span>
                        </article>
                        <article class="audience-card">
                            <p>Curso educacional. Não constitui recomendação individual de investimento.</p>
                            <span>Informação importante</span>
                        </article>
                    </div>
                </div>

                <aside class="offer-card">
                    <div class="offer-title">Garanta sua vaga no curso</div>
                    <p class="offer-subtitle">Acesso ao conteúdo completo do curso Inteligência em Investimentos, em formato online.</p>

                    <div class="price">
                        <small>Inscrição</small>
                        <strong>Consulte no checkout</strong>
                    </div>

                    <ul class="offer-items">
                        <li>Conteúdo em linguagem simples e aplicável.</li>
                        <li>Roteiro completo, do básico ao estratégico.</li>
                        <li>Acesso liberado após a confirmação da compra.</li>
                    </ul>

                    <a
                        class="btn-buy btn-buy-full"
                        href="https://ponto-de-vista.tradeinsights.com/plano/inteligencia-financeira/inteligencia-financeira"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Quero me inscrever
                    </a>
                    <div class="micro-note">Pagamento e confirmação em ambiente seguro.</div>
                </aside>
            </div>
        </div>
    </section>

    <section class="program-section" id="programa-curso">
        <div class="container">
            <div class="program-panel">
                <h2>O que você vai aprender no curso</h2>
                <p>Uma trilha progressiva para você entender, organizar e evoluir sua vida financeira.</p>

                <div class="module-list">
                    <article class="module-card">
                        <h3>Módulo 1 — Fundamentos da Riqueza e dos Investimentos</h3>
                        <div class="module-meta">Fundamentos do investidor</div>
                        <ol class="module-topics">
                            <li>O que é investir (vs. especular).</li>
                            <li>Tempo e juros compostos.</li>
                            <li>Risco, retorno e liquidez.</li>
                            <li>O impacto da inflação.</li>
                            <li>Psicologia financeira básica.</li>
                        </ol>
                    </article>

                    <article class="module-card">
                        <h3>Módulo 2 — Perfil, Objetivos e Planejamento</h3>
                        <div class="module-meta">Perfil e objetivos</div>
                        <ol class="module-topics">
                            <li>Entendendo o seu perfil de risco.</li>
                            <li>Definindo objetivos por horizonte.</li>
                            <li>Carteiras coerentes com a vida real.</li>
                            <li>A importância de pensar em propósito.</li>
                        </ol>
                    </article>

                    <article class="module-card">
                        <h3>Módulo 3 — Renda Fixa: o Alicerce da Carteira</h3>
                        <div class="module-meta">Renda fixa na prática</div>
                        <ol class="module-topics">
                            <li>Tipos de ativos e seus riscos.</li>
                            <li>Como ler um título de crédito.</li>
                            <li>Marcação a mercado (exemplo visual).</li>
                            <li>Isenção de IR e eficiência tributária.</li>
                            <li>Montando sua base de segurança.</li>
                        </ol>
                    </article>

                    <article class="module-card">
                        <h3>Módulo 4 — Renda Variável: Participar da Economia Real</h3>
                        <div class="module-meta">Ações, FIIs e volatilidade</div>
                        <ol class="module-topics">
                            <li>Ser sócio de empresas.</li>
                            <li>Dividendos e lucros reais.</li>
                            <li>Fundos Imobiliários: renda e risco.</li>
                            <li>Ações x FIIs: o equilíbrio.</li>
                            <li>Como lidar com volatilidade.</li>
                        </ol>
                    </article>

                    <article class="module-card">
                        <h3>Módulo 5 — Fundos e Soluções Globais</h3>
                        <div class="module-meta">Fundos e alocação global</div>
                        <ol class="module-topics">
                            <li>Por que investir via fundos.</li>
                            <li>Multimercados, ações e crédito privado.</li>
                            <li>Diversificação internacional.</li>
                            <li>ETFs, BDRs e fundos offshore.</li>
                            <li>A importância da gestão profissional.</li>
                        </ol>
                    </article>

                    <article class="module-card">
                        <h3>Módulo 6 — Estratégia e Coerência Patrimonial</h3>
                        <div class="module-meta">Gestão e rebalanceamento</div>
                        <ol class="module-topics">
                            <li>Alocação de ativos (modelo prático).</li>
                            <li>Rebalanceamento e acompanhamento.</li>
                            <li>Eficiência tributária e sucessória.</li>
                            <li>Relatórios e leitura de performance.</li>
                            <li>Crises e comportamento do investidor.</li>
                        </ol>
                    </article>

                    <article class="module-card">
                        <h3>Módulo Bônus — Psicologia Financeira</h3>
                        <div class="module-meta">Comportamento e disciplina</div>
                        <ol class="module-topics">
                            <li>O ciclo emocional do investidor.</li>
                            <li>Dopamina e ilusão do controle.</li>
                            <li>Como as emoções afetam decisões.</li>
                            <li>A virtude da paciência e da constância.</li>
                            <li>Mentalidade antifrágil.</li>
                        </ol>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cta">
        <div class="container">
            <div class="section-cta-inner">
                <div>
                    <h3>Pronto para dar o próximo passo nos seus investimentos?</h3>
                    <p>Veja o conteúdo do curso e conclua sua inscrição quando estiver pronto.</p>
                </div>
                <a
                    class="btn-buy"
                    href="https://ponto-de-vista.tradeinsights.com/plano/inteligencia-financeira/inteligencia-financeira"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Quero começar agora
                </a>
            </div>
        </div>
    </section>

    <footer class="container">
        <small>
            A ALTA VISTA INVESTIMENTOS - ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75, é uma empresa de Assessoria de Investimentos devidamente registrada na Comissão de Valores Mobiliários, na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP"). O Assessor de Investimentos não pode administrar ou gerir o patrimônio de investidores. Investimentos em renda variável e derivativos envolvem riscos e podem acarretar perdas superiores ao capital investido. Este curso possui caráter educacional.
        </small>
    </footer>

</body>
</html>
