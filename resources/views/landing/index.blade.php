<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AltaVista Investimentos - Evento Nocke</title>
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
        body { font-family: 'GT America', Arial, sans-serif; background: #001845; }
        .top-bar { background: #16213e; color: #fff; font-size: 0.95rem; }
        .main-navbar { background: transparent; }
        .main-navbar .nav-link, .main-navbar .navbar-brand { color: #EBEDF2 !important; font-weight: 500; }
        .main-navbar .nav-link:hover { color: #FFC971 !important; }
        .btn-gold { background: #FFC971; color: #001845; font-weight: 700; border: none; }
        .btn-gold:hover { background: #886B25; color: #fff; }
        .hero-split {
            min-height: 60vh;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0;
        }
        .hero-left {
            background: url('https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center/cover no-repeat;
            color: #EBEDF2;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            min-height: 400px;
            width: 100vw;
            margin-top: 0;
            padding-top: 0;
        }
        .hero-left::before {
            content: '';
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            background: rgba(0,24,69,0.65);
        }
        .hero-content-inspire {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 3rem 2rem 2rem 2rem;
            width: 100%;
        }
        .hero-content-inspire h1 {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.1;
            color: #EBEDF2;
            text-shadow: 0 2px 16px rgba(0,24,69,0.25);
        }
        .hero-content-inspire h1 span {
            color: #FFC971;
        }
        .hero-content-inspire p {
            font-size: 1.25rem;
            color: #EBEDF2;
            margin: 1.5rem 0 2rem 0;
        }
        .hero-content-inspire .btn-gold {
            font-size: 1.1rem;
            padding: 0.75rem 2.5rem;
            border-radius: 32px;
            box-shadow: 0 2px 16px rgba(0,24,69,0.10);
            margin-bottom: 2.5rem;
        }
        .hero-right {
            background: #16213e;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 400px;
            position: relative;
        }
        .logo-img {
            max-width: 340px;
            width: 100%;
        }
        .lead-section {
            background: #EBEDF2;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,24,69,0.08);
            margin-top: -60px;
            margin-bottom: 40px;
            padding: 2.5rem 2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 3;
        }
        .lead-section h2 {
            color: #001845;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .lead-section .form-label { color: #001845; font-weight: 500; }
        .lead-section .form-control:focus { border-color: #FFC971; box-shadow: 0 0 0 0.2rem rgba(255,201,113,.15); }
        .benefits-section {
            background: #001845;
            color: #EBEDF2;
            padding: 3rem 0 2rem 0;
        }
        .benefit-icon {
            font-size: 2.5rem;
            color: #FFC971;
            margin-bottom: 1rem;
        }
        .benefit-title {
            font-weight: 600;
            color: #EBEDF2;
        }
        .benefit-desc {
            color: #EBEDF2;
        }
        a { color: #0466C8; }
        a:hover { color: #FFC971; }
        @media (max-width: 991px) {
            .hero-split { flex-direction: column; }
            .hero-left, .hero-right { min-height: 220px; }
            .hero-content-inspire { padding: 1.5rem 1rem 2.5rem 1rem; }
            .logo-img { max-width: 220px; }
        }
    </style>
</head>
<body>
    <!-- Hero Split Section -->
    <section class="hero-split">
        <div class="col-12 col-md-12 hero-left">
            <div class="hero-content-inspire">
                <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="AltaVista Logo" class="logo-img mb-4" style="max-width:480px; width:100%; margin-top:2.5rem; margin-bottom:2.5rem;">
                <h1 class="mt-4">Planejamento Financeiro para<br><span style="color:#d4af37">Médicos Nocke</span></h1>
                <p>Como médico que utiliza o aplicativo Nocke, você tem direito a um planejamento financeiro exclusivo e personalizado para otimizar seus investimentos e alcançar seus objetivos financeiros.</p>
                <a href="#leadform" class="btn btn-gold">Quero meu planejamento financeiro gratuito</a>
            </div>
        </div>

    </section>
    <!-- Lead Capture Section -->
    <section class="lead-section shadow-lg" id="leadform">
        <h2 class="text-center mb-3">Solicite seu Planejamento Financeiro Gratuito</h2>
        <p class="text-center mb-4" style="color:#555;">Como usuário do aplicativo Nocke, você tem direito a um planejamento financeiro personalizado. Preencha o formulário e um especialista em investimentos entrará em contato para criar seu plano financeiro gratuito.</p>
        <div id="hubspot-form"></div>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            portalId: "21698044",
            formId: "23ecd350-c12a-42d2-bb01-aa04d2e1aa63",
            region: "na1",
            target: "#hubspot-form"
          });
        </script>
    </section>
    <!-- O que você vai receber Section -->
    <section class="py-5" style="background: #f5f7fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="p-4 rounded-4 shadow-sm bg-white border-0">
                        <div class="d-flex align-items-center mb-4">
                            <h3 class="mb-0" style="color:#16213e; font-weight:700; font-size:2rem; letter-spacing:-1px; border-bottom:2px solid #d4af37; display:inline-block; padding-bottom:0.2rem;">O que você vai receber</h3>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <span style="font-size:2rem; color:#d4af37; margin-right: 1rem; margin-top: 0.2rem;">📊</span>
                            <div>
                                <div style="font-weight:600; color:#16213e; font-size:1.2rem;">Planejamento Financeiro Gratuito</div>
                                <div style="color:#444; font-size:1.08rem; line-height:1.6;">Como médico usuário do Nocke, você receberá uma análise completa do seu perfil, objetivos e momento de carreira médica para criar um plano financeiro estratégico personalizado.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <span style="font-size:2rem; color:#d4af37; margin-right: 1rem; margin-top: 0.2rem;">🎯</span>
                            <div>
                                <div style="font-weight:600; color:#16213e; font-size:1.2rem;">Benefício Exclusivo Nocke</div>
                                <div style="color:#444; font-size:1.08rem; line-height:1.6;">Soluções financeiras adaptadas à sua realidade profissional, incluindo gestão de consultório, investimentos para aposentadoria e proteção patrimonial - tudo gratuito para usuários Nocke.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="benefit-icon"><i class="bi bi-graph-up-arrow"></i></div>
                    <div class="benefit-title mb-2">Crescimento Patrimonial</div>
                    <div class="benefit-desc">Estratégias personalizadas para aumentar seu patrimônio de forma segura, considerando a realidade dos médicos e suas necessidades específicas.</div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="benefit-icon"><i class="bi bi-shield-check"></i></div>
                    <div class="benefit-title mb-2">Proteção e Tradição</div>
                    <div class="benefit-desc">Equipe certificada CFP® e experiência reconhecida no mercado financeiro, com foco em profissionais da área da saúde.</div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="benefit-icon"><i class="bi bi-person-heart"></i></div>
                    <div class="benefit-title mb-2">Atenção Personalizada</div>
                    <div class="benefit-desc">Acompanhamento próximo e soluções sob medida para cada fase da sua carreira médica.</div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container py-4">
        <small style="color:#fff; font-size:0.95rem; line-height:1.5; display:block; text-align:justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>
    <!-- Bootstrap JS e ícones -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
