
  <button class="sidebar-toggle" id="sidebarToggle" aria-label="Menu de slides">☰</button>

  <button class="exit-fullscreen-btn" id="exitFullscreenBtn" aria-label="Sair da tela cheia">
    <svg viewBox="0 0 24 24"><path d="M8 3v3a2 2 0 01-2 2H3m18 0h-3a2 2 0 01-2-2V3m0 18v-3a2 2 0 012-2h3M3 16h3a2 2 0 012 2v3"/></svg>
    Sair da apresentação
  </button>

  <div class="app-shell">
    <aside class="slide-sidebar" id="slideSidebar">
      <div class="sidebar-header">
        <img class="sidebar-logo" src="{{ asset('img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png') }}" alt="Alta Vista Investimentos">
        <span class="sidebar-kicker">Growth · Captação</span>
        <div class="sidebar-title">Apresentação Executiva</div>
        <div class="sidebar-meta">14 slides</div>
        <button class="present-btn" id="presentBtnSidebar" type="button">
          <svg viewBox="0 0 24 24"><path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/></svg>
          Apresentar em tela cheia
        </button>
      </div>
      <nav class="sidebar-nav" id="sidebarNav" aria-label="Navegação de slides"></nav>
      <div class="sidebar-actions">
        <button class="edit-mode-btn" id="editModeBtn" type="button">✎ Editar no slide</button>
      </div>
      <div class="editor-panel" id="editorPanel">
        <div class="editor-panel-header">
          <span class="editor-panel-title">Edição no slide</span>
          <button class="editor-close" id="editorCloseBtn" type="button" aria-label="Fechar editor">×</button>
        </div>
        <div class="editor-fields" id="editorFields"></div>
        <div class="editor-toolbar">
          <button class="editor-tool-btn" id="exportContentBtn" type="button">Exportar JSON</button>
          <button class="editor-tool-btn" id="importContentBtn" type="button">Importar JSON</button>
          <button class="editor-tool-btn danger" id="resetContentBtn" type="button">Restaurar padrão</button>
          <span class="editor-status" id="editorStatus"></span>
        </div>
        <input type="file" id="importContentInput" accept=".json,application/json" hidden>
      </div>
    </aside>

    <main class="presentation-stage">
      <div class="help-hint">← → navegar &nbsp;|&nbsp; F apresentar &nbsp;|&nbsp; ?edit=1 editar no slide</div>

      <div class="presentation" id="presentation">

    <!-- SLIDE 1 — CAPA -->
    <section class="slide slide-cover active" data-slide="1" data-title="Capa" data-label="Abertura">
      <div class="cover-accent"></div>
      <div class="cover-accent-2"></div>
      <div class="slide-inner">
        <div class="cover-label">Apresentação Executiva · Confidencial</div>
        <img class="cover-logo" src="{{ asset('img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png') }}" alt="Alta Vista Investimentos">
        <h1 class="cover-title" data-field="slide1.coverTitle">Growth<br>Alta Vista</h1>
        <p class="cover-subtitle" data-field="slide1.coverSubtitle">Máquina previsível de captação de investidores qualificados</p>
        <div class="cover-tagline">
          <span data-field="slide1.coverTagline1">Conteúdo · Simuladores · LPs</span>
          <span class="sep"></span>
          <span data-field="slide1.coverTagline2">focado em captação</span>
        </div>
        <div class="cover-footer">Alta Vista Investimentos · 2026</div>
      </div>
      <div class="cover-visual-logo" aria-hidden="true">
        <img src="{{ asset('img/Logo_Av.png') }}" alt="">
      </div>
    </section>

    <!-- SLIDE 2 — EXECUTIVE SUMMARY -->
    <section class="slide" data-slide="2" data-title="Executive Summary" data-label="Visão geral">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">02 / 14</div>
        </div>
        <div class="label">Executive Summary</div>
        <h2 class="headline" data-field="slide2.headline">A Alta Vista construiu um ecossistema multicanal de captação — conteúdo, simuladores e landing pages convergindo para leads qualificados.</h2>
        <p class="subhead" style="max-width:900px;" data-field="slide2.subhead">Quatro fontes alimentam o funil: Somas.io, Ponto de Vista, Alta Vista e influenciadores.</p>
        <div class="pillars" style="margin-top: 40px;">
          <div class="pillar">
            <div class="pillar-box highlight">
              <div class="pillar-num">01</div>
              <div class="pillar-name" style="color:#fff;">Somas.io</div>
              <p class="card-text" style="margin-top:10px;color:var(--gray-300);">Simuladores · SEO · parceria AV</p>
            </div>
          </div>
          <div class="pillar-arrow">→</div>
          <div class="pillar">
            <div class="pillar-box">
              <div class="pillar-num">02</div>
              <div class="pillar-name">Ponto de Vista</div>
              <p class="card-text" style="margin-top:10px;">Newsletter · portal · conteúdo</p>
            </div>
          </div>
          <div class="pillar-arrow">→</div>
          <div class="pillar">
            <div class="pillar-box">
              <div class="pillar-num">03</div>
              <div class="pillar-name">Influenciadores</div>
              <p class="card-text" style="margin-top:10px;">Creators · vozes AV · alcance</p>
            </div>
          </div>
          <div class="pillar-arrow">→</div>
          <div class="pillar">
            <div class="pillar-box">
              <div class="pillar-num">04</div>
              <div class="pillar-name">Alta Vista</div>
              <p class="card-text" style="margin-top:10px;">LPs · eventos · formulários</p>
            </div>
          </div>
        </div>
        <div style="margin-top: 32px; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 16px;">
          <div class="insight-box" style="text-align:center; border-left:none; border-top: 3px solid var(--gold);" data-field="slide2.insight1">
            <strong>Somas.io</strong> → simuladores e SEO
          </div>
          <div class="insight-box light" style="text-align:center; border-left:none; border-top: 3px solid var(--gold);" data-field="slide2.insight2">
            <strong>Ponto de Vista</strong> → conteúdo e cadastros
          </div>
          <div class="insight-box light" style="text-align:center; border-left:none; border-top: 3px solid var(--gold);" data-field="slide2.insight4">
            <strong>Influenciadores</strong> → confiança e alcance
          </div>
          <div class="insight-box light" style="text-align:center; border-left:none; border-top: 3px solid var(--navy);" data-field="slide2.insight3">
            <strong>Alta Vista</strong> → LPs e eventos
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 3 — ARQUITETURA -->
    <section class="slide" data-slide="3" data-title="Arquitetura de Captação" data-label="Multicanal">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">03 / 14</div>
        </div>
        <div class="label">Arquitetura de Captação</div>
        <h2 class="headline" data-field="slide3.headline">Captação hoje é distribuída — cada canal tem papel diferente no funil</h2>
        <div class="acq-visual">
          <div class="acq-sources" style="grid-template-columns: repeat(4, 1fr);">
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
              <div class="acq-source-name">Somas.io</div>
              <div class="acq-source-sub">Awareness · Simulação</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/></svg></div>
              <div class="acq-source-name">Ponto de Vista</div>
              <div class="acq-source-sub">Engajamento · Conteúdo</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg></div>
              <div class="acq-source-name">Influenciadores</div>
              <div class="acq-source-sub">Confiança · Alcance</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/></svg></div>
              <div class="acq-source-name">Alta Vista</div>
              <div class="acq-source-sub">Conversão · Intenção</div>
            </div>
          </div>
          <div class="acq-converge">
            <div class="acq-target">
              <div class="acq-target-name">CRM · HubSpot · Assessor</div>
              <div class="acq-target-sub">Pipeline comercial · reunião · onboarding</div>
            </div>
          </div>
        </div>
        <div class="compare-arrow-label" style="margin-top: 24px;">
          <span data-field="slide3.footer">A vantagem está na combinação: awareness orgânico + conteúdo institucional + conversão direta</span>
        </div>
      </div>
    </section>

    <!-- SLIDE 4 — FONTES -->
    <section class="slide" data-slide="4" data-title="Fontes de Aquisição" data-label="Overview">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">04 / 14</div>
        </div>
        <div class="label">Fontes de Aquisição</div>
        <h2 class="headline" data-field="slide4.headline">Quatro fontes de aquisição alimentam o pipeline comercial</h2>
        <div class="grid-4" style="margin-top: 28px; flex: 1;">
          <div class="card source-card">
            <div class="source-card-badge">Canal 01</div>
            <div class="card-title" style="margin-top:12px;">Somas.io</div>
            <div class="card-text">Simuladores financeiros gratuitos com parceria Alta Vista/XP. Tráfego orgânico de alto volume.</div>
            <ul class="feature-list" style="margin-top:16px; font-size:12px;">
              <li>Simulador de FII</li>
              <li>Simulador de Renda Fixa (CDB, Tesouro, LCI/LCA)</li>
              <li>Meta financeira · retorno de investimentos</li>
            </ul>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">Canal 02</div>
            <div class="card-title" style="margin-top:12px;">Ponto de Vista</div>
            <div class="card-text">Newsletter semanal + portal Trade Insights. Cadastro gratuito e conteúdo recorrente.</div>
            <ul class="feature-list" style="margin-top:16px; font-size:12px;">
              <li>Newsletter semanal</li>
              <li>Morning calls e lives</li>
              <li>Portal de conteúdos</li>
            </ul>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">Canal 03</div>
            <div class="card-title" style="margin-top:12px;">Influenciadores</div>
            <div class="card-text">Creators de finanças e vozes da Alta Vista ampliando alcance com confiança e rastreabilidade.</div>
            <ul class="feature-list" style="margin-top:16px; font-size:12px;">
              <li>Parcerias YouTube e Instagram</li>
              <li>Links e UTMs rastreáveis</li>
              <li>Lives e co-branding AV</li>
            </ul>
          </div>
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">Canal 04</div>
            <div class="card-title" style="margin-top:12px;">Alta Vista</div>
            <div class="card-text">Landing pages, eventos e formulários diretos de conversão.</div>
            <ul class="feature-list" style="margin-top:16px; font-size:12px;">
              <li>LPs institucionais</li>
              <li>Formulários HubSpot</li>
              <li>Eventos e webinars</li>
            </ul>
          </div>
        </div>
        <div class="insight-box light" style="margin-top: 24px; text-align:center; border-left:none; border-top:3px solid var(--gold);" data-field="slide4.insight">
          Cada canal captura em um estágio diferente — juntos formam um funil previsível e de baixo CAC.
        </div>
      </div>
    </section>

    <!-- SLIDE 5 — SOMAS.IO -->
    <section class="slide" data-slide="5" data-title="Somas.io" data-label="Canal 01">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">05 / 14</div>
        </div>
        <div style="flex:1; display:flex; flex-direction:column; justify-content:center; max-width:720px;">
          <div class="label">Canal 01 · Somas.io</div>
          <h2 class="headline" data-field="slide6.headline">Somas.io — simuladores como topo de funil</h2>
          <p class="subhead" style="margin-top:0;" data-field="slide6.subhead">Plataforma de simuladores financeiros gratuitos — parceria com instituições, incluindo Alta Vista/XP.</p>
          <ul class="feature-list" style="margin-top: 20px;">
            <li>Simulador de Fundo Imobiliário (FII) — dividendos e DY</li>
            <li>Simulador de Renda Fixa — CDB, Tesouro, LCI e LCA</li>
            <li>Simulador de Meta Financeira — objetivos e aportes</li>
            <li>Consórcio vs. financiamento imobiliário</li>
          </ul>
          <div class="insight-box light" style="margin-top: 24px;" data-field="slide6.insight">
            Simuladores gratuitos de FII, renda fixa e metas financeiras geram intenção de investimento — lead qualificado por perfil, prazo e faixa de patrimônio.
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 6 — PONTO DE VISTA -->
    <section class="slide" data-slide="6" data-title="Ponto de Vista" data-label="Canal 02">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">06 / 14</div>
        </div>
        <div style="flex:1; display:flex; flex-direction:column; justify-content:center; max-width:720px;">
          <div class="label">Canal 02 · Ponto de Vista</div>
          <h2 class="headline" data-field="slide7.headline">Ponto de Vista — conteúdo que converte</h2>
          <p class="subhead" style="margin-top:0;" data-field="slide7.subhead">Newsletter semanal + portal Trade Insights com cadastro gratuito de clientes.</p>
          <ul class="feature-list" style="margin-top: 20px;">
            <li>Newsletter semanal (Guilherme Jung)</li>
            <li>Portal Trade Insights · cadastro gratuito</li>
            <li>Morning calls, lives e conteúdos</li>
            <li>Lead engajado com leitura recorrente</li>
          </ul>
          <div class="insight-box light" style="margin-top: 24px;" data-field="slide7.insight">
            Leads de conteúdo têm maior taxa de engajamento — já consomem a leitura da Alta Vista antes do primeiro contato.
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 7 — INFLUENCIADORES -->
    <section class="slide" data-slide="7" data-title="Influenciadores" data-label="Canal 03">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">07 / 14</div>
        </div>
        <div style="flex:1; display:flex; flex-direction:column; justify-content:center; max-width:720px;">
          <div class="label">Canal 03 · Influenciadores</div>
          <h2 class="headline" data-field="slide15.headline">Influenciadores — confiança que converte</h2>
          <p class="subhead" style="margin-top:0;" data-field="slide15.subhead">Creators de finanças e vozes da Alta Vista levando a marca para audiências qualificadas.</p>
          <ul class="feature-list" style="margin-top: 20px;">
            <li>Parcerias com creators (YouTube, Instagram, podcasts)</li>
            <li>Guilherme Jung e time AV como referência institucional</li>
            <li>Links rastreáveis · UTMs · HubSpot</li>
            <li>Lives, entrevistas e co-branding</li>
          </ul>
          <div class="insight-box light" style="margin-top: 24px;" data-field="slide15.insight">
            Audiência já educada em investimentos — menor frio comercial e maior propensão a agendar reunião.
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 8 — ALTA VISTA -->
    <section class="slide" data-slide="8" data-title="Alta Vista" data-label="Canal 04">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">08 / 14</div>
        </div>
        <div style="flex:1; display:flex; flex-direction:column; justify-content:center; max-width:720px;">
          <div class="label">Canal 04 · Alta Vista</div>
          <h2 class="headline" data-field="slide8.headline">Alta Vista — conversão direta</h2>
          <p class="subhead" style="margin-top:0;" data-field="slide8.subhead">Landing pages, eventos e formulários HubSpot.</p>
          <ul class="feature-list" style="margin-top: 20px;">
            <li>LP conteudos-investir e institucional</li>
            <li>Formulários HubSpot</li>
            <li>Eventos e webinars</li>
            <li>Maior intenção de conversão</li>
          </ul>
          <div class="insight-box light" style="margin-top: 24px;" data-field="slide8.insight">
            Canal de maior intenção — lead chega já com interesse explícito em assessoria de investimentos.
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 9 — FUNIL -->
    <section class="slide" data-slide="9" data-title="Funil de Captação" data-label="Conversão">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">09 / 14</div>
        </div>
        <div class="label">Growth Funnel · Captação</div>
        <h2 class="headline" data-field="slide9.headline">Funil de captação Alta Vista</h2>
        <div class="flow" style="margin-top: 36px;">
          <div class="flow-step">
            <div class="flow-box">
              <div class="step-label">Awareness</div>
              <div class="step-name">Somas.io</div>
              <div class="step-sub">Simuladores · SEO</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box">
              <div class="step-label">Engajamento</div>
              <div class="step-name">Ponto de Vista</div>
              <div class="step-sub">Conteúdo recorrente</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box">
              <div class="step-label">Recomendação</div>
              <div class="step-name">Influenciadores</div>
              <div class="step-sub">Creator · confiança</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box active">
              <div class="step-label">Intenção</div>
              <div class="step-name">Alta Vista LPs</div>
              <div class="step-sub">Formulário · LP</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box">
              <div class="step-label">Qualificação</div>
              <div class="step-name">Reunião</div>
              <div class="step-sub">Assessor · fit</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box" style="background:var(--navy);border-color:var(--navy);">
              <div class="step-label" style="color:var(--gold);">Conversão</div>
              <div class="step-name" style="color:#fff;">Cliente</div>
              <div class="step-sub" style="color:var(--gray-300);">Onboarding XP</div>
            </div>
          </div>
        </div>
        <div class="insight-box light" style="margin-top: 36px; text-align: center; border-left: none; border-top: 3px solid var(--gold);" data-field="slide9.insight">
          Conteúdo e simuladores aquecem — LPs e assessores convertem. Cada etapa é mensurável.
        </div>
      </div>
    </section>

    <!-- SLIDE 10 — ECONOMICS -->
    <section class="slide slide-economics" data-slide="10" data-title="Economics" data-label="Unit economics">
      <div class="deco-grid"></div>
      <div class="slide-inner slide-inner-compact">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">10 / 14</div>
        </div>
        <div class="label">Economics & Cenários</div>
        <h2 class="headline" data-field="slide10.headline">Unit economics de captação — premissas e cenários</h2>
        <p class="subhead" style="max-width:920px;margin-top:0;margin-bottom:16px;font-size:13px;">
          Investimento em impulsionamento → captamos
          <strong class="econ-capture-val" data-econ-derived data-field="slide10.anchorAucCaptado">R$ 20.100.000</strong>
          · receita ROA (ano)
          <strong class="econ-capture-val" data-econ-derived data-field="slide10.anchorReceita">R$ 100.500</strong>
        </p>

        <div class="econ-sim-bar">
          <span class="econ-sim-badge">Simulador</span>
          <span class="econ-sim-note">Investimento × premissas → AUC e receita por cenário</span>
        </div>

        <div class="econ-anchors">
          <div class="econ-anchor highlight">
            <input type="text" class="econ-input econ-anchor-input econ-sim-input gold" data-econ-sim data-field="slide10.investimentoCaptacao" value="R$ 100.000" aria-label="Investimento em impulsionamento">
            <div class="econ-anchor-label">
              <span data-econ-invest-label>Invest. impulsionamento</span>
              <button type="button" class="econ-view-toggle econ-view-toggle-inline" id="econInvestToggle" aria-pressed="false">Ver mensal</button>
            </div>
          </div>
          <div class="econ-anchor">
            <input type="text" class="econ-input econ-anchor-input econ-sim-input gold" data-econ-sim data-field="slide10.anchorCpl" value="R$ 15" aria-label="CPL — custo por lead">
            <div class="econ-anchor-label" data-field="slide10.anchorCplLabel">CPL</div>
          </div>
          <div class="econ-anchor">
            <input type="text" class="econ-input econ-anchor-input econ-sim-input gold" data-econ-sim data-field="slide10.anchorConv" value="1%" aria-label="Taxa de conversão lead para cliente">
            <div class="econ-anchor-label" data-field="slide10.anchorConvLabel">Conv. lead → cliente</div>
          </div>
          <div class="econ-anchor">
            <input type="text" class="econ-input econ-anchor-input econ-sim-input" data-econ-sim data-field="slide10.anchorTicket" value="R$ 300.000" aria-label="Ticket médio">
            <div class="econ-anchor-label" data-field="slide10.anchorTicketLabel">Ticket médio</div>
          </div>
          <div class="econ-anchor is-derived">
            <div class="econ-anchor-val" data-econ-derived data-field="slide10.anchorCac">0,5%</div>
            <div class="econ-anchor-label">CAC · ticket · calc.</div>
          </div>
          <div class="econ-anchor">
            <input type="text" class="econ-input econ-anchor-input econ-sim-input gold" data-econ-sim data-field="slide10.anchorRoa" value="0,5% a.a." aria-label="ROA">
            <div class="econ-anchor-label" data-field="slide10.anchorRoaLabel">ROA</div>
          </div>
        </div>

        <div class="econ-verba-bar">
          <span>Invest.</span>
          <strong data-econ-derived data-field="slide10.resumoInvest">R$ 100.000</strong>
          <span class="econ-verba-sep">·</span>
          <span data-econ-derived data-field="slide10.resumoLeads">6.667 leads</span>
          <span class="econ-verba-sep">·</span>
          <span data-econ-derived data-field="slide10.resumoClientes">67 clientes</span>
          <span class="econ-verba-sep">→</span>
          <span>AUC</span>
          <strong class="gold" data-econ-derived data-field="slide10.anchorAucCaptado">R$ 20.100.000</strong>
        </div>

        <p class="econ-formula-note">Leads = invest. ÷ CPL &nbsp;·&nbsp; Clientes = leads × conv. &nbsp;·&nbsp; CAC = CPL ÷ conv. &nbsp;·&nbsp; AUC = clientes × ticket &nbsp;·&nbsp; Receita = AUC × ROA</p>

        <div class="scenario-table-wrap">
          <table class="scenario-table">
            <thead>
              <tr>
                <th></th>
                <th data-field="slide10.scenario1Name">Conservador</th>
                <th class="active" data-field="slide10.scenario2Name">Base</th>
                <th data-field="slide10.scenario3Name">Acelerado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ticket médio</td>
                <td data-econ-derived data-field="slide10.s1Ticket">R$ 300.000</td>
                <td class="active" data-econ-derived data-field="slide10.s2Ticket">R$ 300.000</td>
                <td data-econ-derived data-field="slide10.s3Ticket">R$ 300.000</td>
              </tr>
              <tr>
                <td>CPL</td>
                <td data-econ-derived data-field="slide10.s1Cpl">R$ 22,5</td>
                <td class="active" data-econ-derived data-field="slide10.s2Cpl">R$ 15</td>
                <td data-econ-derived data-field="slide10.s3Cpl">R$ 10</td>
              </tr>
              <tr>
                <td>Conv. lead → cliente</td>
                <td data-econ-derived data-field="slide10.s1Conv">0,5%</td>
                <td class="active" data-econ-derived data-field="slide10.s2Conv">1,0%</td>
                <td data-econ-derived data-field="slide10.s3Conv">1,5%</td>
              </tr>
              <tr>
                <td>Leads</td>
                <td data-econ-derived data-field="slide10.s1Leads">4.444</td>
                <td class="active" data-econ-derived data-field="slide10.s2Leads">6.667</td>
                <td data-econ-derived data-field="slide10.s3Leads">9.950</td>
              </tr>
              <tr>
                <td>Clientes novos</td>
                <td data-econ-derived data-field="slide10.s1Clients">22</td>
                <td class="active" data-econ-derived data-field="slide10.s2Clients">67</td>
                <td data-econ-derived data-field="slide10.s3Clients">149</td>
              </tr>
              <tr>
                <td>CAC (% ticket) <span class="econ-derived-hint">calc.</span></td>
                <td data-econ-derived data-field="slide10.s1CacPct">1,5%</td>
                <td class="active" data-econ-derived data-field="slide10.s2CacPct">0,5%</td>
                <td data-econ-derived data-field="slide10.s3CacPct">0,2%</td>
              </tr>
              <tr>
                <td>CAC (R$) <span class="econ-derived-hint">calc.</span></td>
                <td data-econ-derived data-field="slide10.s1CacVal">R$ 4.500</td>
                <td class="active" data-econ-derived data-field="slide10.s2CacVal">R$ 1.500</td>
                <td data-econ-derived data-field="slide10.s3CacVal">R$ 670</td>
              </tr>
              <tr>
                <td>AUC captado</td>
                <td data-econ-derived data-field="slide10.s1Auc">R$ 6.600.000</td>
                <td class="active" data-econ-derived data-field="slide10.s2Auc">R$ 20.100.000</td>
                <td data-econ-derived data-field="slide10.s3Auc">R$ 44.700.000</td>
              </tr>
              <tr>
                <td>Receita ROA (ano)</td>
                <td data-econ-derived data-field="slide10.s1Revenue">R$ 33.000</td>
                <td class="active" data-econ-derived data-field="slide10.s2Revenue">R$ 100.500</td>
                <td data-econ-derived data-field="slide10.s3Revenue">R$ 223.500</td>
              </tr>
              <tr>
                <td><span data-econ-spend-label>Investimento</span></td>
                <td data-econ-derived data-field="slide10.s1Spend">R$ 100.000</td>
                <td class="active" data-econ-derived data-field="slide10.s2Spend">R$ 100.000</td>
                <td data-econ-derived data-field="slide10.s3Spend">R$ 100.000</td>
              </tr>
              <tr>
                <td>ROI receita / invest.</td>
                <td data-econ-derived data-field="slide10.s1Roi">0,3×</td>
                <td class="active" data-econ-derived data-field="slide10.s2Roi">1,0×</td>
                <td data-econ-derived data-field="slide10.s3Roi">2,2×</td>
              </tr>
              <tr class="scenario-highlight">
                <td>Payback CAC</td>
                <td data-econ-derived data-field="slide10.s1Payback">36 meses</td>
                <td class="active" data-econ-derived data-field="slide10.s2Payback">12 meses</td>
                <td data-econ-derived data-field="slide10.s3Payback">5 meses</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="insight-box light econ-insight" data-field="slide10.insight">
          No cenário <strong>base</strong>, cada R$ 1 investido em captação gera <strong>R$ 1,27</strong> de receita ROA no primeiro ano — payback em menos de 8 meses, com CAC de apenas 0,3% do ticket.
        </div>
      </div>
    </section>

        <!-- SLIDE 11 — PL MENSAL (sob custódia) -->
    <section class="slide slide-pl" data-slide="11" data-title="PL Mensal" data-label="PL sob custódia">
      <div class="deco-grid"></div>
      <div class="slide-inner slide-inner-compact">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">11 / 14</div>
        </div>
        <div class="label">PL · Sob custódia</div>
        <h2 class="headline" data-field="slide12.headline">Evolução da custódia</h2>

        <div class="pl-toolbar">
          <span data-pl-derived data-field="slide12.resumoClientesMes">5,6 clientes/mês</span>
          <span class="pl-toolbar-sep">·</span>
          <span>PL captado</span>
          <strong data-pl-derived data-field="slide12.resumoPlMes">R$ 1.674.000</strong>
          <span class="pl-toolbar-hint">/mês</span>
          <span class="pl-toolbar-sep">·</span>
          <span>Crescimento</span>
          <input type="text" class="econ-input pl-toolbar-input econ-sim-input" data-pl-sim data-field="slide12.crescimentoCarteira" value="1%" aria-label="Crescimento mensal da carteira">
          <span class="pl-toolbar-hint">/mês</span>
          <span class="pl-toolbar-sep">→</span>
          <span>PL mês 12</span>
          <strong class="gold" data-pl-derived data-field="slide12.resumoPl12">R$ 21.230.510</strong>
        </div>

        <div class="pl-scenario-filter" role="group" aria-label="Filtrar cenário">
          <span class="pl-filter-label">Cenário</span>
          <button type="button" class="pl-scenario-btn" data-pl-scenario="1" aria-pressed="false">
            <span data-field="slide12.scenario1Name">Conservador</span>
          </button>
          <button type="button" class="pl-scenario-btn active" data-pl-scenario="2" aria-pressed="true">
            <span data-field="slide12.scenario2Name">Base</span>
          </button>
          <button type="button" class="pl-scenario-btn" data-pl-scenario="3" aria-pressed="false">
            <span data-field="slide12.scenario3Name">Acelerado</span>
          </button>
        </div>

        <div class="pl-main">
          <div class="pl-curve-panel" data-pl-derived aria-label="Evolução da custódia mês a mês">
            <div class="pl-curve-header">
              <span class="pl-curve-title">Curva mês a mês</span>
            </div>
            <div class="pl-curve-chart" id="plCurveChart"></div>
            <p class="pl-curve-formula">PL acumulado m = PL acumulado m−1 × (1 + cresc.) + PL captado no mês</p>
          </div>

          <div class="pl-side">
            <div class="pl-month-table-head"><span id="plTableScenarioLabel">Base · mês a mês</span></div>
            <div class="pl-month-table-wrap">
              <table class="scenario-table pl-month-table">
                <thead>
                  <tr>
                    <th data-field="slide12.tableColMonth">Mês</th>
                    <th data-field="slide12.tableColCapture">PL captado</th>
                    <th class="active" data-field="slide12.tableColPl">PL acumulado</th>
                  </tr>
                </thead>
                <tbody id="plMonthTableBody"></tbody>
              </table>
            </div>
            <p class="pl-side-note" data-field="slide12.insight">Cenário base · PL captado R$ 1.674.000/mês · carteira +1%/mês · PL acumulado R$ 21.230.510 no mês 12.</p>
          </div>
        </div>

        <span class="pl-hidden-fields" aria-hidden="true">
          <span data-pl-derived data-field="slide12.s1Ticket"></span>
          <span data-pl-derived data-field="slide12.s2Ticket"></span>
          <span data-pl-derived data-field="slide12.s3Ticket"></span>
          <span data-pl-derived data-field="slide12.s1ClientesMes"></span>
          <span data-pl-derived data-field="slide12.s2ClientesMes"></span>
          <span data-pl-derived data-field="slide12.s3ClientesMes"></span>
          <span data-pl-derived data-field="slide12.s1Clientes12"></span>
          <span data-pl-derived data-field="slide12.s2Clientes12"></span>
          <span data-pl-derived data-field="slide12.s3Clientes12"></span>
          <span data-pl-derived data-field="slide12.s1Crescimento"></span>
          <span data-pl-derived data-field="slide12.s2Crescimento"></span>
          <span data-pl-derived data-field="slide12.s3Crescimento"></span>
          <span data-pl-derived data-field="slide12.resumoCrescimento"></span>
        </span>
      </div>
    </section>

        <!-- SLIDE 12 — DRE -->
    <section class="slide slide-dre" data-slide="12" data-title="DRE" data-label="DRE captação">
      <div class="deco-grid"></div>
      <div class="slide-inner slide-inner-compact">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">12 / 14</div>
        </div>
        <div class="label">DRE · Captação</div>
        <h2 class="headline" data-field="slide11.headline">DRE de captação — receita ROA vs custos</h2>
        <p class="subhead dre-subhead" style="max-width:920px;margin-top:0;margin-bottom:14px;font-size:13px;">
          Cenário <strong>base</strong>:
          <strong class="econ-capture-val" data-dre-derived data-field="slide11.resumoResultado">−R$ 145.797</strong>
          · margem
          <strong class="econ-capture-val" data-dre-derived data-field="slide11.resumoMargem">−259,4%</strong>
          · <span data-dre-derived data-field="slide11.resumoClientes">67 clientes</span>
          <span class="dre-period-hint">· visão 12 meses</span>
        </p>

        <div class="dre-cost-bar">
          <span class="econ-sim-badge">Custos</span>
          <div class="dre-cost-items">
            <div class="dre-cost-item">
              <span class="dre-cost-name">Impulsionamento</span>
              <span class="dre-cost-val" data-dre-derived data-field="slide10.s2Spend">R$ 100.000</span>
              <span class="dre-cost-note">do simulador</span>
            </div>
            <div class="dre-cost-item">
              <span class="dre-cost-name">SDR</span>
              <input type="text" class="econ-input dre-cost-input econ-sim-input" data-dre-sim data-field="slide11.custoSdr" value="R$ 3.500" aria-label="Custo mensal SDR">
              <span class="dre-cost-note">/ mês</span>
            </div>
            <div class="dre-cost-item">
              <span class="dre-cost-name">Assessor</span>
              <input type="text" class="econ-input dre-cost-input econ-sim-input" data-dre-sim data-field="slide11.custoAssessor" value="R$ 5.000" aria-label="Custo mensal assessor">
              <span class="dre-cost-note">/ mês</span>
            </div>
          </div>
        </div>

        <div class="scenario-table-wrap dre-table-wrap">
          <table class="scenario-table dre-table">
            <thead>
              <tr>
                <th></th>
                <th data-field="slide11.scenario1Name">Conservador</th>
                <th class="active" data-field="slide11.scenario2Name">Base</th>
                <th data-field="slide11.scenario3Name">Acelerado</th>
              </tr>
            </thead>
            <tbody>
              <tr class="dre-section-row">
                <td colspan="4">Premissas</td>
              </tr>
              <tr class="dre-prem-row">
                <td>Impulsionamento (12m)</td>
                <td data-dre-derived data-field="slide11.s1PremImp">R$ 100.000</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremImp">R$ 100.000</td>
                <td data-dre-derived data-field="slide11.s3PremImp">R$ 100.000</td>
              </tr>
              <tr class="dre-prem-row">
                <td>CPL</td>
                <td data-dre-derived data-field="slide11.s1PremCpl">R$ 22,5</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremCpl">R$ 15</td>
                <td data-dre-derived data-field="slide11.s3PremCpl">R$ 10</td>
              </tr>
              <tr class="dre-prem-row">
                <td>Conv. lead → cliente</td>
                <td data-dre-derived data-field="slide11.s1PremConv">0,5%</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremConv">1,0%</td>
                <td data-dre-derived data-field="slide11.s3PremConv">1,5%</td>
              </tr>
              <tr class="dre-prem-row">
                <td>Ticket médio</td>
                <td data-dre-derived data-field="slide11.s1PremTicket">R$ 300.000</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremTicket">R$ 300.000</td>
                <td data-dre-derived data-field="slide11.s3PremTicket">R$ 300.000</td>
              </tr>
              <tr class="dre-prem-row">
                <td>ROA</td>
                <td data-dre-derived data-field="slide11.s1PremRoa">0,5% a.a.</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremRoa">0,5% a.a.</td>
                <td data-dre-derived data-field="slide11.s3PremRoa">0,5% a.a.</td>
              </tr>
              <tr class="dre-prem-row">
                <td>SDR / mês</td>
                <td data-dre-derived data-field="slide11.s1PremSdr">R$ 3.500</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremSdr">R$ 3.500</td>
                <td data-dre-derived data-field="slide11.s3PremSdr">R$ 3.500</td>
              </tr>
              <tr class="dre-prem-row">
                <td>Assessor / mês</td>
                <td data-dre-derived data-field="slide11.s1PremAssessor">R$ 5.000</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremAssessor">R$ 5.000</td>
                <td data-dre-derived data-field="slide11.s3PremAssessor">R$ 5.000</td>
              </tr>
              <tr class="dre-prem-row">
                <td>Leads</td>
                <td data-dre-derived data-field="slide11.s1PremLeads">4.444</td>
                <td class="active" data-dre-derived data-field="slide11.s2PremLeads">6.667</td>
                <td data-dre-derived data-field="slide11.s3PremLeads">9.950</td>
              </tr>
              <tr class="dre-section-row">
                <td colspan="4">DRE · 12 meses</td>
              </tr>
              <tr>
                <td>Clientes novos</td>
                <td data-dre-derived data-field="slide11.s1Clientes">22</td>
                <td class="active" data-dre-derived data-field="slide11.s2Clientes">67</td>
                <td data-dre-derived data-field="slide11.s3Clientes">149</td>
              </tr>
              <tr>
                <td>Receita ROA (12 meses) <span class="econ-derived-hint">Σ custódia m × ROA/m</span></td>
                <td data-dre-derived data-field="slide11.s1Receita">R$ 18.734</td>
                <td class="active" data-dre-derived data-field="slide11.s2Receita">R$ 56.203</td>
                <td data-dre-derived data-field="slide11.s3Receita">R$ 126.458</td>
              </tr>
              <tr class="dre-cost-row">
                <td>(−) Impulsionamento</td>
                <td data-dre-derived data-field="slide11.s1Impulsionamento">−R$ 100.000</td>
                <td class="active" data-dre-derived data-field="slide11.s2Impulsionamento">−R$ 100.000</td>
                <td data-dre-derived data-field="slide11.s3Impulsionamento">−R$ 100.000</td>
              </tr>
              <tr class="dre-cost-row">
                <td>(−) SDR <span class="econ-derived-hint">12 meses</span></td>
                <td data-dre-derived data-field="slide11.s1Sdr">−R$ 42.000</td>
                <td class="active" data-dre-derived data-field="slide11.s2Sdr">−R$ 42.000</td>
                <td data-dre-derived data-field="slide11.s3Sdr">−R$ 42.000</td>
              </tr>
              <tr class="dre-cost-row">
                <td>(−) Assessor <span class="econ-derived-hint">12 meses</span></td>
                <td data-dre-derived data-field="slide11.s1Assessor">−R$ 60.000</td>
                <td class="active" data-dre-derived data-field="slide11.s2Assessor">−R$ 60.000</td>
                <td data-dre-derived data-field="slide11.s3Assessor">−R$ 60.000</td>
              </tr>
              <tr class="dre-subtotal-row">
                <td>(=) Total custos</td>
                <td data-dre-derived data-field="slide11.s1Custos">−R$ 202.000</td>
                <td class="active" data-dre-derived data-field="slide11.s2Custos">−R$ 202.000</td>
                <td data-dre-derived data-field="slide11.s3Custos">−R$ 202.000</td>
              </tr>
              <tr class="scenario-highlight dre-result-row">
                <td>(=) Resultado</td>
                <td data-dre-derived data-field="slide11.s1Resultado">−R$ 183.266</td>
                <td class="active" data-dre-derived data-field="slide11.s2Resultado">−R$ 145.797</td>
                <td data-dre-derived data-field="slide11.s3Resultado">−R$ 75.542</td>
              </tr>
              <tr>
                <td>Margem</td>
                <td data-dre-derived data-field="slide11.s1Margem">−978,3%</td>
                <td class="active" data-dre-derived data-field="slide11.s2Margem">−259,4%</td>
                <td data-dre-derived data-field="slide11.s3Margem">−59,7%</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="insight-box light econ-insight" data-field="slide11.insight">
          Cenário base · 67 clientes · receita ROA R$ 56.203 (custódia m × ROA/m) · impulsionamento R$ 100.000 → resultado −R$ 145.797 (−259,4% margem).
        </div>
      </div>
    </section>

        <!-- SLIDE 13 — CAC & LTV -->
    <section class="slide slide-cac-ltv" data-slide="13" data-title="CAC & LTV" data-label="CAC · LTV">
      <div class="deco-grid"></div>
      <div class="slide-inner slide-inner-compact">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">13 / 14</div>
        </div>
        <div class="label">Unit economics</div>
        <h2 class="headline" data-field="slide14.headline">CAC & LTV — retorno do cliente</h2>

        <div class="cac-toolbar">
          <span>Cenário <strong>base</strong></span>
          <span class="cac-toolbar-sep">·</span>
          <span>Churn</span>
          <input type="text" class="econ-input cac-churn-input econ-sim-input" data-cac-sim data-field="slide14.churn" value="10%" aria-label="Churn anual">
          <span class="cac-toolbar-hint">a.a.</span>
          <span class="cac-toolbar-sep">·</span>
          <span>Vida média</span>
          <strong data-cac-derived data-field="slide14.resumoVidaMedia">10 anos</strong>
        </div>

        <div class="cac-kpi-grid">
          <div class="cac-kpi-card">
            <div class="cac-kpi-label">CAC total</div>
            <div class="cac-kpi-value gold" data-cac-derived data-field="slide14.resumoCac">R$ 3.023</div>
            <div class="cac-kpi-hint" data-cac-derived data-field="slide14.resumoCacPct">1,0% do ticket</div>
            <div class="cac-kpi-breakdown" data-cac-derived data-field="slide14.resumoCacBreakdown">mídia R$ 1.500 · SDR R$ 627 · assessor R$ 896</div>
          </div>
          <div class="cac-kpi-card highlight">
            <div class="cac-kpi-label">LTV receita</div>
            <div class="cac-kpi-value" data-cac-derived data-field="slide14.resumoLtv">R$ 15.000</div>
            <div class="cac-kpi-hint" data-cac-derived data-field="slide14.resumoReceitaAno">R$ 1.500/ano · ROA</div>
          </div>
          <div class="cac-kpi-card">
            <div class="cac-kpi-label">LTV / CAC</div>
            <div class="cac-kpi-value gold" data-cac-derived data-field="slide14.resumoLtvCac">5,0×</div>
            <div class="cac-kpi-hint" data-cac-derived data-field="slide14.resumoPayback">Payback ~2,0 anos</div>
          </div>
        </div>

        <p class="econ-formula-note">CAC mídia = CPL ÷ conv. &nbsp;·&nbsp; SDR e assessor = custo anual ÷ clientes novos &nbsp;·&nbsp; CAC total = mídia + SDR + assessor &nbsp;·&nbsp; LTV = (ticket × ROA) ÷ churn</p>

        <div class="scenario-table-wrap cac-table-wrap">
          <table class="scenario-table cac-table">
            <thead>
              <tr>
                <th></th>
                <th data-field="slide14.scenario1Name">Conservador</th>
                <th class="active" data-field="slide14.scenario2Name">Base</th>
                <th data-field="slide14.scenario3Name">Acelerado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CAC mídia</td>
                <td data-cac-derived data-field="slide14.s1CacMidia">R$ 4.500</td>
                <td class="active" data-cac-derived data-field="slide14.s2CacMidia">R$ 1.500</td>
                <td data-cac-derived data-field="slide14.s3CacMidia">R$ 667</td>
              </tr>
              <tr>
                <td>(+) SDR / cliente</td>
                <td data-cac-derived data-field="slide14.s1SdrCliente">R$ 1.909</td>
                <td class="active" data-cac-derived data-field="slide14.s2SdrCliente">R$ 627</td>
                <td data-cac-derived data-field="slide14.s3SdrCliente">R$ 282</td>
              </tr>
              <tr>
                <td>(+) Assessor / cliente</td>
                <td data-cac-derived data-field="slide14.s1AssessorCliente">R$ 2.727</td>
                <td class="active" data-cac-derived data-field="slide14.s2AssessorCliente">R$ 896</td>
                <td data-cac-derived data-field="slide14.s3AssessorCliente">R$ 403</td>
              </tr>
              <tr class="scenario-highlight">
                <td>CAC total (R$)</td>
                <td data-cac-derived data-field="slide14.s1Cac">R$ 9.136</td>
                <td class="active" data-cac-derived data-field="slide14.s2Cac">R$ 3.023</td>
                <td data-cac-derived data-field="slide14.s3Cac">R$ 1.352</td>
              </tr>
              <tr>
                <td>CAC total (% ticket)</td>
                <td data-cac-derived data-field="slide14.s1CacPct">3,0%</td>
                <td class="active" data-cac-derived data-field="slide14.s2CacPct">1,0%</td>
                <td data-cac-derived data-field="slide14.s3CacPct">0,5%</td>
              </tr>
              <tr>
                <td>Receita ROA / ano</td>
                <td data-cac-derived data-field="slide14.s1ReceitaAno">R$ 1.500</td>
                <td class="active" data-cac-derived data-field="slide14.s2ReceitaAno">R$ 1.500</td>
                <td data-cac-derived data-field="slide14.s3ReceitaAno">R$ 1.500</td>
              </tr>
              <tr class="scenario-highlight">
                <td>LTV receita</td>
                <td data-cac-derived data-field="slide14.s1Ltv">R$ 15.000</td>
                <td class="active" data-cac-derived data-field="slide14.s2Ltv">R$ 15.000</td>
                <td data-cac-derived data-field="slide14.s3Ltv">R$ 15.000</td>
              </tr>
              <tr class="scenario-highlight">
                <td>LTV / CAC</td>
                <td data-cac-derived data-field="slide14.s1LtvCac">1,6×</td>
                <td class="active" data-cac-derived data-field="slide14.s2LtvCac">5,0×</td>
                <td data-cac-derived data-field="slide14.s3LtvCac">11,1×</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="insight-box light econ-insight" data-field="slide14.insight">
          Cenário base · CAC total R$ 3.023 (mídia R$ 1.500 · SDR R$ 627 · assessor R$ 896) · LTV R$ 15.000 com churn 10% a.a. · relação 5×.
        </div>
      </div>
    </section>

    <!-- SLIDE 14 — FECHAMENTO -->
    <section class="slide slide-closing" data-slide="14" data-title="Fechamento" data-label="Encerramento">
      <div class="cover-accent" style="right:auto; left:-100px; opacity:0.5;"></div>
      <div class="cover-accent-2" style="right:auto; left:60px; opacity:0.3;"></div>
      <div class="slide-inner">
        <div class="cover-label" style="margin-bottom:32px;">Alta Vista · Growth</div>
        <h2 class="closing-headline" data-field="slide13.headline">Alta Vista = <em>máquina de captação</em> previsível</h2>
        <p class="closing-sub" data-field="slide13.subhead">Somas.io · Ponto de Vista · Influenciadores · LPs & Eventos</p>
        <p class="closing-quote" data-field="slide13.quote">"O futuro não é gastar mais em mídia.<br>É captar melhor — com conteúdo, simuladores e conversão inteligente."</p>
      </div>
    </section>

  </div>

  <nav class="nav-controls">
    <button class="nav-btn nav-btn-present" id="presentBtnNav" type="button" aria-label="Apresentar em tela cheia">
      <svg viewBox="0 0 24 24"><path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/></svg>
      Apresentar
    </button>
    <button class="nav-btn" id="prevBtn" aria-label="Anterior">←</button>
    <div class="nav-dots" id="navDots"></div>
    <span class="nav-counter" id="navCounter">1 / 14</span>
    <button class="nav-btn" id="nextBtn" aria-label="Próximo">→</button>
  </nav>

    </main>
  </div>

  <script>
    document.addEventListener('presentation-fields-applied', function () {
      document.querySelectorAll('[data-bar-field]').forEach(function (bar) {
        var key = bar.getAttribute('data-bar-field');
        var field = document.querySelector('[data-field="' + key + '"]');
        var val = field ? parseInt(field.textContent, 10) : parseInt(bar.style.width, 10);
        if (!isNaN(val)) bar.style.width = Math.min(100, Math.max(0, val)) + '%';
      });
    });
  </script>
