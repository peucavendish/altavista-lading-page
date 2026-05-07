<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Insurance Day Alta Vista — o assessor consulta o CRM XP ou a lista recebida, preenche os dados do cliente e agenda com o consultor de seguros.">
    <title>Insurance Day | Alta Vista Investimentos</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @php
        $consultants = [
            ['name' => 'Fabio Kenji Hassui', 'url' => 'https://bookings.cloud.microsoft/bookwithme/user/8df7cb6119d74390839118e19d34856d%40altavistainvest.com.br?anonymous&ismsaljsauthenabled'],
            ['name' => 'Alexandre Faustino', 'url' => 'https://bookings.cloud.microsoft/bookwithme/user/02a9df5432ab4311b99093de6fff649e%40altavistainvest.com.br?anonymous&ismsaljsauthenabled'],
            ['name' => 'Moisés Santos', 'url' => 'https://bookings.cloud.microsoft/bookwithme/user/95c185bee335439fac4dcb435f947edd%40altavistainvest.com.br?anonymous&ismsaljsauthenabled'],
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
        body {
            font-family: 'GT America', Arial, sans-serif;
            background: var(--navy);
            margin: 0;
            min-height: 100vh;
            color: #ebedf2;
        }
        .hero-left {
            background: linear-gradient(135deg, rgba(0,24,69,0.94) 0%, rgba(0,24,69,0.85) 50%, rgba(22,33,62,0.9) 100%),
                url('https://images.pexels.com/photos/5716001/pexels-photo-5716001.jpeg?auto=compress&cs=tinysrgb&w=1260') center/cover no-repeat;
            min-height: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2.75rem 1.25rem 3.5rem;
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
        .logo-hero { max-width: 280px; width: 100%; margin: 0 auto 1.5rem; display: block; filter: drop-shadow(0 4px 20px rgba(0,0,0,0.35)); }
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
        }
        .hero-inner h1 {
            font-size: clamp(1.65rem, 4vw, 2.4rem);
            font-weight: 800;
            line-height: 1.2;
            margin: 0 0 0.9rem;
            text-shadow: 0 2px 18px rgba(0,24,69,0.5);
        }
        .hero-inner h1 .accent { color: var(--gold); }
        .hero-inner .lead {
            font-size: 1.05rem;
            opacity: 0.95;
            line-height: 1.65;
            max-width: 640px;
            margin: 0 auto 1.85rem;
        }
        .hero-chips {
            list-style: none;
            padding: 0;
            margin: 0 0 0.25rem;
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
        }
        .hero-chips li i { color: var(--gold); }

        .page-panel-wrap {
            max-width: 1020px;
            margin: 0 auto;
            padding: 1.5rem 0.5rem 0.5rem;
        }
        @media (min-width: 576px) { .page-panel-wrap { padding: 2rem 0.75rem 0.75rem; } }

        .white-panel {
            background: #fff;
            color: #333;
            border-radius: 22px;
            max-width: 1020px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
            border: 2px solid rgba(255,201,113,0.3);
        }
        @media (max-width: 576px) {
            .white-panel { border-radius: 0; }
            .page-panel-wrap { padding-left: 0; padding-right: 0; }
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
        .section-title--form {
            margin-top: 0;
        }
        .section-sub {
            text-align: center;
            color: #555;
            font-size: 0.98rem;
            line-height: 1.7;
            max-width: 640px;
            margin: 0 auto 2.6rem;
        }

        .form-intro {
            text-align: center;
            color: #555;
            font-size: 1.02rem;
            line-height: 1.65;
            margin: 0 auto 0.25rem;
            max-width: 38rem;
        }
        .insurance-form-intro { margin-bottom: 0; }

        #hubspot-form-container {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(0, 24, 69, 0.08);
        }

        /* Fluxo visual em etapas */
        .flow-track {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: stretch;
            justify-content: center;
            gap: 0;
            margin: 0 auto 2.75rem;
            max-width: 100%;
        }
        .flow-step {
            flex: 1 1 0;
            min-width: 0;
            background: linear-gradient(180deg, #fff 0%, var(--card) 100%);
            border: 1px solid rgba(0, 24, 69, 0.1);
            border-radius: 18px;
            padding: 1.35rem 1rem 1.25rem;
            text-align: center;
            box-shadow: 0 4px 18px rgba(0, 24, 69, 0.06);
        }
        .flow-ico {
            width: 56px;
            height: 56px;
            margin: 0 auto 0.9rem;
            border-radius: 16px;
            background: linear-gradient(145deg, rgba(255,201,113,0.22) 0%, rgba(255,201,113,0.08) 100%);
            border: 2px solid rgba(255, 201, 113, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--navy);
            font-size: 1.55rem;
        }
        .flow-step h3 {
            margin: 0 0 0.45rem;
            font-size: 0.95rem;
            font-weight: 800;
            color: var(--ink);
            line-height: 1.2;
        }
        .flow-kicker {
            display: inline-block;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #8a6914;
            margin-bottom: 0.35rem;
        }
        .flow-step p {
            margin: 0;
            font-size: 0.86rem;
            color: #4a5568;
            line-height: 1.5;
        }
        .flow-connector {
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            align-self: center;
            padding: 0 0.15rem;
            color: rgba(255, 201, 113, 0.95);
            font-size: 1.5rem;
            line-height: 1;
        }
        @media (max-width: 991px) {
            .flow-track {
                flex-direction: column;
                flex-wrap: wrap;
            }
            .flow-connector {
                padding: 0.45rem 0 0.2rem;
                transform: rotate(90deg);
            }
            .flow-step {
                max-width: 420px;
                margin: 0 auto;
                width: 100%;
                padding: 1.25rem 1.15rem;
            }
        }
        @media (min-width: 992px) {
            .flow-connector { padding: 0 0.35rem; }
        }

        .consultants-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
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
        .c-card h3 { font-size: 1.05rem; font-weight: 700; color: var(--ink); margin: 0 0 1rem; }
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

        .divider { height: 1px; background: rgba(0,24,69,0.08); margin: 2.5rem 0; }

        footer { padding: 1.5rem 1.25rem 2rem; max-width: 1020px; margin: 0 auto; }
        footer small {
            color: rgba(255,255,255,0.88);
            font-size: 0.78rem;
            line-height: 1.5;
            display: block;
        }

        /* HubSpot embed (mesmo formulário do Recomenday) */
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
</head>
<body>
    <header class="hero-left">
        <div class="hero-inner">
            <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo-hero" width="280" height="auto">
            <div class="acao-badge">Insurance Day</div>
            <h1>Seguro de vida com foco: <span class="accent">agenda e dados do cliente</span></h1>
            <p class="lead">
                No Insurance Day, o <strong>assessor</strong> consulta no <strong>CRM XP</strong> ou na <strong>lista que recebeu</strong> quem foi indicado, <strong>preenche o formulário abaixo</strong> com os dados do cliente e, em seguida, realiza o agendamento na agenda dos <strong>consultores de seguros</strong>.
            </p>
            <ul class="hero-chips" aria-label="Resumo">
                <li><i class="bi bi-list-check" aria-hidden="true"></i> CRM XP ou lista recebida</li>
                <li><i class="bi bi-calendar2-check" aria-hidden="true"></i> Agenda do consultor</li>
                <li><i class="bi bi-shield-check" aria-hidden="true"></i> Seguro de vida</li>
            </ul>
        </div>
    </header>

    <div class="page-panel-wrap">
        <div class="white-panel">
            <div class="section-pad">
                <h2 class="section-title">Como usar esta página</h2>
                <p class="section-sub">Fluxo: indicados no <strong>CRM XP</strong> ou na <strong>lista recebida</strong> → o <strong>assessor</strong> preenche o <strong>formulário abaixo</strong> (dados do cliente) → <strong>agendamento</strong> com o consultor de seguros. <strong>Importante:</strong> selecione reunião de <strong>1 hora</strong> (não agendar 30 minutos).</p>

                <div class="flow-track" role="list" aria-label="Etapas do fluxo">
                    <div class="flow-step" role="listitem">
                        <div class="flow-ico" aria-hidden="true"><i class="bi bi-pc-display"></i></div>
                        <span class="flow-kicker">Etapa 1</span>
                        <h3>Indicados (CRM ou lista)</h3>
                        <p>Os <strong>assessores</strong> consultam no <strong>CRM da XP</strong> ou <strong>na lista recebida</strong> os clientes <strong>indicados</strong> para o Insurance Day.</p>
                    </div>
                    <div class="flow-connector" aria-hidden="true"><i class="bi bi-chevron-right"></i></div>
                    <div class="flow-step" role="listitem">
                        <div class="flow-ico" aria-hidden="true"><i class="bi bi-file-earmark-text"></i></div>
                        <span class="flow-kicker">Etapa 2</span>
                        <h3>Formulário do assessor</h3>
                        <p>O <strong>assessor</strong> preenche o <strong>formulário abaixo</strong> com nome, contato e demais dados do cliente, conforme o <strong>CRM</strong> ou a <strong>lista recebida</strong>.</p>
                    </div>
                    <div class="flow-connector" aria-hidden="true"><i class="bi bi-chevron-right"></i></div>
                    <div class="flow-step" role="listitem">
                        <div class="flow-ico" aria-hidden="true"><i class="bi bi-calendar2-plus"></i></div>
                        <span class="flow-kicker">Etapa 3</span>
                        <h3>Agenda dos consultores</h3>
                        <p>Em seguida, o agendamento é feito na <strong>agenda dos consultores de seguros</strong>, conforme o link escolhido abaixo, sempre em slots de <strong>1 hora</strong>.</p>
                    </div>
                </div>

                <h2 class="section-title section-title--form">Formulário — <span class="accent">dados do cliente</span></h2>
                <p class="form-intro insurance-form-intro">O <strong>assessor</strong> preenche o formulário abaixo. Se ele não aparecer, desative bloqueadores nesta página ou tente outro navegador.</p>
                <div id="hubspot-form-container" class="recomenday-hs-root" aria-label="Formulário HubSpot — indicações"></div>

                <div class="divider"></div>

                <h2 class="section-title">Agendar com o <span class="accent">consultor de seguros</span></h2>
                <p class="section-sub">Escolha o link do consultor e selecione data e horário no calendário. <strong>Use apenas reuniões de 1 hora</strong> (não selecionar 30 minutos).</p>

                <div class="consultants-grid">
                    @foreach ($consultants as $c)
                        <article class="c-card">
                            <h3>{{ $c['name'] }}</h3>
                            <a class="btn-book" href="{{ $c['url'] }}" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-calendar-plus" aria-hidden="true"></i>
                                Abrir agenda
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <footer>
        <small>
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. O Assessor de Investimento não administra o patrimônio de investidores. Para informações sobre produtos, contate seu assessor. Seguros são comercializados por parceiros habilitados; condições e adesão dependem de análise do segurador. Para reclamações, Ouvidoria XP: 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
        hbspt.forms.create({
            portalId: '21698044',
            formId: 'afd25ee9-fea1-4100-b5dd-89400b7a7cae',
            region: 'na1',
            target: '#hubspot-form-container'
        });
    </script>
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21698044.js"></script>
</body>
</html>
