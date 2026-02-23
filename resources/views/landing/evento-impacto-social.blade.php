<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Transformando impostos em impacto social - Evento online ao vivo da Alta Vida Solidária. 04/03/26 às 19h.">
    <title>Transformando impostos em impacto social | Alta Vida Solidária</title>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '279648850864610');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=279648850864610&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

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
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 3rem 1rem 2rem;
        }
        .hero-header {
            text-align: center;
            max-width: 900px;
            margin-bottom: 2.5rem;
            animation: fadeInUp 0.8s ease-out;
        }
        .logo-hero {
            max-width: 280px;
            width: 100%;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 20px rgba(0,0,0,0.3));
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .event-banner {
            max-width: 1000px;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
            border: 3px solid rgba(255,201,113,0.3);
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }
        .event-banner img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .event-badge {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            display: inline-block;
            margin-bottom: 1.25rem;
            box-shadow: 0 6px 25px rgba(255,201,113,0.4);
            letter-spacing: 0.8px;
            text-transform: uppercase;
        }
        .hero-header h1 {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.25;
            color: #EBEDF2;
            text-shadow: 0 4px 20px rgba(0,24,69,0.5);
            letter-spacing: -1px;
            margin-bottom: 1rem;
        }
        .hero-header h1 .accent {
            color: var(--gold);
        }
        .hero-header p {
            font-size: 1.2rem;
            color: #EBEDF2;
            opacity: 0.95;
            line-height: 1.7;
            margin-bottom: 0;
        }
        .event-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            margin-top: 2rem;
            padding: 2rem;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255,201,113,0.2);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }
        .event-info-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            color: #EBEDF2;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
        }
        .event-info-item i {
            color: var(--gold);
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        .event-info-item .label {
            font-size: 0.85rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .event-info-item .value {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--gold);
        }

        /* About Section */
        .about-section {
            background: #fff;
            border-radius: 24px;
            padding: 3rem 2.5rem;
            margin: 3rem auto;
            max-width: 1200px;
            position: relative;
            z-index: 4;
            box-shadow: 0 15px 50px rgba(0,24,69,0.3);
            border: 2px solid rgba(255,201,113,0.3);
        }
        .about-section h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--ink);
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .about-section h2 .accent {
            color: var(--gold);
        }
        .about-section p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.8;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Form Section */
        .lead-section {
            background: var(--card);
            border-radius: 24px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            margin: 3rem auto 4rem;
            padding: 4rem 3rem;
            max-width: 750px;
            position: relative;
            z-index: 3;
            border: 1px solid rgba(255,201,113,0.1);
        }
        .heading-accent {
            color: var(--ink);
            font-weight: 800;
            letter-spacing: -0.4px;
            font-size: 2.2rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        .heading-accent::after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: var(--gold);
            border-radius: 3px;
            margin: 1.5rem auto 0;
        }
        .form-intro {
            text-align: center;
            color: #555;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 2.5rem;
        }

        /* HubSpot Form Overrides */
        .form-label { color: var(--ink); font-weight: 600; margin-bottom: 0.75rem; font-size: 0.95rem; }
        .form-control, .form-select {
            border: 2px solid rgba(12, 24, 64, 0.12);
            border-radius: 12px;
            padding: 0.875rem 1.25rem;
            font-size: 1rem;
            background: #fff;
            transition: all 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.25rem rgba(255,201,113,.2);
            outline: none;
        }

        /* Footer */
        footer {
            background: rgba(0,24,69,0.3);
            border-radius: 20px;
            margin: 2rem auto;
            max-width: 1200px;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-header h1 { font-size: 2.2rem; }
            .hero-header p { font-size: 1.1rem; }
            .logo-hero { max-width: 240px; }
            .event-info { gap: 2rem; padding: 1.5rem; }
            .about-section { padding: 2.5rem 2rem; margin: 2rem 1rem; }
            .about-section h2 { font-size: 1.9rem; }
            .lead-section { padding: 3rem 2rem; margin: 2rem 1rem 3rem; }
        }
        @media (max-width: 576px) {
            .hero-section { padding: 2rem 0.75rem 2rem; }
            .hero-header { margin-bottom: 2rem; }
            .event-banner { border-radius: 12px; border-width: 2px; }
            .hero-header h1 { font-size: 1.8rem; }
            .event-badge { font-size: 0.85rem; padding: 0.6rem 1.5rem; }
            .event-info { flex-direction: column; gap: 1.5rem; padding: 1.5rem; }
            .about-section { padding: 2rem 1.5rem; }
            .about-section h2 { font-size: 1.6rem; }
            .heading-accent { font-size: 1.8rem; }
        }
    </style>
</head>
<body>
    <!-- Hero -->
    <section class="hero-section container">
        <div class="hero-header">
            <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista" class="logo-hero">
            <div class="event-badge">Evento online ao vivo</div>
            <h1>Transformando impostos em <span class="accent">impacto social</span></h1>
            <p>Participe deste evento exclusivo da Alta Vida Solidária e descubra como transformar sua contribuição tributária em ações de alto impacto para a sociedade.</p>
            <div class="event-info">
                <div class="event-info-item">
                    <i class="bi bi-calendar-event"></i>
                    <span class="label">Data</span>
                    <span class="value">04 de Março de 2026</span>
                </div>
                <div class="event-info-item">
                    <i class="bi bi-clock"></i>
                    <span class="label">Horário</span>
                    <span class="value">19:00 horas</span>
                </div>
                <div class="event-info-item">
                    <i class="bi bi-camera-video"></i>
                    <span class="label">Local</span>
                    <span class="value">Online ao vivo</span>
                </div>
            </div>
        </div>
        <div class="event-banner">
            <img src="/img/social_Event.jpeg" alt="Transformando impostos em impacto social - Alta Vida Solidária">
        </div>
    </section>

    <!-- Sobre o evento -->
    <section class="container">
        <div class="about-section">
            <h2>Sobre o <span class="accent">evento</span></h2>
            <p>
                Um encontro exclusivo para discutir como empresas e pessoas físicas podem utilizar leis de incentivo fiscal para gerar impacto social real. Com a participação de <strong>João Miranda</strong> (Produtor Executivo), <strong>Rafael Carlos da Silva (Baby)</strong> (Embaixador do projeto), <strong>Joyce Capelli</strong> (Diretora Presidente do Instituto Melhores Dias) e <strong>Ricardo Paolucci</strong> (Consultor da ISG Estratégia Esportiva).
            </p>
        </div>
    </section>

    <!-- Formulário de Inscrição -->
    <section class="container">
        <div class="lead-section">
            <h2 class="text-center heading-accent">Garanta sua vaga gratuita</h2>
            <p class="form-intro">Preencha o formulário abaixo para garantir sua participação no evento. O link de acesso será enviado por email alguns dias antes.</p>

            <div id="hubspot-form-container" style="padding: 1rem 0;"></div>
        </div>
    </section>

    <footer class="container py-4">
        <small style="color:#fff; font-size:0.95rem; line-height:1.5; display:block; text-align:justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
      // TODO: Crie um form específico no HubSpot para este evento e substitua o formId abaixo. Configure o redirect para /evento-impacto-social/obrigado
      hbspt.forms.create({
        portalId: "21698044",
        formId: "54a58d85-12e6-4fc9-8d61-a7d2c4e2963d",
        region: "na1",
        target: "#hubspot-form-container"
      });
    </script>

    <style>
        .hs-form-frame { background: transparent !important; border: none !important; padding: 0 !important; }
        .hs-form-frame .hs-form { background: transparent !important; padding: 0 !important; }
        .hs-form-frame .hs-form fieldset { max-width: 100% !important; border: none !important; padding: 0 !important; margin: 0 !important; }
        .hs-form-frame .hs-form .hs-form-field { margin-bottom: 2rem !important; }
        .hs-form-frame .hs-form label { color: var(--ink) !important; font-weight: 600 !important; margin-bottom: 0.75rem !important; font-size: 0.95rem !important; display: block !important; font-family: 'GT America', Arial, sans-serif !important; }
        .hs-form-frame .hs-form input[type="text"], .hs-form-frame .hs-form input[type="email"], .hs-form-frame .hs-form input[type="tel"], .hs-form-frame .hs-form input[type="number"], .hs-form-frame .hs-form select, .hs-form-frame .hs-form textarea {
            border: 2px solid rgba(12, 24, 64, 0.12) !important; border-radius: 12px !important; padding: 0.875rem 1.25rem !important; font-size: 1rem !important; background: #fff !important; width: 100% !important; transition: all 0.3s ease !important; font-family: 'GT America', Arial, sans-serif !important; color: var(--ink) !important; box-sizing: border-box !important;
        }
        .hs-form-frame .hs-form input:focus, .hs-form-frame .hs-form select:focus, .hs-form-frame .hs-form textarea:focus {
            border-color: var(--gold) !important; box-shadow: 0 0 0 0.25rem rgba(255,201,113,.2) !important; outline: none !important;
        }
        .hs-form-frame .hs-form .hs-button {
            background: var(--gold) !important; color: var(--navy) !important; font-weight: 700 !important; padding: 1rem 2.5rem !important; border-radius: 50px !important; border: none !important; font-size: 1.1rem !important; width: 100% !important; margin-top: 2rem !important; transition: all 0.3s ease !important; box-shadow: 0 6px 20px rgba(255,201,113,0.4) !important; cursor: pointer !important; font-family: 'GT America', Arial, sans-serif !important;
        }
        .hs-form-frame .hs-form .hs-button:hover {
            background: #d4a574 !important; transform: translateY(-3px) !important; box-shadow: 0 10px 30px rgba(255,201,113,0.5) !important;
        }
    </style>
</body>
</html>
