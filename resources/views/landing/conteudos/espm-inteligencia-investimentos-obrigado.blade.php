<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cadastro recebido — curso Inteligência em Investimentos, parceria ESPM e Alta Vista.">
    <title>Cadastro recebido | Inteligência em Investimentos | Alta Vista</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #001845;
            --ink-card: #16213e;
            --gold: #FFC971;
            --text: #EBEDF2;
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .thank-you-container {
            background: var(--ink-card);
            border-radius: 20px;
            padding: 2.75rem 2rem;
            color: var(--text);
            text-align: center;
            max-width: 640px;
            margin: 2rem auto;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 201, 113, 0.2);
        }
        .logo-hero-av {
            max-width: 280px;
            width: 100%;
            margin: 0 auto 0.5rem;
            display: block;
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.35));
        }
        .badge-campanha {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            font-weight: 700;
            font-size: 0.78rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 0.4rem 1rem;
            border-radius: 999px;
            margin-bottom: 1rem;
        }
        .logos-row {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.25rem;
        }
        .logo-espm-thanks {
            max-width: 140px;
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .partner-fine { font-size: 0.72rem; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(235, 237, 242, 0.65); margin: 0; }
        .success-icon {
            font-size: 3.5rem;
            color: var(--gold);
            margin-bottom: 1rem;
            animation: scaleIn 0.5s ease-out;
        }
        @keyframes scaleIn {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        h1 {
            color: var(--gold);
            font-weight: 800;
            margin-bottom: 1rem;
            font-size: clamp(1.65rem, 4vw, 2.1rem);
            line-height: 1.2;
        }
        .description {
            font-size: 1.05rem;
            line-height: 1.65;
            margin-bottom: 0;
            color: var(--text);
            opacity: 0.95;
        }
    </style>
</head>
<body>
    <div class="container px-3">
        <div class="thank-you-container">
            <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo-hero-av" width="280" height="auto">
            <span class="badge-campanha">ESPM / Inteligência em Investimentos</span>
            <div class="logos-row">
                <p class="partner-fine">Parceria</p>
                <img src="/img/espm.jpg" alt="ESPM" class="logo-espm-thanks" width="140" height="45">
            </div>
            <div class="success-icon" aria-hidden="true">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            <h1>Cadastro recebido com sucesso</h1>
            <p class="description">
                Em breve você receberá no seu e-mail as instruções para acessar o curso <strong>Inteligência em Investimentos</strong>.
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21698044.js"></script>
</body>
</html>
