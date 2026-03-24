<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Pesquisa com clientes Alta Vista Investimentos — sua opinião nos ajuda a evoluir o atendimento e os serviços.">
    <title>Pesquisa com clientes | Alta Vista Investimentos</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #001845;
            --ink: #16213e;
            --gold: #FFC971;
            --card: #f5f7fc;
            --light-bg: #EBEDF2;
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        * {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'GT America', Arial, sans-serif;
            background: var(--navy);
            overflow-x: hidden;
            margin: 0;
            min-height: 100vh;
        }

        /* Hero – alinhado a ekis-prevent / irpfm-webinar */
        .hero-split {
            min-height: 58vh;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0;
            position: relative;
        }
        .hero-left {
            background: linear-gradient(135deg, rgba(0,24,69,0.92) 0%, rgba(0,24,69,0.78) 45%, rgba(22,33,62,0.82) 100%),
                        url('https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center/cover no-repeat;
            color: #EBEDF2;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            min-height: 520px;
            width: 100vw;
        }
        .hero-left::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 35% 35%, rgba(255,201,113,0.14) 0%, transparent 52%);
            pointer-events: none;
        }
        .hero-content-inspire {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 3.5rem 1.5rem 3rem;
            width: 100%;
            max-width: 920px;
            margin: 0 auto;
        }
        .logo-hero {
            max-width: 300px;
            width: 100%;
            margin: 0 auto 1.75rem;
            display: block;
            filter: drop-shadow(0 4px 20px rgba(0,0,0,0.35));
            animation: fadeInDown 0.75s ease-out;
        }
        .pesquisa-badge {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            padding: 0.7rem 1.75rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 1.35rem;
            box-shadow: 0 6px 22px rgba(255,201,113,0.38);
            animation: fadeInDown 0.75s ease-out 0.08s both;
            letter-spacing: 0.55px;
            text-transform: uppercase;
        }
        .hero-content-inspire h1 {
            font-size: clamp(2rem, 4.5vw, 3rem);
            font-weight: 800;
            line-height: 1.18;
            color: #EBEDF2;
            text-shadow: 0 4px 22px rgba(0,24,69,0.45);
            letter-spacing: -0.8px;
            margin: 0 0 1.1rem;
            animation: fadeInUp 0.75s ease-out 0.15s both;
        }
        .hero-content-inspire h1 .accent {
            color: var(--gold);
        }
        .hero-content-inspire .lead-text {
            font-size: 1.22rem;
            margin: 0;
            opacity: 0.95;
            line-height: 1.65;
            max-width: 640px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 0.75s ease-out 0.28s both;
        }
        .hero-meta {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin: 2.25rem 0 0;
            padding: 0;
            list-style: none;
            animation: fadeInUp 0.75s ease-out 0.4s both;
        }
        .hero-chips {
            max-width: 820px;
            margin-left: auto;
            margin-right: auto;
        }
        .hero-meta li {
            display: flex;
            align-items: center;
            gap: 0.55rem;
            padding: 0.65rem 1.15rem;
            background: rgba(255,255,255,0.07);
            backdrop-filter: blur(10px);
            border-radius: 14px;
            border: 1px solid rgba(255,201,113,0.22);
            color: #EBEDF2;
            font-size: 0.92rem;
            font-weight: 600;
        }
        .hero-meta li i {
            color: var(--gold);
            font-size: 1.15rem;
        }

        /* Card sobreposto – padrão theme-highlight / about-section */
        .theme-highlight {
            background: #fff;
            border-radius: 24px;
            padding: 2.75rem 2.5rem;
            margin: -64px auto 0;
            max-width: 1100px;
            position: relative;
            z-index: 4;
            box-shadow: 0 16px 48px rgba(0,24,69,0.28);
            border: 2px solid rgba(255,201,113,0.32);
        }
        .theme-highlight-header {
            text-align: center;
            margin-bottom: 1.75rem;
        }
        .theme-highlight-header h2 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--ink);
            margin: 0 0 0.65rem;
            letter-spacing: -0.4px;
        }
        .theme-highlight-header h2 .accent {
            color: var(--gold);
        }
        .theme-highlight-header p {
            font-size: 1.08rem;
            color: #444;
            line-height: 1.75;
            max-width: 720px;
            margin: 0 auto;
        }
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.35rem;
            margin-top: 1.5rem;
        }
        .benefit-card {
            background: var(--card);
            border-radius: 16px;
            padding: 1.5rem 1.35rem;
            border: 1px solid rgba(255,201,113,0.14);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            height: 100%;
        }
        .benefit-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 28px rgba(0,24,69,0.12);
        }
        .benefit-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            margin-bottom: 0.9rem;
            box-shadow: 0 4px 14px rgba(255,201,113,0.28);
        }
        .benefit-card h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--ink);
            margin: 0 0 0.45rem;
        }
        .benefit-card p {
            margin: 0;
            font-size: 0.98rem;
            color: #555;
            line-height: 1.6;
        }
        .benefit-card a {
            color: var(--ink);
            font-weight: 700;
            text-decoration: underline;
            text-underline-offset: 3px;
        }
        .benefit-card a:hover {
            color: #0d47a1;
        }

        /* Form – padrão lead-section IRPFM */
        .lead-section {
            background: var(--card);
            border-radius: 24px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            margin: 2.5rem auto 2.5rem;
            padding: 3.5rem 2.75rem;
            max-width: 750px;
            position: relative;
            z-index: 3;
            border: 1px solid rgba(255,201,113,0.1);
        }
        .heading-accent {
            color: var(--ink);
            font-weight: 800;
            letter-spacing: -0.4px;
            font-size: 2.1rem;
            margin-bottom: 0.85rem;
            text-align: center;
        }
        .heading-accent::after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: var(--gold);
            border-radius: 3px;
            margin: 1.35rem auto 0;
        }
        .form-intro {
            text-align: center;
            color: #555;
            font-size: 1.08rem;
            line-height: 1.7;
            margin-bottom: 0.5rem;
        }
        #hubspot-form-container {
            padding: 1.25rem 0 0;
        }

        footer {
            background: rgba(0,24,69,0.25);
            border-radius: 20px;
            margin: 0 auto 2rem;
            max-width: 1200px;
        }
        footer small {
            color: rgba(255,255,255,0.9);
            font-size: 0.88rem;
            line-height: 1.55;
            display: block;
            text-align: justify;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 991px) {
            .hero-left { min-height: 480px; }
            .theme-highlight {
                margin-top: -48px;
                padding: 2.25rem 1.75rem;
            }
            .theme-highlight-header h2 { font-size: 1.75rem; }
            .lead-section {
                margin-left: 1rem;
                margin-right: 1rem;
                padding: 2.75rem 1.75rem;
            }
        }
        @media (max-width: 576px) {
            .hero-left { min-height: 440px; }
            .hero-content-inspire { padding: 2.5rem 1.25rem 2.25rem; }
            .hero-content-inspire .lead-text { font-size: 1.05rem; }
            .pesquisa-badge {
                font-size: 0.78rem;
                padding: 0.55rem 1.25rem;
            }
            .heading-accent { font-size: 1.75rem; }
            .hero-meta { flex-direction: column; align-items: stretch; }
            .hero-meta li { justify-content: center; }
        }
    </style>
</head>
<body>
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo-hero" width="300" height="auto">
                <div class="pesquisa-badge">Pesquisa com clientes</div>
                <h1>Queremos ouvir <span class="accent">você</span></h1>
                <p class="lead-text">Uma pesquisa rápida para entender expectativas, experiência e como podemos evoluir. Poucos minutos — e suas respostas fazem diferença.</p>
                <ul class="hero-meta hero-chips">
                    <li>
                        <i class="bi bi-stopwatch" aria-hidden="true"></i>
                        Poucos minutos
                    </li>
                    <li>
                        <i class="bi bi-shield-check" aria-hidden="true"></i>
                        Privacidade respeitada
                    </li>
                    <li>
                        <i class="bi bi-chat-heart" aria-hidden="true"></i>
                        Melhoria contínua
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container px-3 px-md-4">
        <div class="theme-highlight">
            <div class="theme-highlight-header">
                <h2>Por que <span class="accent">participar</span>?</h2>
                <p>Sua opinião orienta prioridades: produtos, comunicação, canais e relacionamento. Quanto mais clientes responderem, mais representativa fica a visão que teremos do que importa para você.</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-card-icon" aria-hidden="true"><i class="bi bi-graph-up-arrow"></i></div>
                    <h3>Impacto direto</h3>
                    <p>Usamos os aprendizados para calibrar ofertas, conteúdo e forma de atendimento.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card-icon" aria-hidden="true"><i class="bi bi-lock-fill"></i></div>
                    <h3>Dados com cuidado</h3>
                    <p>Tratamento alinhado à nossa <a href="/politica-privacidade">Política de Privacidade</a>.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card-icon" aria-hidden="true"><i class="bi bi-person-lines-fill"></i></div>
                    <h3>Fale com quem te atende</h3>
                    <p>Dúvidas sobre a pesquisa? Recorra ao seu assessor ou ao canal que você já usa com a Alta Vista.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container px-3 px-md-4 pb-2">
        <div class="lead-section">
            <h2 class="heading-accent">Responder à pesquisa</h2>
            <p class="form-intro mb-0">Preencha o formulário abaixo. Se o formulário não aparecer, desative bloqueadores nesta página ou abra em outro navegador.</p>
            <div id="hubspot-form-container">
                <div class="hs-form-frame" data-region="na1" data-form-id="b79b0552-8314-44c1-b91b-d5a9dc0d1cae" data-portal-id="21698044"></div>
            </div>
        </div>
    </section>

    <footer class="container py-4 px-3">
        <small>
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://js.hsforms.net/forms/embed/21698044.js" defer></script>
    <style>
        .hs-form-frame {
            background: transparent !important;
            border: none !important;
            padding: 0 !important;
        }
        .hs-form-frame .hs-form {
            background: transparent !important;
            padding: 0 !important;
        }
        .hs-form-frame .hs-form fieldset {
            max-width: 100% !important;
            border: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        .hs-form-frame .hs-form .hs-form-field {
            margin-bottom: 1.85rem !important;
        }
        .hs-form-frame .hs-form label {
            color: var(--ink) !important;
            font-weight: 600 !important;
            margin-bottom: 0.7rem !important;
            font-size: 0.95rem !important;
            display: block !important;
            font-family: 'GT America', Arial, sans-serif !important;
        }
        .hs-form-frame .hs-form input[type="text"],
        .hs-form-frame .hs-form input[type="email"],
        .hs-form-frame .hs-form input[type="tel"],
        .hs-form-frame .hs-form input[type="number"],
        .hs-form-frame .hs-form select,
        .hs-form-frame .hs-form textarea {
            border: 2px solid rgba(12, 24, 64, 0.12) !important;
            border-radius: 12px !important;
            padding: 0.875rem 1.25rem !important;
            font-size: 1rem !important;
            background: #fff !important;
            width: 100% !important;
            transition: border-color 0.2s ease, box-shadow 0.2s ease !important;
            font-family: 'GT America', Arial, sans-serif !important;
            color: var(--ink) !important;
            box-sizing: border-box !important;
        }
        .hs-form-frame .hs-form input::placeholder,
        .hs-form-frame .hs-form textarea::placeholder {
            color: #999 !important;
            opacity: 0.75 !important;
        }
        .hs-form-frame .hs-form input:focus,
        .hs-form-frame .hs-form select:focus,
        .hs-form-frame .hs-form textarea:focus {
            border-color: var(--gold) !important;
            box-shadow: 0 0 0 0.25rem rgba(255,201,113,.2) !important;
            outline: none !important;
        }
        .hs-form-frame .hs-form .hs-form-radio {
            display: flex !important;
            flex-direction: row !important;
            gap: 1.5rem !important;
            margin-top: 0.75rem !important;
            flex-wrap: wrap !important;
        }
        .hs-form-frame .hs-form .hs-form-radio .hs-form-radio-display {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important;
        }
        .hs-form-frame .hs-form .hs-form-radio input[type="radio"] {
            width: 1.2rem !important;
            height: 1.2rem !important;
            accent-color: var(--gold) !important;
        }
        .hs-form-frame .hs-form .hs-form-checkbox {
            display: flex !important;
            align-items: flex-start !important;
            gap: 0.65rem !important;
            margin-top: 0.5rem !important;
        }
        .hs-form-frame .hs-form .hs-form-checkbox input[type="checkbox"] {
            width: 1.2rem !important;
            height: 1.2rem !important;
            margin-top: 0.2rem !important;
            accent-color: var(--gold) !important;
            flex-shrink: 0 !important;
        }
        .hs-form-frame .hs-form .hs-button {
            background: var(--gold) !important;
            color: var(--navy) !important;
            font-weight: 700 !important;
            padding: 1rem 2.25rem !important;
            border-radius: 50px !important;
            border: none !important;
            font-size: 1.08rem !important;
            width: 100% !important;
            margin-top: 0.75rem !important;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease !important;
            box-shadow: 0 6px 20px rgba(255,201,113,0.38) !important;
            cursor: pointer !important;
            font-family: 'GT America', Arial, sans-serif !important;
        }
        .hs-form-frame .hs-form .hs-button:hover {
            background: #d4a574 !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 10px 28px rgba(255,201,113,0.48) !important;
        }
        .hs-form-frame .hs-form .hs-error-msgs {
            color: #dc3545 !important;
            font-size: 0.875rem !important;
            margin-top: 0.45rem !important;
            font-family: 'GT America', Arial, sans-serif !important;
        }
        .hs-form-frame .hs-form .hs-form-required {
            color: var(--gold) !important;
        }
        .hs-form-frame .hs-form .hs-form-description {
            color: #555 !important;
            font-size: 0.95rem !important;
            line-height: 1.55 !important;
        }
    </style>
</body>
</html>
