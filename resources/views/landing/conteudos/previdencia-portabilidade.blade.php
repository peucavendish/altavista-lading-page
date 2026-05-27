<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Portabilidade de previdência para a XP: escolha entre Investback ou Pontos XP a cada R$ 100 mil transferidos.">
    <title>Portabilidade de Previdência XP | Alta Vista</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root {
            --navy: #001845;
            --ink: #16213e;
            --gold: #FFC971;
            --card: #f5f7fc;
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body { font-family: 'GT America', Arial, sans-serif; background: var(--navy); }
        .hero-split { min-height: 46vh; display: flex; flex-wrap: wrap; margin-top: 0; }
        .hero-left {
            background: linear-gradient(0deg, rgba(0,24,69,0.75) 0%, rgba(0,24,69,0.55) 60%, rgba(0,24,69,0.4) 100%),
                        url('https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg?auto=compress&cs=tinysrgb&w=1400') center center/cover no-repeat;
            color: #EBEDF2; display: flex; align-items: center; justify-content: center; min-height: 360px; width: 100vw;
        }
        .hero-content-inspire { text-align: center; padding: 2.25rem 1.25rem; width: 100%; }
        .hero-content-inspire h1 { font-size: 2.4rem; font-weight: 800; line-height: 1.15; color: #EBEDF2; text-shadow: 0 2px 16px rgba(0,24,69,0.25); letter-spacing: -0.5px; max-width: 900px; margin: 0 auto; }
        .hero-content-inspire h1 span { color: var(--gold); }

        .lead-section {
            background:
                radial-gradient(circle at 0% 0%, rgba(255, 201, 113, .22), transparent 35%),
                radial-gradient(circle at 100% 100%, rgba(0, 24, 69, .12), transparent 45%),
                #EBEDF2;
            border-radius: 22px; box-shadow: 0 14px 40px rgba(12, 24, 64, 0.18);
            margin-top: -42px; margin-bottom: 56px; padding: 2.5rem 2rem; max-width: 1120px;
            margin-left: auto; margin-right: auto; position: relative; z-index: 3; border: 1px solid rgba(0,24,69,0.08);
        }
        .panel { background: var(--card); border: 1px solid rgba(12, 24, 64, 0.10); border-radius: 16px; padding: 1.25rem 1.25rem; box-shadow: inset 0 1px 0 rgba(255,255,255,0.35); }
        .full-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            align-items: stretch;
            grid-auto-rows: 1fr;
        }
        .full-grid > .panel {
            width: 100%;
            min-width: 0;
            height: 100%;
            display: grid;
        }
        .left-grid { display: grid; grid-template-rows: auto auto auto auto 1fr; gap: .85rem; height: 100%; width: 100%; }
        .right-grid { display: grid; grid-template-rows: auto auto 1fr; gap: .85rem; height: 100%; width: 100%; }
        .heading-accent { color: var(--ink); font-weight: 800; letter-spacing: -0.3px; font-size: 1.45rem; }
        .heading-accent::after { content: ''; display: block; width: 56px; height: 3px; background: var(--gold); border-radius: 3px; margin-top: .45rem; }

        .benefits-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: .75rem; }
        .benefit-card {
            border-radius: 14px;
            padding: 1rem .85rem;
            text-align: center;
            border: 1px solid rgba(12,24,64,.12);
        }
        .benefit-card.investback {
            background: linear-gradient(135deg, #fff6e4 0%, #fff 100%);
            border-color: rgba(201,162,39,.34);
        }
        .benefit-card.pontos {
            background: linear-gradient(135deg, #e9f2ff 0%, #fff 100%);
            border-color: rgba(0,24,69,.2);
        }
        .benefit-label { display: block; color: #5b6473; font-size: .78rem; line-height: 1.35; margin-bottom: .35rem; text-transform: uppercase; letter-spacing: .04em; font-weight: 600; }
        .benefit-value { display: block; color: var(--ink); font-weight: 800; font-size: 1.65rem; line-height: 1.1; }
        .benefit-desc { display: block; color: #5b6473; font-size: .82rem; line-height: 1.4; margin-top: .35rem; }

        .info-block {
            background: #fff;
            border: 1px solid rgba(12,24,64,.12);
            border-radius: 12px;
            padding: .85rem .9rem;
        }
        .info-block.accent {
            background: linear-gradient(135deg, #f0f6ff 0%, #fff 100%);
            border-color: rgba(0,24,69,.18);
        }
        .info-block.highlight {
            background: linear-gradient(135deg, #fffaf0 0%, #fff 100%);
            border-color: rgba(201,162,39,.28);
        }

        .section-title { color: var(--ink); font-weight: 700; font-size: 1.02rem; margin-bottom: .45rem; }
        .campaign-list { color: #2b2f3c; padding-left: 1.15rem; margin-bottom: 0; }
        .campaign-list li { margin-bottom: .5rem; line-height: 1.6; }
        .campaign-list li::marker { color: #d4af37; }

        .quote-block {
            color: var(--ink);
            font-size: 1rem;
            line-height: 1.65;
            margin: 0;
        }
        .quote-block strong { color: var(--navy); }

        .steps-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: .6rem; }
        .step-card {
            border: 1px solid rgba(12,24,64,.12);
            border-radius: 11px;
            padding: .7rem .6rem;
            text-align: center;
            color: #2b2f3c;
        }
        .step-card:nth-child(1) { background: linear-gradient(135deg, #fffaf0 0%, #fff 100%); }
        .step-card:nth-child(2) { background: linear-gradient(135deg, #f2f8ff 0%, #fff 100%); }
        .step-card:nth-child(3) { background: linear-gradient(135deg, #f2fff8 0%, #fff 100%); }
        .step-card .num {
            width: 22px; height: 22px; border-radius: 999px; display: inline-flex; align-items: center; justify-content: center;
            background: rgba(255,201,113,.35); color: var(--ink); font-size: .75rem; font-weight: 700; margin-bottom: .35rem;
        }
        .step-card p { font-size: .78rem; margin: 0; line-height: 1.45; }

        .form-header-strip {
            background: linear-gradient(90deg, #f7e6b9 0%, #ffd788 100%);
            border: 1px solid rgba(201,162,39,.35);
            border-radius: 12px;
            padding: .65rem .7rem;
            color: var(--ink);
            font-weight: 700;
            font-size: .84rem;
            text-align: center;
        }
        .form-helper {
            background: #fff;
            border: 1px dashed rgba(12,24,64,.2);
            border-radius: 10px;
            padding: .55rem .7rem;
            color: #5a6474;
            font-size: .82rem;
            line-height: 1.5;
        }

        #hubspot-form-container {
            background: #fff;
            border: 1px solid rgba(12,24,64,.12);
            border-radius: 14px;
            padding: .85rem .85rem .2rem;
        }
        .hs-form-frame { background: transparent !important; border: 0 !important; }
        .hs-form-frame .hs-form label { color: var(--ink) !important; font-weight: 700 !important; }
        .hs-form-frame .hs-form input,
        .hs-form-frame .hs-form select,
        .hs-form-frame .hs-form textarea {
            border: 1px solid rgba(12,24,64,.18) !important;
            border-radius: 8px !important;
            padding: .72rem .9rem !important;
            font-size: .96rem !important;
        }
        .hs-form-frame .hs-form input:focus,
        .hs-form-frame .hs-form select:focus,
        .hs-form-frame .hs-form textarea:focus {
            border-color: var(--gold) !important;
            box-shadow: 0 0 0 0.2rem rgba(255,201,113,.15) !important;
            outline: none !important;
        }
        .hs-form-frame .hs-form .hs-button {
            background: var(--gold) !important;
            color: var(--navy) !important;
            border: 0 !important;
            border-radius: 30px !important;
            width: 100% !important;
            padding: .8rem 1.2rem !important;
            font-weight: 700 !important;
        }
        .hs-form-frame .hs-form .hs-button:hover { background: #b3892f !important; color: #fff !important; }

        @media (max-width: 991px) {
            .hero-content-inspire { padding: 1.2rem 1rem 1.6rem; }
            .hero-content-inspire h1 { font-size: 1.95rem; }
            .lead-section { margin: -28px 14px 44px; padding: 1.4rem 1.1rem; }
            .full-grid {
                grid-template-columns: 1fr;
                grid-auto-rows: auto;
            }
            .steps-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 640px) {
            .benefits-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Logo" class="mb-3" style="max-width:380px; width:100%">
                <h1>E se a sua previdência pudesse te devolver <span>dinheiro</span>… ou milhares de <span>pontos no cartão XP</span>?</h1>
            </div>
        </div>
    </section>

    <section class="lead-section">
        <div class="container-fluid">
            <div class="full-grid">
                <div class="panel h-100">
                    <div class="left-grid">
                        <h2 class="mb-3 heading-accent">Portabilidade de previdência para a XP</h2>

                        <div class="info-block accent">
                            <p class="mb-2" style="color:#2b2f3c; line-height:1.65; margin-bottom:.5rem;">Na portabilidade de previdência para a XP, <strong>a cada R$ 100 mil transferidos</strong>, você escolhe entre:</p>
                            <div class="benefits-grid">
                                <div class="benefit-card investback">
                                    <span class="benefit-label">Opção 1</span>
                                    <span class="benefit-value">R$ 300</span>
                                    <span class="benefit-desc">de Investback</span>
                                </div>
                                <div class="benefit-card pontos">
                                    <span class="benefit-label">Opção 2</span>
                                    <span class="benefit-value">10 mil</span>
                                    <span class="benefit-desc">Pontos XP</span>
                                </div>
                            </div>
                        </div>

                        <div class="info-block highlight">
                            <div class="section-title">Agora eu te faço uma pergunta:</div>
                            <p class="quote-block mb-0">
                                Por que continuar com uma previdência parada no banco…
                                pagando taxas altas,
                                em fundos muitas vezes ineficientes…
                                <strong>sem ganhar nada por isso?</strong>
                            </p>
                        </div>

                        <div class="info-block">
                            <div class="section-title">Como funciona</div>
                            <div class="steps-grid">
                                <div class="step-card"><span class="num">1</span><p>Você preenche o formulário</p></div>
                                <div class="step-card"><span class="num">2</span><p>Nossa equipe analisa sua previdência</p></div>
                                <div class="step-card"><span class="num">3</span><p>Recebe uma análise estratégica</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel h-100">
                    <div class="right-grid">
                        <h2 class="mb-3 heading-accent">Quero analisar minha previdência</h2>
                        <div class="form-header-strip">Análise estratégica da sua previdência atual</div>
                        <div class="form-helper">Clique no botão abaixo, preencha seus dados e receba uma análise estratégica da sua previdência atual.</div>

                        <div id="hubspot-form-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="container py-4">
        <small style="color:#fff; font-size:0.95rem; line-height:1.5; display:block; text-align:justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
      hbspt.forms.create({
        portalId: "21698044",
        formId: "73b7e640-9dc6-4074-8031-8ef02462d7a9",
        region: "na1",
        target: "#hubspot-form-container"
      });
    </script>
</body>
</html>
