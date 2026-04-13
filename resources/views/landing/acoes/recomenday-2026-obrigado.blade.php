<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indicação registrada — Recomenday 2026 Alta Vista Investimentos.">
    <title>Indicação recebida | Recomenday 2026 | Alta Vista</title>
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
        .logo-hero {
            max-width: 280px;
            width: 100%;
            margin: 0 auto 1.5rem;
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
            margin-bottom: 1rem;
            color: var(--text);
            opacity: 0.95;
        }
        .actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            margin-top: 1.75rem;
        }
        .btn-primary-av {
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            font-weight: 700;
            padding: 0.95rem 2rem;
            border-radius: 50px;
            font-size: 1.05rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
            border: 2px solid rgba(0, 24, 69, 0.15);
            box-shadow: 0 6px 22px rgba(255, 201, 113, 0.35);
            width: 100%;
            max-width: 22rem;
        }
        .btn-primary-av:hover {
            color: var(--navy);
            filter: brightness(1.03);
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(255, 201, 113, 0.45);
        }
        .btn-ghost {
            color: rgba(235, 237, 242, 0.85);
            font-size: 0.95rem;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: color 0.2s ease, background 0.2s ease;
        }
        .btn-ghost:hover {
            color: var(--gold);
            background: rgba(255, 255, 255, 0.06);
        }
        .info-box {
            background: rgba(255, 201, 113, 0.1);
            border-radius: 12px;
            padding: 1.15rem 1.25rem;
            margin-top: 1.75rem;
            border-left: 4px solid var(--gold);
            text-align: left;
        }
        .info-box p {
            margin: 0;
            font-size: 0.9rem;
            color: var(--text);
            line-height: 1.55;
            opacity: 0.92;
        }
    </style>
</head>
<body>
    <div class="container px-3">
        <div class="thank-you-container">
            <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo-hero" width="280" height="auto">
            <span class="badge-campanha">Recomenday / 2026</span>

            <div class="success-icon" aria-hidden="true">
                <i class="bi bi-check-circle-fill"></i>
            </div>

            <h1>Indicação recebida</h1>

            <p class="description">
                Obrigado pelo cadastro. A indicação foi registrada com sucesso — prossiga com o encaminhamento deste lead no seu fluxo como assessor.
            </p>

            <div class="actions">
                <a href="{{ url('/recomenday-2026') }}" class="btn-primary-av">
                    <i class="bi bi-person-plus-fill" aria-hidden="true"></i>
                    Cadastrar novo lead
                </a>
                <a href="{{ url('/recomenday-2026') }}" class="btn-ghost">Voltar à página da campanha</a>
            </div>

            <div class="info-box">
                <p>
                    <i class="bi bi-info-circle me-1" aria-hidden="true"></i>
                    Você pode enviar quantas indicações precisar: cada envio é registrado separadamente.
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21698044.js"></script>
</body>
</html>
