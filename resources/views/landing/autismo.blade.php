<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Autismo & Medicina | AltaVista Investimentos</title>
    <link rel="icon" type="image/png" href="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png">
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
        body { font-family: 'GT America', Arial, sans-serif; background: #f5f7fa; }
        .main-navbar { background: transparent; }
        .main-navbar .nav-link, .main-navbar .navbar-brand { color: #fff !important; font-weight: 500; }
        .main-navbar .nav-link:hover { color: #d4af37 !important; }
        .btn-gold { background: #d4af37; color: #16213e; font-weight: 700; border: none; }
        .btn-gold:hover { background: #bfa133; color: #fff; }
        .hero-split {
            min-height: 60vh;
            display: flex;
            flex-wrap: wrap;
        }
        .hero-left {
            background: url('https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center/cover no-repeat;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            min-height: 400px;
        }
        .hero-left::before {
            content: '';
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            background: rgba(22,33,62,0.55);
        }
        .hero-content-inspire {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 3rem 2rem;
            width: 100%;
        }
        .hero-content-inspire h1 {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.1;
            color: #fff;
            text-shadow: 0 2px 16px rgba(22,33,62,0.25);
        }
        .hero-content-inspire p {
            font-size: 1.25rem;
            color: #e0e6ed;
            margin: 1.5rem 0 2rem 0;
        }
        .hero-content-inspire .btn-gold {
            font-size: 1.1rem;
            padding: 0.75rem 2.5rem;
            border-radius: 32px;
            box-shadow: 0 2px 16px rgba(22,33,62,0.10);
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
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(22,33,62,0.08);
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
            color: #16213e;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .lead-section .form-label { color: #16213e; font-weight: 500; }
        .lead-section .form-control:focus { border-color: #d4af37; box-shadow: 0 0 0 0.2rem rgba(212,175,55,.15); }
        .benefits-section {
            background: #16213e;
            color: #fff;
            padding: 3rem 0 2rem 0;
        }
        .benefit-icon {
            font-size: 2.5rem;
            color: #d4af37;
            margin-bottom: 1rem;
        }
        .benefit-title {
            font-weight: 600;
            color: #fff;
        }
        .benefit-desc {
            color: #e0e6ed;
        }
        @media (max-width: 991px) {
            .hero-split { flex-direction: column; }
            .hero-left, .hero-right { min-height: 220px; }
            .hero-content-inspire { padding: 2rem 1rem; }
            .logo-img { max-width: 220px; }
        }
    </style>
</head>
<body>
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <!-- Logo removido conforme solicitado -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            </div>
        </div>
    </nav>
    <!-- Hero Split Section -->
    <section class="hero-split">
        <div class="col-12 col-md-12 hero-left">
            <div class="hero-content-inspire">
                <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="AltaVista Logo" class="mb-4" style="max-width:480px; width:100%;">
                <br><br><h1>Evento Autismo & Medicina<br><span style="color:#d4af37">Planejamento Financeiro para Médicos</span></h1>
                <p>Participe de um encontro exclusivo para médicos, com foco em autismo e finanças.<br>Descubra como organizar seu patrimônio e planejar o futuro, com especialistas em investimentos para profissionais da saúde.</p>
                <a href="#leadform" class="btn btn-gold">Quero meu planejamento</a>
            </div>
        </div>
    </section>
    <!-- Lead Capture Section -->
    <section class="lead-section shadow-lg" id="leadform">
        <h2 class="text-center mb-3">Solicite seu Planejamento Financeiro</h2>
        <p class="text-center mb-4" style="color:#555;">Preencha o formulário e um especialista entrará em contato para ajudar você a conquistar seus objetivos financeiros.</p>
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
                            <span style="font-size:2rem; color:#d4af37; margin-right: 1rem; margin-top: 0.2rem;">🔍</span>
                            <div>
                                <div style="font-weight:600; color:#16213e; font-size:1.2rem;">Planejamento Financeiro Individual</div>
                                <div style="color:#444; font-size:1.08rem; line-height:1.6;">Receba uma análise personalizada do seu perfil, objetivos e momento de vida, com um plano estratégico para o seu futuro financeiro, considerando os desafios da carreira médica e o contexto do autismo.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <span style="font-size:2rem; color:#d4af37; margin-right: 1rem; margin-top: 0.2rem;">🧩</span>
                            <div>
                                <div style="font-weight:600; color:#16213e; font-size:1.2rem;">Atenção ao contexto do autismo</div>
                                <div style="color:#444; font-size:1.08rem; line-height:1.6;">Entendemos a importância do cuidado e da inclusão. Oferecemos soluções financeiras que respeitam as necessidades de médicos e famílias envolvidas com o autismo.</div>
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
                    <div class="benefit-desc">Estratégias para aumentar seu patrimônio de forma segura, considerando a realidade do médico e o impacto social do autismo.</div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="benefit-icon"><i class="bi bi-shield-check"></i></div>
                    <div class="benefit-title mb-2">Proteção e Tradição</div>
                    <div class="benefit-desc">Equipe certificada CFP® e experiência reconhecida no mercado financeiro, com foco em profissionais da saúde e causas sociais.</div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="benefit-icon"><i class="bi bi-person-heart"></i></div>
                    <div class="benefit-title mb-2">Atenção Personalizada</div>
                    <div class="benefit-desc">Acompanhamento próximo e soluções sob medida para cada fase da sua carreira médica e para famílias envolvidas com o autismo.</div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container py-4">
        <small style="color:#888; font-size:0.95rem; line-height:1.5; display:block; text-align:justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 (“Sociedade”), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. (“XP”) e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>
    <!-- Bootstrap JS e ícones -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html> 