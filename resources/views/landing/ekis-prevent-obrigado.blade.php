<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Cadastrado - Parceria Alta Vista & Ekis Prevent</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body { 
            font-family: 'GT America', Arial, sans-serif; 
            background: #001845;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .thank-you-container {
            background: #16213e;
            border-radius: 20px;
            padding: 3rem;
            color: #EBEDF2;
            text-align: center;
            max-width: 800px;
            margin: 2rem auto;
            box-shadow: 0 8px 40px rgba(0,0,0,0.3);
        }
        .logos-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
        .logo-img {
            max-width: 250px;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
        }
        .logo-divider {
            color: #FFC971;
            font-size: 2rem;
            font-weight: 300;
        }
        h1 {
            color: #FFC971;
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 2.5rem;
        }
        .success-icon {
            font-size: 4rem;
            color: #FFC971;
            margin-bottom: 1.5rem;
            animation: scaleIn 0.5s ease-out;
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
        .btn-primary {
            background: linear-gradient(135deg, #FFC971 0%, #ffd89b 100%);
            color: #001845;
            font-weight: 700;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 2rem;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 6px 20px rgba(255,201,113,0.4);
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #b3892f 0%, #d4a574 100%);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255,201,113,0.5);
        }
        .description {
            font-size: 1.15rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
            color: #EBEDF2;
        }
        .info-box {
            background: rgba(255,201,113,0.1);
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 2rem;
            border-left: 4px solid #FFC971;
        }
        .info-box p {
            margin: 0;
            font-size: 0.95rem;
            color: #EBEDF2;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="thank-you-container">
            <div class="logos-container">
            <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Logo" class="logo-img">
                <div class="logo-divider">+</div>
                <img src="/img/ekis_prevent_logo.jpeg" alt="Ekis Prevent Logo" class="logo-img" style="max-height: 100px;">
            </div>
            
            <div class="success-icon">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            
            <h1>Lead Cadastrado com Sucesso!</h1>
            
            <p class="description">
                Obrigado por utilizar nossa ferramenta de cadastro. Os dados do lead foram enviados com sucesso para a <strong>Alta Vista Investimentos</strong>.
            </p>
            
            <p class="description">
                A equipe da Alta Vista entrará em contato com o interessado em breve para oferecer os serviços de assessoria de investimentos.
            </p>
            
            <a href="/ekis-prevent" class="btn-primary">
                <i class="bi bi-plus-circle me-2"></i>
                Cadastrar Outro Lead
            </a>
            
            <div class="info-box">
                <p>
                    <i class="bi bi-info-circle me-2"></i>
                    <strong>Dica:</strong> Você pode cadastrar quantos leads desejar. Cada cadastro será processado e encaminhado automaticamente para a Alta Vista.
                </p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS e ícones -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
