<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação de Eventos | Alta Vista Investimentos</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #001845;
            --ink: #16213e;
            --gold: #FFC971;
            --gold-light: #ffd89b;
            --card: #f5f7fc;
            --light-bg: #EBEDF2;
            --white: #ffffff;
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
            font-family: 'GT America', 'Inter', Arial, sans-serif; 
            background: linear-gradient(135deg, #f5f7fc 0%, #e8ecf4 100%);
            min-height: 100vh;
            position: relative;
        }
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255,201,113,0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(0,24,69,0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }
        
        /* Header */
        .internal-header {
            background: linear-gradient(135deg, var(--navy) 0%, var(--ink) 100%);
            color: #EBEDF2;
            padding: 3rem 0;
            box-shadow: 0 8px 32px rgba(0,24,69,0.2);
            position: relative;
            overflow: hidden;
        }
        .internal-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 30% 50%, rgba(255,201,113,0.15) 0%, transparent 50%),
                radial-gradient(circle at 70% 20%, rgba(255,201,113,0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        .internal-header .container {
            position: relative;
            z-index: 2;
        }
        .internal-header .logo {
            max-width: 220px;
            width: 100%;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.2));
            transition: transform 0.3s ease;
        }
        .internal-header .logo:hover {
            transform: scale(1.05);
        }
        .header-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        @media (min-width: 768px) {
            .header-content {
                text-align: left;
            }
        }
        .internal-header h1 {
            font-size: 2.8rem;
            font-weight: 900;
            margin: 0 0 1rem 0;
            color: #EBEDF2;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.25rem;
            letter-spacing: -1px;
            line-height: 1.2;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
            position: relative;
        }
        @media (min-width: 768px) {
            .internal-header h1 {
                justify-content: flex-start;
            }
        }
        .internal-header h1::before {
            content: '';
            position: absolute;
            left: -1rem;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 60px;
            background: linear-gradient(180deg, var(--gold) 0%, var(--gold-light) 100%);
            border-radius: 3px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        @media (min-width: 768px) {
            .internal-header h1::before {
                opacity: 1;
            }
        }
        .internal-header h1 i {
            color: var(--gold);
            font-size: 3.5rem;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 4px 12px rgba(255,201,113,0.4));
            animation: pulse 2s ease-in-out infinite;
            flex-shrink: 0;
        }
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.9;
            }
        }
        .title-text {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }
        .title-main {
            font-size: 1em;
            font-weight: 900;
            background: linear-gradient(135deg, #EBEDF2 0%, rgba(235,237,242,0.9) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .title-subtitle {
            font-size: 0.45em;
            font-weight: 500;
            color: rgba(235,237,242,0.8);
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 0.25rem;
        }
        .internal-header .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, rgba(255,201,113,0.25) 0%, rgba(255,201,113,0.15) 100%);
            border: 2px solid rgba(255,201,113,0.4);
            color: var(--gold);
            padding: 0.75rem 1.75rem;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 700;
            margin-top: 1rem;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 16px rgba(255,201,113,0.2);
            transition: all 0.3s ease;
            align-self: center;
        }
        @media (min-width: 768px) {
            .internal-header .badge {
                align-self: flex-start;
            }
        }
        .internal-header .badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255,201,113,0.3);
            border-color: rgba(255,201,113,0.6);
        }
        .internal-header .badge i {
            font-size: 1.1rem;
        }

        /* Main Content */
        .main-container {
            max-width: 1000px;
            margin: 4rem auto;
            padding: 0 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        /* Info Cards Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        .info-card {
            background: var(--white);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 8px 32px rgba(0,24,69,0.1);
            border: 1px solid rgba(255,201,113,0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--gold) 0%, var(--gold-light) 100%);
        }
        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 48px rgba(0,24,69,0.15);
            border-color: rgba(255,201,113,0.4);
        }
        .info-card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--navy);
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 24px rgba(255,201,113,0.3);
        }
        .info-card h2 {
            color: var(--ink);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            line-height: 1.3;
        }
        .info-card p {
            color: #555;
            line-height: 1.8;
            margin: 0 0 1rem 0;
            font-size: 1rem;
        }
        .info-card ul {
            margin: 0;
            padding-left: 0;
            list-style: none;
        }
        .info-card ul li {
            margin-bottom: 0.75rem;
            padding-left: 1.75rem;
            position: relative;
            color: #555;
            line-height: 1.7;
            font-size: 0.95rem;
        }
        .info-card ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--gold);
            font-weight: 700;
            font-size: 1.1rem;
        }
        .info-card ul li strong {
            color: var(--ink);
            font-weight: 600;
        }

        /* Main Info Card */
        .main-info-card {
            background: linear-gradient(135deg, var(--white) 0%, #fafbfd 100%);
            border-radius: 24px;
            padding: 3rem;
            margin-bottom: 3rem;
            box-shadow: 0 12px 40px rgba(0,24,69,0.12);
            border: 2px solid rgba(255,201,113,0.2);
            position: relative;
            overflow: hidden;
        }
        .main-info-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255,201,113,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        .main-info-card-content {
            position: relative;
            z-index: 2;
        }
        .main-info-card h2 {
            color: var(--ink);
            font-weight: 800;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            letter-spacing: -0.5px;
        }
        .main-info-card h2 i {
            color: var(--gold);
            font-size: 2.5rem;
        }
        .main-info-card p {
            color: #555;
            line-height: 1.8;
            margin: 0;
            font-size: 1.1rem;
        }

        /* Form Section */
        .form-section {
            background: var(--white);
            border-radius: 28px;
            box-shadow: 0 16px 48px rgba(0,24,69,0.12);
            padding: 4rem;
            border: 2px solid rgba(255,201,113,0.2);
            position: relative;
            overflow: hidden;
        }
        .form-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--gold) 0%, var(--gold-light) 50%, var(--gold) 100%);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }
        @keyframes shimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .form-section h3 {
            color: var(--ink);
            font-weight: 800;
            font-size: 2.2rem;
            margin-bottom: 1rem;
            text-align: center;
            letter-spacing: -0.5px;
            position: relative;
        }
        .form-section h3::after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, var(--gold) 0%, var(--gold-light) 100%);
            border-radius: 3px;
            margin: 1.5rem auto 0;
        }
        .form-intro {
            text-align: center;
            color: #666;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--navy) 0%, var(--ink) 100%);
            color: #EBEDF2;
            padding: 3rem 0;
            margin-top: 5rem;
            position: relative;
        }
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, rgba(255,201,113,0.3) 50%, transparent 100%);
        }
        footer small {
            font-size: 0.85rem;
            line-height: 1.7;
            display: block;
            text-align: justify;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            opacity: 0.9;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .info-card,
        .main-info-card,
        .form-section {
            animation: fadeInUp 0.6s ease-out;
        }
        .info-card:nth-child(1) { animation-delay: 0.1s; }
        .info-card:nth-child(2) { animation-delay: 0.2s; }
        .info-card:nth-child(3) { animation-delay: 0.3s; }

        /* Responsive */
        @media (max-width: 992px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
        @media (max-width: 768px) {
            .internal-header {
                padding: 2rem 0;
            }
            .internal-header h1 {
                font-size: 2rem;
                flex-direction: column;
                text-align: center;
                gap: 0.75rem;
            }
            .internal-header h1 i {
                font-size: 2.8rem;
            }
            .internal-header h1::before {
                display: none;
            }
            .title-text {
                align-items: center;
            }
            .internal-header .logo {
                max-width: 180px;
            }
            .main-container {
                margin: 2rem auto;
            }
            .main-info-card,
            .form-section {
                padding: 2rem 1.5rem;
            }
            .main-info-card h2,
            .form-section h3 {
                font-size: 1.6rem;
            }
            .info-card {
                padding: 2rem;
            }
        }
        @media (max-width: 576px) {
            .internal-header h1 {
                font-size: 1.6rem;
            }
            .internal-header h1 i {
                font-size: 2.2rem;
            }
            .title-subtitle {
                font-size: 0.4em;
            }
            .main-info-card h2,
            .form-section h3 {
                font-size: 1.4rem;
            }
            .form-intro {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="internal-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                    <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Logo" class="logo">
                </div>
                <div class="col-md-8 header-content">
                    <h1>
                        <i class="bi bi-calendar-event"></i>
                        <span class="title-text">
                            <span class="title-main">Solicitação de Eventos</span>
                            <span class="title-subtitle">Sistema Interno</span>
                        </span>
                    </h1>
                    <span class="badge">
                        <i class="bi bi-shield-lock"></i> Área Interna
                    </span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-container">
        <!-- Main Info Card -->
        <div class="main-info-card">
            <div class="main-info-card-content">
                <h2>
                    <i class="bi bi-info-circle-fill"></i>
                    Bem-vindo à área de solicitação de eventos
                </h2>
                <p>
                    Esta página é destinada exclusivamente para colaboradores da Alta Vista Investimentos solicitarem eventos internos ou externos. 
                    Utilize o formulário abaixo para enviar sua solicitação com todas as informações necessárias. Nossa equipe entrará em contato para confirmar os detalhes.
                </p>
            </div>
        </div>

        <!-- Info Cards Grid -->
        <div class="info-grid">
            <div class="info-card">
                <div class="info-card-icon">
                    <i class="bi bi-people"></i>
                </div>
                <h2>Eventos Internos</h2>
                <p>Treinamentos, reuniões estratégicas e workshops para equipe interna.</p>
                <ul>
                    <li>Treinamentos técnicos</li>
                    <li>Reuniões de equipe</li>
                    <li>Workshops de desenvolvimento</li>
                </ul>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="bi bi-megaphone"></i>
                </div>
                <h2>Eventos Externos</h2>
                <p>Webinars, palestras e eventos voltados para clientes e prospects.</p>
                <ul>
                    <li>Webinars educacionais</li>
                    <li>Palestras e workshops</li>
                    <li>Eventos para clientes</li>
                </ul>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h2>Prazo de Antecedência</h2>
                <p>Envie sua solicitação com pelo menos 15 dias de antecedência para garantir a organização adequada do evento.</p>
                <ul>
                    <li><strong>Mínimo:</strong> 15 dias</li>
                    <li><strong>Recomendado:</strong> 30 dias</li>
                    <li><strong>Eventos grandes:</strong> 60 dias</li>
                </ul>
            </div>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <h3>Formulário de Solicitação</h3>
            <p class="form-intro">
                Preencha todos os campos abaixo com as informações do evento que deseja solicitar. 
                Quanto mais detalhes você fornecer, mais rápido poderemos processar sua solicitação.
            </p>
            
            <!-- HubSpot Form -->
            <div id="hubspot-form-container"></div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <small>
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- HubSpot Form Script -->
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
      hbspt.forms.create({
        portalId: "21698044",
        formId: "2ebdfb5e-8273-41b6-81f0-fd64f3413304",
        region: "na1",
        target: "#hubspot-form-container"
      });
    </script>
    
    <style>
        /* Estilos customizados para o formulário HubSpot */
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
            margin-bottom: 2rem !important;
        }
        .hs-form-frame .hs-form .hs-form-field:last-of-type {
            margin-bottom: 0 !important;
        }
        .hs-form-frame .hs-form label {
            color: var(--ink) !important;
            font-weight: 600 !important;
            margin-bottom: 0.75rem !important;
            font-size: 1rem !important;
            display: block !important;
            font-family: 'GT America', 'Inter', Arial, sans-serif !important;
            letter-spacing: -0.2px;
        }
        .hs-form-frame .hs-form input[type="text"],
        .hs-form-frame .hs-form input[type="email"],
        .hs-form-frame .hs-form input[type="tel"],
        .hs-form-frame .hs-form input[type="number"],
        .hs-form-frame .hs-form input[type="date"],
        .hs-form-frame .hs-form input[type="datetime-local"],
        .hs-form-frame .hs-form select,
        .hs-form-frame .hs-form textarea {
            border: 2px solid rgba(12, 24, 64, 0.15) !important;
            border-radius: 14px !important;
            padding: 1rem 1.5rem !important;
            font-size: 1rem !important;
            background: #fff !important;
            width: 100% !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            font-family: 'GT America', 'Inter', Arial, sans-serif !important;
            color: var(--ink) !important;
            box-sizing: border-box !important;
        }
        .hs-form-frame .hs-form input::placeholder,
        .hs-form-frame .hs-form textarea::placeholder {
            color: #999 !important;
            opacity: 0.7 !important;
        }
        .hs-form-frame .hs-form input:focus,
        .hs-form-frame .hs-form select:focus,
        .hs-form-frame .hs-form textarea:focus {
            border-color: var(--gold) !important;
            box-shadow: 0 0 0 4px rgba(255,201,113,.15) !important;
            outline: none !important;
            transform: translateY(-2px);
        }
        /* Radio buttons styling */
        .hs-form-frame .hs-form .hs-form-radio {
            display: flex !important;
            flex-direction: row !important;
            gap: 2rem !important;
            margin-top: 0.75rem !important;
            flex-wrap: wrap !important;
        }
        .hs-form-frame .hs-form .hs-form-radio .hs-form-radio-display {
            display: flex !important;
            align-items: center !important;
            gap: 0.75rem !important;
            cursor: pointer !important;
            padding: 0.5rem 1rem !important;
            border-radius: 10px !important;
            transition: all 0.2s ease !important;
        }
        .hs-form-frame .hs-form .hs-form-radio .hs-form-radio-display:hover {
            background: rgba(255,201,113,0.1) !important;
        }
        .hs-form-frame .hs-form .hs-form-radio input[type="radio"] {
            width: 1.35rem !important;
            height: 1.35rem !important;
            margin: 0 !important;
            cursor: pointer !important;
            accent-color: var(--gold) !important;
        }
        .hs-form-frame .hs-form .hs-form-radio label {
            margin: 0 !important;
            font-weight: 500 !important;
            cursor: pointer !important;
            color: var(--ink) !important;
        }
        /* Checkbox styling */
        .hs-form-frame .hs-form .hs-form-checkbox {
            display: flex !important;
            align-items: flex-start !important;
            gap: 0.75rem !important;
            margin-top: 0.75rem !important;
            padding: 0.75rem !important;
            border-radius: 10px !important;
            transition: all 0.2s ease !important;
        }
        .hs-form-frame .hs-form .hs-form-checkbox:hover {
            background: rgba(255,201,113,0.05) !important;
        }
        .hs-form-frame .hs-form .hs-form-checkbox input[type="checkbox"] {
            width: 1.35rem !important;
            height: 1.35rem !important;
            margin: 0.35rem 0 0 0 !important;
            cursor: pointer !important;
            accent-color: var(--gold) !important;
            flex-shrink: 0 !important;
        }
        .hs-form-frame .hs-form .hs-form-checkbox label {
            margin: 0 !important;
            font-weight: 400 !important;
            cursor: pointer !important;
            color: var(--ink) !important;
            line-height: 1.7 !important;
        }
        /* Button styling */
        .hs-form-frame .hs-form .hs-button {
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%) !important;
            color: var(--navy) !important;
            font-weight: 700 !important;
            padding: 1.25rem 3rem !important;
            border-radius: 50px !important;
            border: none !important;
            font-size: 1.15rem !important;
            width: 100% !important;
            margin-top: 2rem !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            box-shadow: 0 8px 24px rgba(255,201,113,0.4) !important;
            cursor: pointer !important;
            font-family: 'GT America', 'Inter', Arial, sans-serif !important;
            letter-spacing: 0.3px !important;
            text-transform: uppercase !important;
            font-size: 0.95rem !important;
        }
        .hs-form-frame .hs-form .hs-button:hover {
            background: linear-gradient(135deg, #d4a574 0%, #e6c085 100%) !important;
            transform: translateY(-4px) !important;
            box-shadow: 0 12px 32px rgba(255,201,113,0.5) !important;
        }
        .hs-form-frame .hs-form .hs-button:active {
            transform: translateY(-2px) !important;
        }
        /* Error messages */
        .hs-form-frame .hs-form .hs-error-msgs {
            color: #dc3545 !important;
            font-size: 0.9rem !important;
            margin-top: 0.75rem !important;
            font-family: 'GT America', 'Inter', Arial, sans-serif !important;
            background: rgba(220, 53, 69, 0.1) !important;
            padding: 0.75rem 1rem !important;
            border-radius: 10px !important;
            border-left: 3px solid #dc3545 !important;
        }
        .hs-form-frame .hs-form .hs-error-msgs label {
            color: #dc3545 !important;
            font-weight: 600 !important;
        }
        /* Required field indicator */
        .hs-form-frame .hs-form .hs-form-required {
            color: var(--gold) !important;
        }
        /* Form description */
        .hs-form-frame .hs-form .hs-form-description {
            color: #666 !important;
            font-size: 1rem !important;
            margin-bottom: 1.5rem !important;
            line-height: 1.7 !important;
        }
        /* Success message */
        .submitted-message {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.1) 0%, rgba(40, 167, 69, 0.05) 100%) !important;
            border: 2px solid rgba(40, 167, 69, 0.3) !important;
            border-radius: 16px !important;
            padding: 2rem !important;
            text-align: center !important;
            color: #155724 !important;
        }
    </style>
</body>
</html>
