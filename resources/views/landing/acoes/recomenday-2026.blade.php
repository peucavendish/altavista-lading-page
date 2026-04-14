<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Recomenday 2026 — campanha Alta Vista para assessores dedicarem um dia à coleta de indicações qualificadas junto à base de clientes.">
    <title>Recomenday 2026 | Alta Vista Investimentos</title>
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
            width: 100%;
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
        .acao-badge {
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
            max-width: 680px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 0.75s ease-out 0.28s both;
        }
        .hero-meta {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin: 2.75rem 0 0;
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
            padding: 0.8rem 1.35rem;
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

        .lead-section {
            background: var(--card);
            border-radius: 24px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            margin: 2.5rem auto 2.5rem;
            padding: 3.5rem 2.75rem;
            max-width: 820px;
            position: relative;
            z-index: 3;
            border: 1px solid rgba(255,201,113,0.1);
        }
        .lead-section--form .form-intro {
            max-width: 36rem;
            margin-left: auto;
            margin-right: auto;
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
            margin-top: 1.75rem;
            padding-top: 1.75rem;
            border-top: 1px solid rgba(0, 24, 69, 0.08);
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
            from { opacity: 0; transform: translateY(-16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
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
            .acao-badge {
                font-size: 0.78rem;
                padding: 0.55rem 1.25rem;
            }
            .heading-accent { font-size: 1.75rem; }
            .hero-meta { flex-direction: column; align-items: stretch; }
            .hero-meta li { justify-content: center; }
            .theme-highlight { margin-top: 0; }
        }
    </style>
</head>
<body>
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo-hero" width="300" height="auto">
                <div class="acao-badge">Recomenday / 2026</div>
                <h1>O dia em que sua rede vira <span class="accent">indicação</span></h1>
                <p class="lead-text">
                    Campanha para assessores de investimento Alta Vista: em uma data dedicada, o foco do atendimento é ouvir clientes e registrar indicações com qualidade — fortalecendo relacionamento e crescimento com responsabilidade.
                </p>
                <ul class="hero-meta hero-chips">
                    <li>
                        <i class="bi bi-calendar-check" aria-hidden="true"></i>
                        Um dia focado em indicações
                    </li>
                    <li>
                        <i class="bi bi-people" aria-hidden="true"></i>
                        Base de clientes no centro
                    </li>
                    <li>
                        <i class="bi bi-award" aria-hidden="true"></i>
                        Atendimento consultivo
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container px-3 px-md-4">
        <div class="theme-highlight">
            <div class="theme-highlight-header">
                <h2>Como funciona a <span class="accent">ação</span></h2>
                <p>Cada assessor escolhe (ou alinha com o escritório) o dia do Recomenday para conversar com a base, explicar a importância da indicação e registrar contatos de forma organizada.</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-card-icon" aria-hidden="true"><i class="bi bi-chat-dots"></i></div>
                    <h3>Diálogo com clientes</h3>
                    <p>Momento dedicado para reforçar confiança, alinhar expectativas e convidar quem já conhece seu trabalho a indicar pessoas que possam se beneficiar do assessoramento.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card-icon" aria-hidden="true"><i class="bi bi-ui-checks-grid"></i></div>
                    <h3>Coleta organizada</h3>
                    <p>Indicações registradas com clareza (dados de contato, contexto e opt-in quando aplicável), respeitando privacidade e a <a href="/politica-privacidade">Política de Privacidade</a>.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-card-icon" aria-hidden="true"><i class="bi bi-graph-up"></i></div>
                    <h3>Crescimento sustentável</h3>
                    <p>Indicação é relacionamento de longo prazo: prioriza fit, transparência e adequação, sempre com foco na experiência do cliente.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container px-3 px-md-4 pb-2">
        <div class="lead-section lead-section--form">
            <h2 class="heading-accent">Indicações</h2>
            <p class="form-intro mb-0">Preencha o formulário abaixo. Se ele não aparecer, desative bloqueadores nesta página ou tente outro navegador.</p>
            <div id="hubspot-form-container" class="recomenday-hs-root" aria-label="Formulário de indicações"></div>
        </div>
    </section>

    <footer class="container py-4 px-3">
        <small>
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
        hbspt.forms.create({
            portalId: '21698044',
            formId: 'fd1a5471-f705-4061-a966-b6b6fc78959c',
            region: 'na1',
            target: '#hubspot-form-container'
        });
    </script>

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21698044.js"></script>
    <!-- End of HubSpot Embed Code -->

    <style>
        /* HubSpot embed — tipografia e layout alinhados à LP */
        .recomenday-hs-root,
        .recomenday-hs-root .hs-form,
        .recomenday-hs-root .hs-form * {
            font-family: 'GT America', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
        }

        .recomenday-hs-root .hs-form-frame {
            background: transparent !important;
            border: none !important;
            padding: 0 !important;
        }
        .recomenday-hs-root .hs-form {
            background: transparent !important;
            padding: 0 !important;
        }
        .recomenday-hs-root .hs-form fieldset {
            max-width: 100% !important;
            border: none !important;
            padding: 0 !important;
            margin: 0 !important;
            display: grid !important;
            grid-template-columns: 1fr !important;
            gap: 0.35rem 1.25rem !important;
        }
        @media (min-width: 640px) {
            .recomenday-hs-root .hs-form fieldset {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
            /* E-mail em linha inteira (classe típica do HubSpot + fallback pela ordem) */
            .recomenday-hs-root .hs-form fieldset > .hs-email.hs-form-field,
            .recomenday-hs-root .hs-form fieldset > .hs-form-field:first-of-type {
                grid-column: 1 / -1 !important;
            }
            .recomenday-hs-root .hs-form fieldset > .hs-form-field:nth-of-type(2) {
                max-width: 16rem !important;
            }
            .recomenday-hs-root .hs-form fieldset > .hs_codigo_xp.hs-form-field,
            .recomenday-hs-root .hs-form fieldset > .hs-form-field[class*="codigo_xp"] {
                max-width: 16rem !important;
            }
        }

        .recomenday-hs-root .hs-form .hs-form-field {
            margin-bottom: 0.85rem !important;
        }
        .recomenday-hs-root .hs-form label.hs-form-field__label,
        .recomenday-hs-root .hs-form label:not(.hs-form-checkbox-display):not(.hs-form-radio-display) {
            color: var(--ink) !important;
            font-weight: 600 !important;
            margin-bottom: 0.4rem !important;
            font-size: 0.9rem !important;
            line-height: 1.35 !important;
            letter-spacing: 0.01em !important;
            display: block !important;
        }
        .recomenday-hs-root .hs-form .hs-form-required {
            color: #c53030 !important;
            font-weight: 700 !important;
        }

        .recomenday-hs-root .hs-form input[type="text"],
        .recomenday-hs-root .hs-form input[type="email"],
        .recomenday-hs-root .hs-form input[type="tel"],
        .recomenday-hs-root .hs-form input[type="number"],
        .recomenday-hs-root .hs-form select,
        .recomenday-hs-root .hs-form textarea {
            border: 1.5px solid rgba(12, 24, 64, 0.14) !important;
            border-radius: 10px !important;
            padding: 0.75rem 1rem !important;
            font-size: 0.98rem !important;
            background: #f8f9fc !important;
            width: 100% !important;
            max-width: 100% !important;
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease !important;
            color: var(--ink) !important;
            box-sizing: border-box !important;
        }
        .recomenday-hs-root .hs-form select {
            cursor: pointer !important;
            appearance: auto !important;
        }
        .recomenday-hs-root .hs-form input:hover,
        .recomenday-hs-root .hs-form select:hover,
        .recomenday-hs-root .hs-form textarea:hover {
            border-color: rgba(12, 24, 64, 0.22) !important;
            background: #fff !important;
        }
        .recomenday-hs-root .hs-form input:focus,
        .recomenday-hs-root .hs-form select:focus,
        .recomenday-hs-root .hs-form textarea:focus {
            border-color: var(--gold) !important;
            background: #fff !important;
            box-shadow: 0 0 0 3px rgba(255, 201, 113, 0.35) !important;
            outline: none !important;
        }

        .recomenday-hs-root .hs-form .hs-submit,
        .recomenday-hs-root .hs-form .hs_submit {
            grid-column: 1 / -1 !important;
            margin-top: 0.75rem !important;
            padding-top: 0.5rem !important;
            text-align: center !important;
        }
        .recomenday-hs-root .hs-form .hs-button {
            background: linear-gradient(180deg, #ffd18a 0%, var(--gold) 45%, #e8b45c 100%) !important;
            color: var(--navy) !important;
            font-weight: 800 !important;
            padding: 1rem 2rem !important;
            border-radius: 12px !important;
            border: 2px solid rgba(0, 24, 69, 0.18) !important;
            font-size: 1.05rem !important;
            width: 100% !important;
            max-width: 22rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            display: block !important;
            transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease !important;
            box-shadow: 0 4px 0 rgba(0, 24, 69, 0.12), 0 8px 24px rgba(255, 201, 113, 0.45) !important;
            cursor: pointer !important;
            letter-spacing: 0.02em !important;
        }
        .recomenday-hs-root .hs-form .hs-button:hover {
            filter: brightness(1.03) !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 5px 0 rgba(0, 24, 69, 0.14), 0 12px 28px rgba(255, 201, 113, 0.5) !important;
        }
        .recomenday-hs-root .hs-form .hs-button:active {
            transform: translateY(1px) !important;
            box-shadow: 0 2px 0 rgba(0, 24, 69, 0.12), 0 4px 16px rgba(255, 201, 113, 0.35) !important;
        }

        .recomenday-hs-root .legal-consent-container,
        .recomenday-hs-root .hs-form-booleancheckbox,
        .recomenday-hs-root .hs-richtext {
            grid-column: 1 / -1 !important;
            font-size: 0.82rem !important;
            line-height: 1.5 !important;
            color: #5a6578 !important;
        }
        .recomenday-hs-root .hs-error-msgs {
            color: #c53030 !important;
            font-size: 0.85rem !important;
            margin-top: 0.25rem !important;
        }
        .recomenday-hs-root .submitted-message {
            grid-column: 1 / -1 !important;
            text-align: center !important;
            padding: 1rem !important;
            border-radius: 12px !important;
            background: rgba(255, 201, 113, 0.15) !important;
            color: var(--ink) !important;
            font-weight: 600 !important;
        }
    </style>
</body>
</html>
