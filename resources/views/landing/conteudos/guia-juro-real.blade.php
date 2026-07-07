@php($obrigadoUrl = url('/guia-juro-real/obrigado'))
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Baixe O Guia do Juro Real — material exclusivo da Alta Vista Investimentos sobre juro real, renda fixa e alocação.">
    <title>O Guia do Juro Real | Alta Vista Investimentos</title>
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
        .hero-split { min-height: auto; display: flex; flex-wrap: wrap; margin-top: 0; }
        .hero-left {
            background: linear-gradient(135deg, rgba(0,24,69,0.96) 0%, rgba(10,22,40,0.92) 100%),
                        url('https://images.pexels.com/photos/210607/pexels-photo-210607.jpeg?auto=compress&cs=tinysrgb&w=1400') center center/cover no-repeat;
            color: #EBEDF2;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 340px;
            width: 100vw;
        }
        .hero-content-inspire { text-align: center; padding: 2.75rem 1.25rem 2.25rem; width: 100%; max-width: 900px; }
        .hero-brand {
            display: block;
            width: 100%;
            margin-bottom: 1.25rem;
        }
        .hero-brand img {
            display: block;
            max-width: 380px;
            width: 100%;
            margin: 0 auto;
        }
        .hero-badge-wrap {
            display: flex;
            justify-content: center;
            margin-bottom: 1.15rem;
        }
        .guide-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold) 0%, #ffd89b 100%);
            color: var(--navy);
            padding: 0.45rem 1.1rem;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.72rem;
            letter-spacing: 1.4px;
            text-transform: uppercase;
        }
        .hero-content-inspire h1 {
            font-size: clamp(2rem, 4vw, 2.75rem);
            font-weight: 800;
            line-height: 1.15;
            color: var(--gold);
            letter-spacing: -0.5px;
            margin: 0 0 0.85rem;
        }
        .hero-content-inspire p {
            max-width: 720px;
            margin: 0 auto;
            font-size: 1.05rem;
            line-height: 1.65;
            opacity: 0.95;
        }

        .lead-section {
            background:
                radial-gradient(circle at 0% 0%, rgba(255, 201, 113, .22), transparent 35%),
                radial-gradient(circle at 100% 100%, rgba(0, 24, 69, .12), transparent 45%),
                #EBEDF2;
            border-radius: 22px;
            box-shadow: 0 14px 40px rgba(12, 24, 64, 0.18);
            margin-top: -32px;
            margin-bottom: 48px;
            padding: 2.5rem 2rem;
            max-width: 1120px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 3;
            border: 1px solid rgba(0,24,69,0.08);
        }
        .panel {
            background: var(--card);
            border: 1px solid rgba(12, 24, 64, 0.10);
            border-radius: 16px;
            padding: 1.25rem;
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.35);
            height: 100%;
        }
        .full-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            align-items: stretch;
        }
        .left-grid { display: grid; grid-template-rows: auto auto auto 1fr; gap: .85rem; height: 100%; }
        .right-grid { display: grid; grid-template-rows: auto auto 1fr; gap: .85rem; height: 100%; }
        .heading-accent {
            color: var(--ink);
            font-weight: 800;
            letter-spacing: -0.3px;
            font-size: 1.45rem;
            margin-bottom: 0;
        }
        .heading-accent::after {
            content: '';
            display: block;
            width: 56px;
            height: 3px;
            background: var(--gold);
            border-radius: 3px;
            margin-top: .45rem;
        }
        .pdf-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: linear-gradient(135deg, #fff6e4 0%, #fff 100%);
            border: 1px solid rgba(201,162,39,.34);
            border-radius: 14px;
            padding: 1rem 1.1rem;
        }
        .pdf-card i {
            font-size: 2.5rem;
            color: #b7791f;
            flex-shrink: 0;
        }
        .pdf-card strong { display: block; color: var(--ink); font-size: 1.05rem; margin-bottom: .2rem; }
        .pdf-card span { color: #5b6473; font-size: .88rem; line-height: 1.45; }
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
        .section-title { color: var(--ink); font-weight: 700; font-size: 1.02rem; margin-bottom: .45rem; }
        .campaign-list { color: #2b2f3c; padding-left: 1.15rem; margin-bottom: 0; }
        .campaign-list li { margin-bottom: .5rem; line-height: 1.6; }
        .campaign-list li::marker { color: #d4af37; }
        .steps-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: .6rem; }
        .step-card {
            border: 1px solid rgba(12,24,64,.12);
            border-radius: 11px;
            padding: .7rem .6rem;
            text-align: center;
            color: #2b2f3c;
            background: #fff;
        }
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
        .disclaimer-small {
            color: #718096;
            font-size: .78rem;
            line-height: 1.55;
            margin-top: .75rem;
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
            width: 100% !important;
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
            .hero-content-inspire { padding: 2rem 1rem 1.75rem; }
            .hero-content-inspire h1 { font-size: 1.95rem; }
            .hero-brand img { max-width: 300px; }
            .lead-section { margin: -24px 14px 44px; padding: 1.4rem 1.1rem; }
            .full-grid { grid-template-columns: 1fr; }
            .steps-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <div class="hero-brand">
                    <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos">
                </div>
                <div class="hero-badge-wrap">
                    <span class="guide-badge">Material exclusivo</span>
                </div>
                <h1>O Guia do Juro Real</h1>
                <p class="mb-0">O Brasil segue com um dos juros reais mais elevados do mundo — e isso molda desde a renda fixa até a bolsa e o câmbio. Baixe o guia completo da Alta Vista e entenda o cenário com clareza.</p>
            </div>
        </div>
    </section>

    <section class="lead-section">
        <div class="container-fluid">
            <div class="full-grid">
                <div class="panel h-100">
                    <div class="left-grid">
                        <h2 class="heading-accent">O que você vai encontrar</h2>

                        <div class="pdf-card">
                            <i class="bi bi-file-earmark-pdf"></i>
                            <div>
                                <strong>O Guia do Juro Real</strong>
                                <span>PDF exclusivo · Alta Vista Investimentos</span>
                            </div>
                        </div>

                        <div class="info-block accent">
                            <ul class="campaign-list">
                                <li>O que é juro real e por que o Brasil se destaca no ranking global</li>
                                <li>Selic, inflação, fiscal e o que sustenta juros reais elevados</li>
                                <li>Impacto na curva de juros, Tesouro Direto e renda fixa (CDI, IPCA+, prefixado)</li>
                                <li>Oportunidades táticas vs. riscos de médio prazo na alocação</li>
                                <li>IPCA, perspectivas do Copom e efeito sobre bolsa e câmbio</li>
                            </ul>
                        </div>

                        <div class="info-block">
                            <div class="section-title">Como funciona</div>
                            <div class="steps-grid">
                                <div class="step-card"><span class="num">1</span><p>Preencha o formulário ao lado</p></div>
                                <div class="step-card"><span class="num">2</span><p>Confirme seus dados</p></div>
                                <div class="step-card"><span class="num">3</span><p>Baixe o PDF na hora</p></div>
                            </div>
                        </div>

                        <p class="disclaimer-small mb-0">
                            Investimentos envolvem riscos de mercado, crédito e liquidez. Rentabilidade passada não garante rentabilidade futura. Conteúdo educacional e informativo; não constitui recomendação de investimento.
                        </p>
                    </div>
                </div>

                <div class="panel h-100">
                    <div class="right-grid">
                        <h2 class="heading-accent">Baixar o guia</h2>
                        <div class="form-header-strip">Acesso gratuito ao material</div>
                        <div class="form-helper">Preencha seus dados abaixo. Após enviar, você será direcionado para baixar o PDF.</div>

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
    {{-- Form HubSpot — Guia do Juro Real --}}
    <script>
      hbspt.forms.create({
        portalId: "21698044",
        formId: "872d2e90-b678-4874-9da4-eed0f6f6f98b",
        region: "na1",
        target: "#hubspot-form-container",
        onFormSubmitted: function() {
          window.location.href = @json($obrigadoUrl);
        }
      });
    </script>
</body>
</html>
