<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Parceria Alta Vista & JRB Assessoria | Investimentos</title>
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
        .hero-split { 
            min-height: 50vh; 
            display: flex; 
            flex-wrap: wrap; 
            margin-top: 0; 
            position: relative;
        }
        .hero-left {
            background: url('https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center/cover no-repeat;
            color: #EBEDF2; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            position: relative;
            min-height: 450px; 
            width: 100vw;
        }
        .hero-left::before { 
            content: ''; 
            position: absolute; 
            inset: 0; 
            background: linear-gradient(135deg, rgba(0,24,69,0.85) 0%, rgba(0,24,69,0.65) 50%, rgba(0,24,69,0.45) 100%); 
        }
        .hero-content-inspire { 
            position: relative; 
            z-index: 2; 
            text-align: center; 
            padding: 3rem 1.5rem; 
            width: 100%; 
            max-width: 1000px;
            margin: 0 auto;
        }
        .logos-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
            animation: fadeInDown 0.8s ease-out;
        }
        .logo-item {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-item img {
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
            max-height: 100px;
            width: auto;
        }
        .logo-divider {
            color: var(--gold);
            font-size: 2rem;
            font-weight: 300;
        }
        .hero-content-inspire h1 { 
            font-size: 2.8rem; 
            font-weight: 800; 
            line-height: 1.15; 
            color: #EBEDF2; 
            text-shadow: 0 4px 20px rgba(0,24,69,0.4); 
            letter-spacing: -0.8px;
            margin: 1.5rem 0;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }
        .hero-content-inspire h1 span { 
            color: var(--gold);
            display: inline-block;
        }
        .hero-content-inspire p { 
            font-size: 1.2rem; 
            margin-top: 1.5rem; 
            opacity: 0.95;
            line-height: 1.6;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        /* Partnership Badge */
        .partnership-badge {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            padding: 0.65rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.95rem;
            display: inline-block;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 15px rgba(255,201,113,0.3);
            animation: fadeInDown 0.8s ease-out;
            letter-spacing: 0.5px;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, rgba(255,201,113,0.1) 0%, rgba(255,201,113,0.05) 100%);
            border-radius: 20px;
            padding: 2.5rem 2rem;
            margin: -60px auto 2rem;
            max-width: 1200px;
            position: relative;
            z-index: 4;
            box-shadow: 0 10px 40px rgba(0,24,69,0.2);
        }
        .info-box {
            background: var(--card);
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
            max-width: 900px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            border-left: 4px solid var(--gold);
        }
        .info-box h4 {
            color: var(--ink);
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .info-box h4 i {
            color: var(--gold);
            font-size: 1.5rem;
        }
        .info-box p {
            color: #666;
            line-height: 1.7;
            margin: 0;
        }
        .stat-item {
            text-align: center;
            padding: 1rem;
        }
        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--gold);
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        .stat-label {
            color: var(--ink);
            font-weight: 600;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Benefits Section */
        .benefits-section {
            background: var(--card);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            margin: 2rem auto 3rem;
            max-width: 1200px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            border: 1px solid rgba(255,201,113,0.1);
        }
        .benefits-section h3 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2.5rem;
        }
        .benefit-item {
            display: flex;
            align-items: start;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #fff;
            border-radius: 16px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .benefit-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,24,69,0.1);
            border-color: rgba(255,201,113,0.3);
        }
        .benefit-item:last-child {
            margin-bottom: 0;
        }
        .benefit-icon {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            font-size: 1.75rem;
            flex-shrink: 0;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(255,201,113,0.3);
        }
        .benefit-item strong {
            color: var(--ink);
            font-size: 1.2rem;
            display: block;
            margin-bottom: 0.5rem;
        }
        .benefit-item p {
            color: #666;
            margin: 0;
            line-height: 1.6;
        }

        /* Form Section */
        .lead-section {
            background: var(--light-bg);
            border-radius: 28px;
            box-shadow: 0 20px 60px rgba(12, 24, 64, 0.25);
            margin: 2rem auto 4rem;
            padding: 3.5rem 2.5rem;
            max-width: 700px;
            position: relative;
            z-index: 3;
            border: 1px solid rgba(0,24,69,0.08);
        }
        .lead-section::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, var(--gold), #ffd89b);
            border-radius: 28px;
            z-index: -1;
            opacity: 0.1;
        }

        .heading-accent { 
            color: var(--ink); 
            font-weight: 800; 
            letter-spacing: -0.3px;
            font-size: 1.8rem;
        }
        .heading-accent::after { 
            content: ''; 
            display: block; 
            width: 80px; 
            height: 4px; 
            background: linear-gradient(90deg, var(--gold), #ffd89b);
            border-radius: 3px; 
            margin: 1rem auto 0;
        }

        .form-label { 
            color: var(--ink); 
            font-weight: 600; 
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
        }
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
        .form-check-input {
            width: 1.25rem;
            height: 1.25rem;
            margin-top: 0.25rem;
        }
        .form-check-input:checked {
            background-color: var(--gold);
            border-color: var(--gold);
        }
        .form-check-input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.25rem rgba(255,201,113,.2);
        }
        .form-check-label {
            color: var(--ink);
            font-weight: 500;
            margin-left: 0.5rem;
        }
        .form-check-label a {
            transition: all 0.2s ease;
        }
        .form-check-label a:hover {
            color: #b3892f !important;
            text-decoration: underline !important;
        }
        .btn-submit {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            font-weight: 700;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            width: 100%;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(255,201,113,0.4);
            position: relative;
            overflow: hidden;
        }
        .btn-submit::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        .btn-submit:hover::before {
            width: 300px;
            height: 300px;
        }
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255,201,113,0.5);
        }
        .btn-submit:active {
            transform: translateY(-1px);
        }

        /* Footer */
        footer {
            background: rgba(0,24,69,0.3);
            border-radius: 20px;
            margin: 2rem auto;
            max-width: 1200px;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-content-inspire { 
                padding: 2rem 1.25rem; 
            }
            .hero-content-inspire h1 { 
                font-size: 2.2rem; 
            }
            .hero-content-inspire p {
                font-size: 1.1rem;
            }
            .logos-container {
                gap: 1.5rem;
            }
            .logo-item img {
                max-height: 70px;
            }
            .logo-divider {
                font-size: 1.2rem;
            }
            .lead-section { 
                padding: 2rem 1.5rem;
                margin: 1.5rem 1rem 3rem;
            }
            .info-box {
                padding: 1.5rem;
                margin: 1.5rem 1rem;
            }
        }
        @media (max-width: 576px) {
            .hero-left {
                min-height: 380px;
            }
            .hero-content-inspire h1 {
                font-size: 1.8rem;
            }
            .partnership-badge {
                font-size: 0.85rem;
                padding: 0.5rem 1.25rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero -->
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <div class="logos-container">
                    <div class="logo-item">
                        <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Logo" style="max-width:300px; width:100%">
                    </div>
                    <div class="logo-divider">+</div>
                    <div class="logo-item">
                        <img src="/img/jrb-assessoria.png" alt="JRB Assessoria Logo" style="max-height:100px; width:auto; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));">
                    </div>
                </div>
                <div class="partnership-badge">🤝 Parceria Estratégica</div>
                <h1>Cadastro de <span>Leads</span></h1>
                <p class="mb-0">Ferramenta exclusiva para profissionais da JRB Assessoria cadastrarem leads interessados em serviços da Alta Vista Investimentos.</p>
            </div>
        </div>
    </section>

    <!-- Info Box -->
    <section class="container">
        <div class="info-box">
            <h4>
                <i class="bi bi-info-circle"></i>
                Como usar esta ferramenta
            </h4>
            <p>
                Esta página foi desenvolvida exclusivamente para os profissionais da <strong>JRB Assessoria</strong> cadastrarem leads interessados em serviços de assessoria de investimentos da <strong>Alta Vista Investimentos</strong>. 
                Quando você identificar um cliente ou contato interessado, preencha o formulário abaixo com os dados do lead. 
                Os dados serão enviados automaticamente para a Alta Vista, que entrará em contato com o interessado para oferecer os serviços de assessoria de investimentos.
            </p>
        </div>
    </section>

    <!-- Formulário de Cadastro de Lead -->
    <section class="container">
        <div class="lead-section">
            <h2 class="text-center mb-3 heading-accent">Cadastrar Novo Lead</h2>
            <p class="text-center mb-4" style="color:#666; font-size:1.05rem;">Preencha os dados do lead interessado nos serviços de assessoria de investimentos da Alta Vista. Os dados serão enviados para a empresa parceira que entrará em contato.</p>
            
            <!-- HubSpot Form -->
            <div class="hs-form-frame" data-region="na1" data-form-id="00e46f08-645a-44da-907f-ee44ee78caf1" data-portal-id="21698044"></div>
        </div>
    </section>

    <footer class="container py-4">
        <small style="color:#fff; font-size:0.95rem; line-height:1.5; display:block; text-align:justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- HubSpot Form Script -->
    <script src="https://js.hsforms.net/forms/embed/21698044.js" defer></script>
    
    <style>
        /* Estilos customizados para o formulário HubSpot */
        .hs-form-frame .hs-form fieldset {
            max-width: 100% !important;
        }
        .hs-form-frame .hs-form .hs-form-field {
            margin-bottom: 1.5rem;
        }
        .hs-form-frame .hs-form label {
            color: var(--ink) !important;
            font-weight: 600 !important;
            margin-bottom: 0.75rem !important;
            font-size: 0.95rem !important;
        }
        .hs-form-frame .hs-form input[type="text"],
        .hs-form-frame .hs-form input[type="email"],
        .hs-form-frame .hs-form input[type="tel"],
        .hs-form-frame .hs-form select,
        .hs-form-frame .hs-form textarea {
            border: 2px solid rgba(12, 24, 64, 0.12) !important;
            border-radius: 12px !important;
            padding: 0.875rem 1.25rem !important;
            font-size: 1rem !important;
            background: #fff !important;
            width: 100% !important;
            transition: all 0.3s ease !important;
        }
        .hs-form-frame .hs-form input:focus,
        .hs-form-frame .hs-form select:focus,
        .hs-form-frame .hs-form textarea:focus {
            border-color: var(--gold) !important;
            box-shadow: 0 0 0 0.25rem rgba(255,201,113,.2) !important;
            outline: none !important;
        }
        .hs-form-frame .hs-form .hs-button {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%) !important;
            color: var(--navy) !important;
            font-weight: 700 !important;
            padding: 1rem 2.5rem !important;
            border-radius: 50px !important;
            border: none !important;
            font-size: 1.1rem !important;
            width: 100% !important;
            margin-top: 1.5rem !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 6px 20px rgba(255,201,113,0.4) !important;
            cursor: pointer !important;
        }
        .hs-form-frame .hs-form .hs-button:hover {
            background: linear-gradient(135deg, #b3892f 0%, #d4a574 100%) !important;
            color: #fff !important;
            transform: translateY(-3px) !important;
            box-shadow: 0 10px 30px rgba(255,201,113,0.5) !important;
        }
        .hs-form-frame .hs-form .hs-error-msgs {
            color: #dc3545 !important;
            font-size: 0.875rem !important;
            margin-top: 0.5rem !important;
        }
        .hs-form-frame .hs-form .hs-error-msgs label {
            color: #dc3545 !important;
            font-weight: 500 !important;
        }
    </style>
</body>
</html>
