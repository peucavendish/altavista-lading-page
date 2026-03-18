<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consórcio Week – Agendamento de reuniões com consultores de consórcio Alta Vista / Univalores.">
    <title>Consórcio Week – Agendamento de Reuniões | Alta Vista</title>

    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #0a1628;
            --navy-soft: #1a2d4a;
            --ink: #2d3748;
            --text: #4a5568;
            --text-muted: #718096;
            --gold: #c9a227;
            --gold-light: #e8d48b;
            --gold-bg: #faf6eb;
            --bg: #f7f8fa;
            --card: #ffffff;
            --border: #e2e8f0;
            --whatsapp: #25d366;
            --whatsapp-hover: #20bd5a;
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        * { scroll-behavior: smooth; box-sizing: border-box; }
        body {
            font-family: 'DM Sans', 'GT America', system-ui, sans-serif;
            background: var(--bg);
            color: var(--ink);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Header strip */
        .top-strip {
            background: linear-gradient(90deg, var(--navy) 0%, var(--navy-soft) 100%);
            padding: 1.25rem 1rem;
            text-align: center;
        }
        .top-strip .logo {
            height: 36px;
            width: auto;
            display: inline-block;
            filter: brightness(0) invert(1);
        }

        /* Hero */
        .hero {
            padding: 2.5rem 1rem 2rem;
            text-align: center;
            background: var(--card);
            border-bottom: 1px solid var(--border);
        }
        .hero .badge {
            display: inline-block;
            background: var(--gold-bg);
            color: var(--gold);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            padding: 0.4rem 1rem;
            border-radius: 100px;
            margin-bottom: 1rem;
        }
        .hero h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 0.75rem;
            letter-spacing: -0.02em;
        }
        .hero h1 .accent { color: var(--gold); }
        .hero .sub {
            font-size: 1rem;
            color: var(--text);
            max-width: 560px;
            margin: 0 auto;
        }

        /* Content */
        .main {
            max-width: 820px;
            margin: 0 auto;
            padding: 2rem 1rem 4rem;
        }

        .section {
            background: var(--card);
            border-radius: 16px;
            padding: 1.75rem 2rem;
            margin-bottom: 1.5rem;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.04);
        }
        .section-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .section-title i { color: var(--gold); }
        .section p, .section ul {
            color: var(--text);
            font-size: 0.95rem;
            margin: 0;
        }
        .section ul { padding-left: 1.25rem; }
        .section li { margin-bottom: 0.35rem; }

        .section.orientacao {
            background: var(--gold-bg);
            border-color: var(--gold-light);
        }

        /* Consultant grid */
        .consultant-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
        }
        .consultant-card {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.25rem;
            text-align: center;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .consultant-card:hover {
            border-color: var(--gold-light);
            box-shadow: 0 4px 12px rgba(201, 162, 39, 0.12);
        }
        .consultant-card.backup {
            background: linear-gradient(135deg, var(--gold-bg) 0%, var(--card) 100%);
            border-style: dashed;
            border-color: var(--gold-light);
        }
        .consultant-card .name {
            font-weight: 700;
            font-size: 1rem;
            color: var(--navy);
            display: block;
            margin-bottom: 0.25rem;
        }
        .consultant-card .role {
            font-size: 0.8rem;
            color: var(--text-muted);
            display: block;
            margin-bottom: 1rem;
        }
        .btn-outlook {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            background: var(--gold);
            color: var(--navy);
            font-weight: 600;
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
        }
        .btn-outlook:hover {
            background: #b08e1f;
            color: var(--navy);
            transform: translateY(-1px);
        }

        /* PJ contacts */
        .pj-grid {
            display: grid;
            gap: 0.75rem;
        }
        .pj-item {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.75rem 1rem;
            padding: 1rem 1.25rem;
            background: var(--bg);
            border-radius: 10px;
            border: 1px solid var(--border);
        }
        .pj-item .nome {
            font-weight: 700;
            color: var(--navy);
            min-width: 120px;
        }
        .pj-item .links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            background: var(--whatsapp);
            color: #fff;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 0.45rem 0.9rem;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
        }
        .btn-whatsapp:hover {
            background: var(--whatsapp-hover);
            color: #fff;
            transform: translateY(-1px);
        }
        .pj-item .email-link {
            font-size: 0.85rem;
            color: var(--text);
            text-decoration: none;
        }
        .pj-item .email-link:hover { color: var(--gold); text-decoration: underline; }

        /* CTA */
        .cta-box {
            text-align: center;
            padding: 1.5rem 2rem;
            background: var(--navy);
            color: #fff;
            border-radius: 16px;
            margin-top: 2rem;
        }
        .cta-box p {
            margin: 0;
            font-size: 1rem;
            color: rgba(255,255,255,0.95);
        }
        .cta-box .highlight {
            color: var(--gold-light);
            font-weight: 700;
            margin-top: 0.5rem;
            display: block;
        }

        /* Footer */
        .page-footer {
            padding: 1.5rem 1rem;
            text-align: center;
            border-top: 1px solid var(--border);
            background: var(--card);
        }
        .page-footer small {
            font-size: 0.8rem;
            color: var(--text-muted);
            max-width: 540px;
            margin: 0 auto;
        }

        @media (max-width: 600px) {
            .hero h1 { font-size: 1.65rem; }
            .section { padding: 1.25rem 1.25rem; }
            .consultant-grid { grid-template-columns: 1fr; }
            .pj-item { flex-direction: column; align-items: flex-start; }
            .pj-item .nome { min-width: auto; }
        }
    </style>
</head>
<body>
    <header class="top-strip">
        <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista" class="logo">
    </header>

    <section class="hero">
        <span class="badge">Agendamento de reuniões</span>
        <h1>Consórcio <span class="accent">Week</span></h1>
        <p class="sub">
            Booking dos consultores de consórcio disponível. Consulte os horários e agende diretamente as reuniões com seus clientes.
        </p>
    </section>

    <main class="main">
        <div class="section orientacao">
            <h2 class="section-title"><i class="bi bi-info-circle-fill"></i> Orientação importante</h2>
            <ul>
                <li><strong>Priorize o consultor que normalmente lhe atende.</strong></li>
                <li>Se todas as agendas estiverem esgotadas, <strong>Paula Julien</strong> fica como backup — acione somente após esgotar as opções do seu consultor.</li>
            </ul>
        </div>

        <div class="section">
            <h2 class="section-title"><i class="bi bi-calendar3"></i> Links de agendamento</h2>
            <div class="consultant-grid">
                <div class="consultant-card">
                    <span class="name">Anderson Soares</span>
                    <span class="role">Consultor</span>
                    <a href="https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/PY8gUDh0GUO5uoaUG6DlAQ2?ismsaljsauthenabled" target="_blank" rel="noopener noreferrer" class="btn-outlook">Agendar <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
                <div class="consultant-card">
                    <span class="name">Camila Karayan</span>
                    <span class="role">Consultora</span>
                    <a href="https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/N3zgHwD05UiQCaNEaDpwAw2?ismsaljsauthenabled" target="_blank" rel="noopener noreferrer" class="btn-outlook">Agendar <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
                <div class="consultant-card">
                    <span class="name">Rafael Carranca</span>
                    <span class="role">Consultor</span>
                    <a href="https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/eij_JH29xE2IaGZ_SlcxCQ2?ismsaljsauthenabled" target="_blank" rel="noopener noreferrer" class="btn-outlook">Agendar <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
                <div class="consultant-card">
                    <span class="name">Solange Lopes</span>
                    <span class="role">Consultora</span>
                    <a href="https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/61rDAwbHM0-hcwPHGcnI1g2?ismsaljsauthenabled" target="_blank" rel="noopener noreferrer" class="btn-outlook">Agendar <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
                <div class="consultant-card">
                    <span class="name">Tiago Gestinari</span>
                    <span class="role">Consultor</span>
                    <a href="https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/e2LvmFBv-E2meCLKPX-oiA2?ismsaljsauthenabled" target="_blank" rel="noopener noreferrer" class="btn-outlook">Agendar <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
                <div class="consultant-card backup">
                    <span class="name">Paula Julien</span>
                    <span class="role">Backup</span>
                    <a href="https://outlook.office.com/book/ConsrcioAltaVista2@univalores.com.br/s/X1bIzrxqv0yv1f_bW0OnbQ2?ismsaljsauthenabled" target="_blank" rel="noopener noreferrer" class="btn-outlook">Agendar <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title"><i class="bi bi-building"></i> Consórcio PJ / Operações para empresas</h2>
            <p class="mb-3" style="color: var(--text); font-size: 0.95rem;">Oportunidades com consórcio para pessoa jurídica — time comercial PJ:</p>
            <div class="pj-grid">
                <div class="pj-item">
                    <span class="nome">Marcio</span>
                    <div class="links">
                        <a href="https://wa.me/5521982909867" target="_blank" rel="noopener noreferrer" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> (21) 98290-9867</a>
                        <a href="mailto:marcio.carvalho@globusseguros.com.br" class="email-link">marcio.carvalho@globusseguros.com.br</a>
                    </div>
                </div>
                <div class="pj-item">
                    <span class="nome">Fernando Brito</span>
                    <div class="links">
                        <a href="https://wa.me/5521987715686" target="_blank" rel="noopener noreferrer" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> (21) 98771-5686</a>
                        <a href="mailto:fernando.brito@globusseguros.com.br" class="email-link">fernando.brito@globusseguros.com.br</a>
                    </div>
                </div>
                <div class="pj-item">
                    <span class="nome">Guido</span>
                    <div class="links">
                        <a href="https://wa.me/5521969994179" target="_blank" rel="noopener noreferrer" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> (21) 96999-4179</a>
                        <a href="mailto:guido.guedes@avseguros.com.br" class="email-link">guido.guedes@avseguros.com.br</a>
                    </div>
                </div>
                <div class="pj-item">
                    <span class="nome">Lucas Zanetti</span>
                    <div class="links">
                        <a href="https://wa.me/5511976446749" target="_blank" rel="noopener noreferrer" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> (11) 97644-6749</a>
                        <a href="mailto:lucas.zanetti@altavistainvest.com.br" class="email-link">lucas.zanetti@altavistainvest.com.br</a>
                    </div>
                </div>
                <div class="pj-item">
                    <span class="nome">Alexandro Melo</span>
                    <div class="links">
                        <a href="https://wa.me/5511951047635" target="_blank" rel="noopener noreferrer" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> (11) 95104-7635</a>
                        <a href="mailto:alexandro.melo@altavistainvest.com.br" class="email-link">alexandro.melo@altavistainvest.com.br</a>
                    </div>
                </div>
                <div class="pj-item">
                    <span class="nome">Gerald Marenco</span>
                    <div class="links">
                        <a href="https://wa.me/5511964383375" target="_blank" rel="noopener noreferrer" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> (11) 96438-3375</a>
                        <a href="mailto:gerald.marenco@globusseguros.com.br" class="email-link">gerald.marenco@globusseguros.com.br</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta-box">
            <p>Aproveitem a estrutura, agendem o máximo de reuniões e tragam oportunidades para o time de consórcio estruturar com vocês.</p>
            <span class="highlight">Vamos fazer da Consórcio Week uma grande ação comercial.</span>
        </div>
    </main>

    <footer class="page-footer">
        <small>Informações destinadas aos assessores Alta Vista. Conteúdo pode ser confidencial. Dúvidas: contate o remetente.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
