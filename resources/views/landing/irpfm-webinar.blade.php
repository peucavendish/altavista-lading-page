<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Webinar IRPFM | Alta Vista Investimentos</title>
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
            min-height: 70vh; 
            display: flex; 
            flex-wrap: wrap; 
            margin-top: 0; 
            position: relative;
        }
        .hero-left {
            background: linear-gradient(135deg, rgba(0,24,69,0.95) 0%, rgba(0,24,69,0.85) 50%, rgba(22,33,62,0.9) 100%),
                        url('https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center/cover no-repeat;
            color: #EBEDF2; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            position: relative;
            min-height: 600px; 
            width: 100vw;
        }
        .hero-left::before { 
            content: ''; 
            position: absolute; 
            inset: 0; 
            background: radial-gradient(circle at 30% 50%, rgba(255,201,113,0.15) 0%, transparent 50%);
        }
        .hero-content-inspire { 
            position: relative; 
            z-index: 2; 
            text-align: center; 
            padding: 4rem 1.5rem; 
            width: 100%; 
            max-width: 1100px;
            margin: 0 auto;
        }
        .logo-hero {
            max-width: 320px;
            width: 100%;
            margin-bottom: 2rem;
            filter: drop-shadow(0 4px 20px rgba(0,0,0,0.3));
            animation: fadeInDown 0.8s ease-out;
        }
        .webinar-badge {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            display: inline-block;
            margin-bottom: 1.5rem;
            box-shadow: 0 6px 25px rgba(255,201,113,0.4);
            animation: fadeInDown 0.8s ease-out 0.1s both;
            letter-spacing: 0.8px;
            text-transform: uppercase;
        }
        .irpfm-highlight {
            color: var(--gold);
            font-size: 3.5rem;
            font-weight: 900;
            display: inline-block;
            margin: 0.5rem 0;
            letter-spacing: -1px;
            text-shadow: 0 2px 10px rgba(255,201,113,0.3);
            position: relative;
        }
        .irpfm-highlight::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: linear-gradient(90deg, var(--gold), #ffd89b);
            border-radius: 2px;
        }
        .hero-content-inspire h1 { 
            font-size: 3.2rem; 
            font-weight: 800; 
            line-height: 1.2; 
            color: #EBEDF2; 
            text-shadow: 0 4px 20px rgba(0,24,69,0.5); 
            letter-spacing: -1px;
            margin: 1.5rem 0;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }
        .hero-content-inspire h1 .subtitle-text {
            font-size: 1.8rem;
            font-weight: 500;
            color: #EBEDF2;
            display: block;
            margin-top: 0.75rem;
            opacity: 0.9;
            line-height: 1.3;
        }
        .hero-content-inspire p { 
            font-size: 1.3rem; 
            margin-top: 2rem; 
            opacity: 0.95;
            line-height: 1.7;
            animation: fadeInUp 0.8s ease-out 0.4s both;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
        }
        .event-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            margin-top: 3rem;
            animation: fadeInUp 0.8s ease-out 0.6s both;
            padding: 2rem;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255,201,113,0.2);
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
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

        /* Theme Highlight Section */
        .theme-highlight {
            background: #fff;
            border-radius: 24px;
            padding: 3rem 2.5rem;
            margin: -60px auto 3rem;
            max-width: 1200px;
            position: relative;
            z-index: 4;
            box-shadow: 0 15px 50px rgba(0,24,69,0.3);
            border: 2px solid rgba(255,201,113,0.3);
        }
        .theme-highlight-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        .theme-highlight-header h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--ink);
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
        }
        .theme-highlight-header h2 .irpfm-accent {
            color: var(--gold);
            font-weight: 900;
        }
        .theme-highlight-header p {
            font-size: 1.2rem;
            color: #333;
            line-height: 1.7;
            max-width: 800px;
            margin: 0 auto;
            font-weight: 400;
        }
        .theme-content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2.5rem;
        }
        .theme-card {
            background: #fff;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,24,69,0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .theme-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,24,69,0.15);
            border-color: rgba(255,201,113,0.3);
        }
        .theme-card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--navy);
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 15px rgba(255,201,113,0.3);
        }
        .theme-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 1rem;
        }
        .theme-card p {
            color: #333;
            line-height: 1.7;
            margin: 0;
            font-weight: 400;
        }
        .theme-card strong {
            color: var(--ink);
            font-weight: 700;
        }

        /* Info Box */
        .info-box {
            background: var(--card);
            border-radius: 20px;
            padding: 2.5rem;
            margin: 2rem auto;
            max-width: 1000px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            border-left: 5px solid var(--gold);
            position: relative;
        }
        .info-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(180deg, var(--gold) 0%, #ffd89b 100%);
            border-radius: 20px 0 0 20px;
        }
        .info-box h4 {
            color: var(--ink);
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.5rem;
        }
        .info-box h4 i {
            color: var(--gold);
            font-size: 1.8rem;
        }
        .info-box p {
            color: #555;
            line-height: 1.8;
            margin: 0;
            font-size: 1.05rem;
        }
        .info-box strong {
            color: var(--ink);
            font-weight: 700;
        }

        /* Table Styles */
        .table-section {
            background: var(--card);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            margin: 2rem auto 3rem;
            max-width: 1200px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            border: 1px solid rgba(255,201,113,0.1);
        }
        .table-section h3 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 1rem;
            color: var(--ink);
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        .table-section .subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2.5rem;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,24,69,0.08);
        }
        .info-table thead {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
        }
        .info-table th {
            padding: 1.25rem 1rem;
            text-align: left;
            font-weight: 700;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-table td {
            padding: 1rem;
            border-bottom: 1px solid rgba(0,24,69,0.08);
            color: #555;
            font-size: 0.95rem;
        }
        .info-table tbody tr:last-child td {
            border-bottom: none;
        }
        .info-table tbody tr:hover {
            background: rgba(255,201,113,0.05);
        }
        .highlight-cell {
            background: rgba(255,201,113,0.1);
            font-weight: 600;
            color: var(--ink);
        }
        .table-note {
            background: rgba(255,201,113,0.1);
            border-left: 4px solid var(--gold);
            border-radius: 8px;
            padding: 1.25rem;
            margin-top: 1.5rem;
            font-size: 0.95rem;
            color: #555;
            line-height: 1.7;
        }
        .table-note strong {
            color: var(--ink);
            font-weight: 700;
        }
        .example-box {
            background: linear-gradient(135deg, rgba(255,201,113,0.15) 0%, rgba(255,201,113,0.08) 100%);
            border-radius: 16px;
            padding: 2.5rem;
            margin: 2rem 0;
            border: 2px solid rgba(255,201,113,0.3);
        }
        .example-box h4 {
            color: var(--ink);
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .example-box h4 i {
            color: var(--gold);
            font-size: 1.6rem;
        }
        .example-step {
            background: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            border-left: 4px solid var(--gold);
        }
        .example-step:last-child {
            margin-bottom: 0;
        }
        .example-step strong {
            color: var(--ink);
            font-weight: 700;
            display: block;
            margin-bottom: 0.5rem;
        }
        .example-step p {
            color: #555;
            margin: 0;
            line-height: 1.7;
        }
        .investment-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }
        .investment-item {
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            font-weight: 600;
            color: var(--ink);
            border: 2px solid rgba(255,201,113,0.2);
        }

        /* Benefits Section */
        .benefits-section {
            background: var(--card);
            border-radius: 24px;
            padding: 4rem 2.5rem;
            margin: 2rem auto 3rem;
            max-width: 1200px;
            box-shadow: 0 8px 30px rgba(12, 24, 64, 0.12);
            border: 1px solid rgba(255,201,113,0.1);
        }
        .benefits-section h3 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--ink);
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        .benefits-section .subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 3rem;
        }
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }
        .benefit-item {
            display: flex;
            flex-direction: column;
            align-items: start;
            gap: 1.5rem;
            padding: 2rem;
            background: #fff;
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            height: 100%;
        }
        .benefit-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 35px rgba(0,24,69,0.15);
            border-color: rgba(255,201,113,0.4);
        }
        .benefit-icon {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            font-size: 2rem;
            flex-shrink: 0;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            box-shadow: 0 6px 20px rgba(255,201,113,0.35);
        }
        .benefit-item strong {
            color: var(--ink);
            font-size: 1.3rem;
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 700;
        }
        .benefit-item p {
            color: #666;
            margin: 0;
            line-height: 1.7;
            font-size: 1rem;
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
            background: var(--gold);
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
        }
        .btn-submit:hover {
            background: #d4a574;
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
            .hero-left {
                min-height: 550px;
            }
            .hero-content-inspire { 
                padding: 3rem 1.5rem; 
            }
            .hero-content-inspire h1 { 
                font-size: 2.5rem; 
            }
            .irpfm-highlight {
                font-size: 2.8rem;
            }
            .hero-content-inspire h1 .subtitle-text {
                font-size: 1.5rem;
            }
            .hero-content-inspire p {
                font-size: 1.15rem;
            }
            .event-info {
                gap: 2rem;
                padding: 1.5rem;
            }
            .theme-highlight {
                margin-top: -60px;
                padding: 2.5rem 2rem;
            }
            .theme-highlight-header h2 {
                font-size: 2rem;
            }
            .theme-content-grid {
                grid-template-columns: 1fr;
            }
            .benefits-grid {
                grid-template-columns: 1fr;
            }
            .table-section {
                padding: 2.5rem 2rem;
            }
            .info-table {
                font-size: 0.9rem;
            }
            .info-table th,
            .info-table td {
                padding: 0.875rem 0.75rem;
            }
            .lead-section { 
                padding: 3rem 2rem;
                margin: 2rem 1rem 3rem;
            }
            .info-box {
                padding: 2rem;
                margin: 1.5rem 1rem;
            }
        }
        @media (max-width: 576px) {
            .hero-left {
                min-height: 500px;
            }
            .hero-content-inspire h1 {
                font-size: 2rem;
            }
            .irpfm-highlight {
                font-size: 2.2rem;
            }
            .hero-content-inspire h1 .subtitle-text {
                font-size: 1.2rem;
            }
            .webinar-badge {
                font-size: 0.85rem;
                padding: 0.6rem 1.5rem;
            }
            .event-info {
                flex-direction: column;
                gap: 1.5rem;
                padding: 1.5rem;
            }
            .theme-highlight {
                margin-top: -40px;
                padding: 2rem 1.5rem;
            }
            .theme-highlight-header h2 {
                font-size: 1.8rem;
            }
            .benefits-section h3 {
                font-size: 2rem;
            }
            .heading-accent {
                font-size: 1.8rem;
            }
            .table-section {
                padding: 2rem 1.5rem;
            }
            .table-section h3 {
                font-size: 1.8rem;
            }
            .info-table {
                font-size: 0.85rem;
            }
            .info-table th,
            .info-table td {
                padding: 0.75rem 0.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero -->
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Logo" class="logo-hero"><br>
                <div class="webinar-badge">🎓 Webinar Exclusivo</div>
                <h1>
                    Domine o <span class="irpfm-highlight">IRPFM</span>
                    <span class="subtitle-text">Imposto de Renda Pessoa Física Mínimo</span>
                </h1>
                <p class="mb-0">Entenda a nova Lei 15.270/2025 que entra em vigor em 2026. Aprenda como calcular o IRPFM, otimizar sua estratégia tributária e proteger seu patrimônio com especialistas da Alta Vista Investimentos.</p>
                <div class="speaker-highlight" style="margin: 2rem 0; padding: 1.5rem; background: rgba(255,201,113,0.15); border-radius: 16px; border: 2px solid rgba(255,201,113,0.3);">
                    <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                        <i class="bi bi-person-badge" style="font-size: 2rem; color: var(--gold);"></i>
                        <div style="text-align: center;">
                            <strong style="color: var(--gold); font-size: 1.1rem; display: block; margin-bottom: 0.25rem;">Com Daniela Whitaker</strong>
                            <span style="color: #EBEDF2; font-size: 0.95rem;">Advogada da XP</span>
                        </div>
                    </div>
                </div>
                <div class="event-info mb-4">
                    <div class="event-info-item">
                        <i class="bi bi-calendar-event"></i>
                        <span class="label">Data</span>
                        <span class="value">29 de Janeiro de 2026</span>
                    </div>
                    <div class="event-info-item">
                        <i class="bi bi-clock"></i>
                        <span class="label">Horário</span>
                        <span class="value">19:00 horas</span>
                    </div>
                    <div class="event-info-item">
                        <i class="bi bi-camera-video"></i>
                        <span class="label">Formato</span>
                        <span class="value">Online ao Vivo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Theme Highlight Section -->
    <section class="container">
        <div class="theme-highlight">
            <div class="theme-highlight-header">
                <h2>O que é o <span class="irpfm-accent">IRPFM</span>?</h2>
                <p>O Imposto de Renda Pessoa Física Mínimo (IRPFM) é uma nova tributação que entra em vigor em 2026 através da Lei 15.270/2025. Aplicável para contribuintes com renda total anual acima de R$ 600.000,00, garante que pessoas de alta renda paguem um imposto mínimo, mesmo utilizando isenções, deduções ou estratégias de planejamento tributário.</p>
            </div>
            <div class="theme-content-grid">
                <div class="theme-card">
                    <div class="theme-card-icon">
                        <i class="bi bi-calculator"></i>
                    </div>
                    <h3>Como Funciona</h3>
                    <p><strong>Aplicável:</strong> Renda total anual acima de R$ 600.000,00<br>
                    <strong>Alíquota:</strong> Progressiva de 0% a 10% (até R$ 1,2M) ou fixa de 10% (acima de R$ 1,2M)<br>
                    <strong>Base de cálculo:</strong> Inclui renda tributável, dividendos e rendimentos de investimentos</p>
                </div>
                <div class="theme-card">
                    <div class="theme-card-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3>Investimentos Isentos</h3>
                    <p>LCI, LCA, CRI, CRA, FIIs (com pulverização), Fiagro e outros investimentos incentivados <strong>NÃO entram</strong> na base de cálculo do IRPFM, tornando-os especialmente atrativos para alta renda.</p>
                </div>
                <div class="theme-card">
                    <div class="theme-card-icon">
                        <i class="bi bi-calendar-event"></i>
                    </div>
                    <h3>Vigência</h3>
                    <p><strong>Entrada em vigor:</strong> 1º de janeiro de 2026<br>
                    <strong>Primeira declaração:</strong> 2027 (referente ao ano-base 2026)<br>
                    <strong>Sem regras de transição</strong> - aplicação integral a partir de 2026</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Inscrição -->
    <section class="container">
        <div class="lead-section">
            <h2 class="text-center heading-accent">Garanta sua vaga gratuita</h2>
            <p class="form-intro">Preencha o formulário abaixo para garantir sua participação no webinar exclusivo sobre IRPFM. O link de acesso será enviado por email alguns dias antes do evento.</p>
            
            <!-- HubSpot Form -->
            <div style="padding: 1rem 0;">
                <iframe src="https://share.hsforms.com/1VKWNhRLmT8mNYafSxOKWPQcx2bg" width="100%" height="600" frameborder="0" style="border: none; display: block;"></iframe>
            </div>
        </div>
    </section>

    <!-- Info Box -->
    <section class="container">
        <div class="info-box">
            <h4>
                <i class="bi bi-info-circle"></i>
                Sobre o Webinar
            </h4>
            <p>
                Participe do nosso webinar exclusivo sobre <strong>IRPFM (Imposto de Renda Pessoa Física Mínimo)</strong> e entenda em detalhes a Lei 15.270/2025 que entra em vigor em 2026. 
                Aprenda como calcular o imposto mínimo, quais investimentos são isentos, como funciona a tributação de dividendos e quais estratégias legais você pode adotar para 
                otimizar sua carga tributária. O conteúdo é direcionado para contribuintes de alta renda (acima de R$ 600k/ano) que precisam se preparar para essa nova realidade tributária.
            </p>
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
            transition: all 0.3s ease !important;
            font-family: 'GT America', Arial, sans-serif !important;
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
            box-shadow: 0 0 0 0.25rem rgba(255,201,113,.2) !important;
            outline: none !important;
        }
        /* Radio buttons styling */
        .hs-form-frame .hs-form .hs-form-radio {
            display: flex !important;
            flex-direction: row !important;
            gap: 2rem !important;
            margin-top: 1rem !important;
            flex-wrap: wrap !important;
        }
        .hs-form-frame .hs-form .hs-form-radio .hs-form-radio-display {
            display: flex !important;
            align-items: center !important;
            gap: 0.5rem !important;
            cursor: pointer !important;
        }
        .hs-form-frame .hs-form .hs-form-radio input[type="radio"] {
            width: 1.25rem !important;
            height: 1.25rem !important;
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
            margin-top: 0.5rem !important;
        }
        .hs-form-frame .hs-form .hs-form-checkbox input[type="checkbox"] {
            width: 1.25rem !important;
            height: 1.25rem !important;
            margin: 0.25rem 0 0 0 !important;
            cursor: pointer !important;
            accent-color: var(--gold) !important;
            flex-shrink: 0 !important;
        }
        .hs-form-frame .hs-form .hs-form-checkbox label {
            margin: 0 !important;
            font-weight: 400 !important;
            cursor: pointer !important;
            color: var(--ink) !important;
            line-height: 1.6 !important;
        }
        /* Button styling */
        .hs-form-frame .hs-form .hs-button {
            background: var(--gold) !important;
            color: var(--navy) !important;
            font-weight: 700 !important;
            padding: 1rem 2.5rem !important;
            border-radius: 50px !important;
            border: none !important;
            font-size: 1.1rem !important;
            width: 100% !important;
            margin-top: 2rem !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 6px 20px rgba(255,201,113,0.4) !important;
            cursor: pointer !important;
            font-family: 'GT America', Arial, sans-serif !important;
        }
        .hs-form-frame .hs-form .hs-button:hover {
            background: #d4a574 !important;
            transform: translateY(-3px) !important;
            box-shadow: 0 10px 30px rgba(255,201,113,0.5) !important;
        }
        .hs-form-frame .hs-form .hs-button:active {
            transform: translateY(-1px) !important;
        }
        /* Error messages */
        .hs-form-frame .hs-form .hs-error-msgs {
            color: #dc3545 !important;
            font-size: 0.875rem !important;
            margin-top: 0.5rem !important;
            font-family: 'GT America', Arial, sans-serif !important;
        }
        .hs-form-frame .hs-form .hs-error-msgs label {
            color: #dc3545 !important;
            font-weight: 500 !important;
        }
        /* Required field indicator */
        .hs-form-frame .hs-form .hs-form-required {
            color: var(--gold) !important;
        }
        /* Submitting state */
        .hs-form-frame .hs-form .hs-button.primary {
            background: var(--gold) !important;
        }
        /* Form description */
        .hs-form-frame .hs-form .hs-form-description {
            color: #555 !important;
            font-size: 0.95rem !important;
            margin-bottom: 1.5rem !important;
            line-height: 1.6 !important;
        }
    </style>
</body>
</html>
