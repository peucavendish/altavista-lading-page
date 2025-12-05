<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Parceria Alta Vista & Palova Amisses | Investimentos</title>
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
                        <img src="/img/palova.png" alt="Palova Amisses Logo" style="max-height:100px; width:auto; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));">
                    </div>
                </div>
                <div class="partnership-badge">🤝 Parceria Estratégica</div>
                <h1>Cadastro de <span>Leads</span></h1>
                <p class="mb-0">Ferramenta exclusiva para advogados da Palova Amisses cadastrarem leads interessados em investimentos da Alta Vista.</p>
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
                Esta página foi desenvolvida exclusivamente para os advogados da <strong>Palova Amisses</strong> cadastrarem leads interessados em serviços de investimento da <strong>Alta Vista</strong>. 
                Quando você identificar um cliente ou contato interessado em investimentos, preencha o formulário abaixo com os dados do lead. 
                Os dados serão enviados automaticamente para a Alta Vista, que entrará em contato com o interessado para oferecer os serviços de assessoria de investimentos.
            </p>
        </div>
    </section>

    <!-- Formulário de Cadastro de Lead -->
    <section class="container">
        <div class="lead-section">
            <h2 class="text-center mb-3 heading-accent">Cadastrar Novo Lead</h2>
            <p class="text-center mb-4" style="color:#666; font-size:1.05rem;">Preencha os dados do lead interessado em investimentos. Os dados serão enviados para a Alta Vista que entrará em contato.</p>
            
            <form id="parceria-form">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo do Lead *</label>
                    <input type="text" class="form-control" id="nome" name="name" placeholder="Digite o nome completo do interessado" required>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone do Lead *</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email do Lead *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aceite_termos" name="aceite_termos" required>
                        <label class="form-check-label" for="aceite_termos" style="font-size: 0.95rem; line-height: 1.6;">
                            Eu aceito a <a href="/politica-privacidade" target="_blank" style="color: var(--ink); text-decoration: underline; font-weight: 600;" title="Abrir Política de Privacidade em nova aba">Política de Privacidade</a> <i class="bi bi-box-arrow-up-right" style="font-size: 0.75rem; color: var(--ink);"></i> e os <a href="/termos-condicoes" target="_blank" style="color: var(--ink); text-decoration: underline; font-weight: 600;" title="Abrir Termos e Condições em nova aba">Termos e Condições de Uso</a> <i class="bi bi-box-arrow-up-right" style="font-size: 0.75rem; color: var(--ink);"></i> da Alta Vista Investimentos. *
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-submit">
                    <i class="bi bi-send-check me-2"></i>
                    Cadastrar Lead
                </button>
            </form>
        </div>
    </section>

    <footer class="container py-4">
        <small style="color:#fff; font-size:0.95rem; line-height:1.5; display:block; text-align:justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21698044.js"></script>
    <!-- End of HubSpot Embed Code -->
    
    <script>
        // Máscara para telefone
        document.getElementById('telefone').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                if (value.length <= 10) {
                    value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
                } else {
                    value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
                }
                e.target.value = value;
            }
        });

        // Processar envio do formulário
        document.getElementById('parceria-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitButton = e.target.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Desabilitar botão e mostrar loading
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Cadastrando lead...';
            
            // Coletar dados do formulário
            const nome = document.getElementById('nome').value;
            const telefone = document.getElementById('telefone').value;
            const email = document.getElementById('email').value;
            const aceiteTermos = document.getElementById('aceite_termos').checked;

            // Verificar se todos os campos foram preenchidos
            if (!nome || !telefone || !email || !aceiteTermos) {
                alert('Por favor, preencha todos os campos obrigatórios e aceite os termos e condições.');
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
                return;
            }

            // Log dos dados coletados para debug
            console.log('Dados do formulário:', {
                nome: nome,
                telefone: telefone,
                email: email,
                aceite_termos: aceiteTermos
            });

            // Obter token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
                             document.querySelector('input[name="_token"]')?.value;

            if (!csrfToken) {
                alert('Erro: Token CSRF não encontrado. Por favor, recarregue a página.');
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
                return;
            }

            // Criar FormData para enviar
            const formData = new FormData();
            formData.append('_token', csrfToken);
            formData.append('name', nome);
            formData.append('telefone', telefone);
            formData.append('email', email);
            formData.append('aceite_termos', aceiteTermos ? '1' : '0');

            // Enviar dados via fetch
            fetch('/palova-amisses', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                return response.json().then(err => {
                    throw new Error(err.message || 'Erro ao enviar formulário');
                });
            })
            .then(data => {
                console.log('Resposta do servidor:', data);
                // Sucesso - mostrar mensagem e redirecionar
                alert('Lead cadastrado com sucesso! Os dados foram enviados para a Alta Vista.');
                window.location.href = '/obrigado';
            })
            .catch(error => {
                console.error('Erro ao enviar:', error);
                alert('Erro ao enviar formulário: ' + error.message + '. Tente novamente.');
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            });
        });
    </script>
</body>
</html>

