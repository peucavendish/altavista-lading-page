<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação Enviada | Alta Vista Investimentos</title>
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
            display: flex;
            flex-direction: column;
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
            padding: 2rem 0;
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
            max-width: 200px;
            width: 100%;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.2));
        }

        /* Success Section */
        .success-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem 1.5rem;
            position: relative;
            z-index: 1;
        }
        .success-card {
            background: var(--white);
            border-radius: 32px;
            padding: 4rem 3rem;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0,24,69,0.15);
            border: 2px solid rgba(255,201,113,0.2);
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .success-card::before {
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
        .success-card::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255,201,113,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        .success-content {
            position: relative;
            z-index: 2;
        }
        .success-icon-wrapper {
            width: 120px;
            height: 120px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 12px 40px rgba(255,201,113,0.4);
            animation: scaleIn 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        @keyframes scaleIn {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        .success-icon-wrapper i {
            font-size: 4rem;
            color: var(--navy);
            animation: checkmark 0.8s ease-out 0.3s both;
        }
        @keyframes checkmark {
            0% {
                transform: scale(0) rotate(-45deg);
            }
            50% {
                transform: scale(1.2) rotate(5deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
            }
        }
        .success-card h1 {
            color: var(--ink);
            font-weight: 900;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
            animation: fadeInUp 0.6s ease-out 0.2s both;
        }
        .success-card .subtitle {
            color: #666;
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 2rem;
            animation: fadeInUp 0.6s ease-out 0.4s both;
        }
        .success-card .description {
            color: #555;
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            animation: fadeInUp 0.6s ease-out 0.6s both;
        }
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
        .info-box {
            background: linear-gradient(135deg, rgba(255,201,113,0.1) 0%, rgba(255,201,113,0.05) 100%);
            border-radius: 16px;
            padding: 1.5rem;
            margin: 2rem 0;
            border-left: 4px solid var(--gold);
            text-align: left;
            animation: fadeInUp 0.6s ease-out 0.8s both;
        }
        .info-box p {
            margin: 0;
            color: #555;
            font-size: 0.95rem;
            line-height: 1.7;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }
        .info-box i {
            color: var(--gold);
            font-size: 1.2rem;
            margin-top: 0.1rem;
            flex-shrink: 0;
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            color: var(--navy);
            font-weight: 700;
            padding: 1.25rem 3rem;
            border-radius: 50px;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            margin-top: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            box-shadow: 0 8px 24px rgba(255,201,113,0.4);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.95rem;
            animation: fadeInUp 0.6s ease-out 1s both;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #d4a574 0%, #e6c085 100%);
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(255,201,113,0.5);
            color: var(--navy);
        }
        .btn-primary:active {
            transform: translateY(-2px);
        }
        .btn-secondary {
            background: transparent;
            color: var(--ink);
            font-weight: 600;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            margin-left: 1rem;
            transition: all 0.3s ease;
            border: 2px solid rgba(22,33,62,0.2);
            animation: fadeInUp 0.6s ease-out 1s both;
        }
        .btn-secondary:hover {
            background: rgba(22,33,62,0.05);
            border-color: rgba(22,33,62,0.4);
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--navy) 0%, var(--ink) 100%);
            color: #EBEDF2;
            padding: 2rem 0;
            margin-top: auto;
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
            font-size: 0.8rem;
            line-height: 1.7;
            display: block;
            text-align: justify;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            opacity: 0.9;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .success-container {
                padding: 2rem 1rem;
            }
            .success-card {
                padding: 3rem 2rem;
            }
            .success-card h1 {
                font-size: 2rem;
            }
            .success-card .subtitle {
                font-size: 1.1rem;
            }
            .success-icon-wrapper {
                width: 100px;
                height: 100px;
            }
            .success-icon-wrapper i {
                font-size: 3rem;
            }
            .btn-secondary {
                margin-left: 0;
                margin-top: 0.75rem;
                display: block;
            }
        }
        @media (max-width: 576px) {
            .success-card {
                padding: 2.5rem 1.5rem;
            }
            .success-card h1 {
                font-size: 1.75rem;
            }
            .success-card .subtitle {
                font-size: 1rem;
            }
            .success-icon-wrapper {
                width: 90px;
                height: 90px;
            }
            .success-icon-wrapper i {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="internal-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Logo" class="logo">
                </div>
            </div>
        </div>
    </header>

    <!-- Success Section -->
    <div class="success-container">
        <div class="success-card">
            <div class="success-content">
                <div class="success-icon-wrapper">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
                
                <h1>Solicitação Enviada com Sucesso!</h1>
                
                <p class="subtitle">
                    Obrigado por utilizar nosso sistema de solicitação de eventos
                </p>
                
                <p class="description">
                    Sua solicitação foi recebida e está sendo processada pela nossa equipe. 
                    Você receberá uma confirmação por email em breve com os próximos passos.
                </p>
                
                <div class="info-box">
                    <p>
                        <i class="bi bi-info-circle-fill"></i>
                        <span>
                            <strong>Próximos passos:</strong> Nossa equipe entrará em contato em até 2 dias úteis 
                            para confirmar os detalhes do evento e alinhar os próximos passos.
                        </span>
                    </p>
                </div>
                
                <div>
                    <a href="/interno/solicitacao-eventos" class="btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        Nova Solicitação
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <small>
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
