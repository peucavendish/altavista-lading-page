<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Você ganhou o curso Inteligência em Investimentos — parceria ESPM e Alta Vista Investimentos.">
    <title>Inteligência em Investimentos | Alta Vista Investimentos</title>
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
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body { font-family: 'GT America', Arial, sans-serif; background: var(--navy); }
        .hero-split {
            min-height: 44vh;
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
            min-height: 360px;
            width: 100vw;
        }
        .hero-left::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(0, 24, 69, 0.72) 0%, rgba(0, 24, 69, 0.52) 55%, rgba(0, 24, 69, 0.38) 100%);
        }
        .hero-content-inspire {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 3rem 1.75rem 4.25rem;
            width: 100%;
            max-width: 46rem;
            margin: 0 auto;
        }
        .hero-content-inspire h1 {
            font-size: 2.6rem;
            font-weight: 800;
            line-height: 1.15;
            color: #EBEDF2;
            text-shadow: 0 2px 16px rgba(0, 24, 69, 0.25);
            letter-spacing: -0.5px;
            margin: 0 0 1.5rem;
        }
        .hero-content-inspire h1 span { color: var(--gold); }
        .hero-content-inspire .lede {
            font-size: 1.0625rem;
            line-height: 1.75;
            color: #EBEDF2;
            opacity: 0.95;
            margin: 0 auto 0;
            max-width: 34rem;
            letter-spacing: 0.01em;
        }
        .trust-bar {
            margin-top: 2.75rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.18);
        }
        .trust-bar .partner-label {
            display: block;
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: rgba(235, 237, 242, 0.58);
            margin-bottom: 1.25rem;
        }
        .trust-logos {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 2.25rem 3.5rem;
        }
        .logo-av { max-width: 220px; width: 100%; height: auto; }
        .logo-espm {
            max-height: 56px;
            max-width: 120px;
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 4px;
        }
        @media (max-width: 576px) {
            .hero-content-inspire { padding: 2.5rem 1.25rem 3.5rem; }
            .hero-content-inspire h1 { font-size: 1.85rem; }
            .trust-bar { margin-top: 2.25rem; padding-top: 1.75rem; }
            .trust-logos { flex-direction: column; gap: 1.5rem; }
        }

        .lead-section {
            background: #EBEDF2;
            border-radius: 24px;
            box-shadow: 0 18px 48px rgba(12, 24, 64, 0.14);
            margin-top: -28px;
            margin-bottom: 4.5rem;
            margin-left: auto;
            margin-right: auto;
            padding: 3.25rem 2.75rem 3.5rem;
            max-width: 720px;
            width: calc(100% - 2.5rem);
            position: relative;
            z-index: 3;
            border: 1px solid rgba(0, 24, 69, 0.06);
        }
        .form-intro { margin-bottom: 2.25rem; }
        .heading-accent { color: var(--ink); font-weight: 800; letter-spacing: -0.3px; }
        .heading-accent::after { content: ''; display: block; width: 56px; height: 3px; background: var(--gold); border-radius: 3px; margin-top: 0.45rem; }
        .text-center.heading-accent::after { margin-left: auto; margin-right: auto; }
        .hubspot-form-wrap {
            text-align: left;
            max-width: 100%;
        }
        .hubspot-form-wrap .hs-form-field { margin-bottom: 1.35rem; }
        @media (max-width: 991px) {
            .lead-section {
                padding: 2.5rem 1.5rem 2.75rem;
                width: calc(100% - 2rem);
            }
        }
    </style>
</head>
<body>
    <section class="hero-split">
        <div class="col-12 hero-left">
            <div class="hero-content-inspire">
                <h1>Você ganhou o curso <span>Inteligência em Investimentos</span></h1>
                <p class="lede mb-0">Neste curso você aprenderá os verdadeiros princípios que devem permear suas decisões ao longo dos anos no mercado financeiro.</p>
                <div class="trust-bar">
                    <span class="partner-label">Parceria</span>
                    <div class="trust-logos">
                        <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo-av" width="240" height="55">
                        <img src="/img/espm.jpg" alt="ESPM" class="logo-espm" width="140" height="50">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lead-section">
        <div class="container-fluid px-0">
            <div class="form-intro">
                <h2 class="text-center mb-3 heading-accent">Garanta seu acesso</h2>
                <p class="text-center mb-0 mx-auto" style="color: #5c6573; max-width: 22rem; line-height: 1.55;">Preencha o cadastro abaixo para receber as informações do curso.</p>
            </div>
            <div id="hubspot-form-espm" class="hubspot-form-wrap"></div>
        </div>
    </section>

    <footer class="container py-5 px-4">
        <small style="color: #fff; font-size: 0.95rem; line-height: 1.5; display: block; text-align: justify;">
            A ALTA VISTA INVESTIMENTOS – ASSESSOR DE INVESTIMENTO LTDA, inscrita sob o CNPJ 09.436.110/0001-75 é uma empresa de Assessoria de Investimento devidamente registrada na Comissão de Valores Mobiliários na forma da Resolução CVM 178/23 ("Sociedade"), que mantém contrato de distribuição de produtos financeiros com a XP Investimentos Corretora de Câmbio, Títulos e Valores Mobiliários S.A. ("XP") e pode, por conta e ordem dos seus clientes, operar no mercado de capitais segundo a legislação vigente. Na forma da legislação da CVM, o Assessor de Investimento não pode administrar ou gerir o patrimônio de investidores. O investimento em ações é um investimento de risco e rentabilidade passada não é garantia de rentabilidade futura. Na realização de operações com derivativos existe a possibilidade de perdas superiores aos valores investidos, podendo resultar em significativas perdas patrimoniais. A Sociedade poderá exercer atividades complementares relacionadas aos mercados financeiro, securitário, de previdência e capitalização, desde que não conflitem com a atividade de assessoria de investimentos, podendo ser realizada por meio da pessoa jurídica acima descrita ou por meio de pessoa jurídica terceira. Todas as atividades são prestadas mantendo a devida segregação e em cumprimento ao quanto previsto nas regras da CVM ou de outros órgãos reguladores e autorreguladores. Benefício educacional em parceria com a ESPM, sem implicação de recomendação de investimentos por parte da instituição de ensino. Para informações e dúvidas sobre produtos, contate seu assessor de investimentos. Para reclamações, contate a Ouvidoria da XP pelo telefone 0800 722 3730.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21698044.js"></script>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script type="text/javascript">
        hbspt.forms.create({
            region: 'na1',
            portalId: '21698044',
            formId: '069841f6-e4ea-4779-920d-9771749ea429',
            target: '#hubspot-form-espm',
            onFormSubmitted: function () {
                window.location.href = @json(url('/espm-inteligencia-investimentos/obrigado'));
            }
        });
    </script>
</body>
</html>
