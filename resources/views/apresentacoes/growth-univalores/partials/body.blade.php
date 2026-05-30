
  <button class="sidebar-toggle" id="sidebarToggle" aria-label="Menu de slides">☰</button>

  <button class="exit-fullscreen-btn" id="exitFullscreenBtn" aria-label="Sair da tela cheia">
    <svg viewBox="0 0 24 24"><path d="M8 3v3a2 2 0 01-2 2H3m18 0h-3a2 2 0 01-2-2V3m0 18v-3a2 2 0 012-2h3M3 16h3a2 2 0 012 2v3"/></svg>
    Sair da apresentação
  </button>

  <div class="app-shell">
    <aside class="slide-sidebar" id="slideSidebar">
      <div class="sidebar-header">
        <div class="sidebar-brand">Univalores</div>
        <div class="sidebar-title">Growth</div>
        <div class="sidebar-meta">13 slides · Apresentação Executiva</div>
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
        <h1 class="cover-title" data-field="slide1.coverTitle">Growth<br>Univalores</h1>
        <p class="cover-subtitle" data-field="slide1.coverSubtitle">Como construir uma máquina previsível de atração de consultores</p>
        <div class="cover-tagline">
          <span data-field="slide1.coverTagline1">Formação de consultores</span>
          <span class="sep"></span>
          <span data-field="slide1.coverTagline2">baseada no The Way</span>
        </div>
        <div class="cover-footer">Univalores · 2026</div>
      </div>
      <svg class="cover-visual" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="190" cy="190" r="180" stroke="rgba(230,148,0,0.15)" stroke-width="1"/>
        <circle cx="190" cy="190" r="140" stroke="rgba(230,148,0,0.1)" stroke-width="1"/>
        <circle cx="190" cy="190" r="100" stroke="rgba(230,148,0,0.08)" stroke-width="1"/>
        <rect x="80" y="120" width="220" height="140" rx="8" fill="rgba(255,255,255,0.04)" stroke="rgba(230,148,0,0.25)" stroke-width="1"/>
        <rect x="95" y="135" width="80" height="6" rx="3" fill="rgba(230,148,0,0.6)"/>
        <rect x="95" y="150" width="120" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
        <rect x="95" y="162" width="100" height="4" rx="2" fill="rgba(255,255,255,0.1)"/>
        <rect x="95" y="190" width="190" height="50" rx="4" fill="rgba(230,148,0,0.08)" stroke="rgba(230,148,0,0.2)" stroke-width="1"/>
        <polyline points="105,230 130,210 155,218 180,195 205,200 230,185 255,190 275,175" stroke="#e69400" stroke-width="2" fill="none"/>
        <circle cx="130" cy="210" r="3" fill="#e69400"/>
        <circle cx="180" cy="195" r="3" fill="#e69400"/>
        <circle cx="230" cy="185" r="3" fill="#e69400"/>
        <circle cx="275" cy="175" r="3" fill="#e69400"/>
        <rect x="95" y="250" width="55" height="30" rx="4" fill="rgba(255,255,255,0.05)"/>
        <rect x="160" y="250" width="55" height="30" rx="4" fill="rgba(255,255,255,0.05)"/>
        <rect x="225" y="250" width="55" height="30" rx="4" fill="rgba(230,148,0,0.15)" stroke="rgba(230,148,0,0.3)" stroke-width="1"/>
        <path d="M190 60 L200 85 L190 80 L180 85 Z" fill="rgba(230,148,0,0.4)"/>
        <text x="190" y="55" text-anchor="middle" fill="rgba(230,148,0,0.6)" font-size="10" font-family="Roboto">CRESCIMENTO</text>
      </svg>
    </section>

    <!-- SLIDE 2 — EXECUTIVE SUMMARY -->
    <section class="slide" data-slide="2" data-title="Executive Summary" data-label="Visão geral">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">02 / 13</div>
        </div>
        <div class="label">Executive Summary</div>
        <h2 class="headline" data-field="slide2.headline">A Univalores pode transformar o The Way em uma máquina previsível de formação, aquisição e retenção de consultores.</h2>
        <p class="subhead" style="max-width:900px;" data-field="slide2.subhead">Hoje a expansão trava na Alta Vista — na Univalores, temos diferencial real para crescer.</p>
        <div class="pillars" style="margin-top: 40px;">
          <div class="pillar">
            <div class="pillar-box highlight">
              <div class="pillar-num">01</div>
              <div class="pillar-name" style="color:#fff;">The Way</div>
              <p class="card-text" style="margin-top:10px;color:var(--gray-300);">Plataforma de formação + IA</p>
            </div>
          </div>
          <div class="pillar-arrow">→</div>
          <div class="pillar">
            <div class="pillar-box">
              <div class="pillar-num">02</div>
              <div class="pillar-name">Formação prática</div>
              <p class="card-text" style="margin-top:10px;">Programa integrado à plataforma</p>
            </div>
          </div>
          <div class="pillar-arrow">→</div>
          <div class="pillar">
            <div class="pillar-box">
              <div class="pillar-num">03</div>
              <div class="pillar-name">Monetização</div>
              <p class="card-text" style="margin-top:10px;">Prateleira + suporte comercial</p>
            </div>
          </div>
        </div>
        <div style="margin-top: 32px; display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px;">
          <div class="insight-box" style="text-align:center; border-left:none; border-top: 3px solid var(--gold);" data-field="slide2.insight1">
            <strong>The Way</strong> → base da formação
          </div>
          <div class="insight-box light" style="text-align:center; border-left:none; border-top: 3px solid var(--gold);" data-field="slide2.insight2">
            <strong>Aprender fazendo</strong> → ativa e qualifica
          </div>
          <div class="insight-box light" style="text-align:center; border-left:none; border-top: 3px solid var(--navy);" data-field="slide2.insight3">
            <strong>Univalores</strong> → monetiza e retém
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 3 — DESAFIO DE EXPANSÃO -->
    <section class="slide" data-slide="3" data-title="Desafio de Expansão" data-label="Gargalo estratégico">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">03 / 13</div>
        </div>
        <div class="label">Desafio de Expansão · Grupo Alta Vista</div>
        <h2 class="headline" data-field="slide3.headline">O gargalo de expansão hoje é a falta de diferencial da Alta Vista para trazer novos assessores</h2>
        <div class="compare-grid">
          <div class="compare-col muted">
            <div class="compare-brand">Hoje</div>
            <div class="compare-name">Alta Vista Investimentos</div>
            <div class="compare-status weak">Diferencial limitado</div>
            <ul class="compare-list">
              <li>
                <span class="icon icon-minus"><svg viewBox="0 0 24 24"><path d="M18 12H6"/></svg></span>
                Dificuldade em mostrar diferencial real para novos assessores
              </li>
              <li>
                <span class="icon icon-minus"><svg viewBox="0 0 24 24"><path d="M18 12H6"/></svg></span>
                Proposta de valor similar ao restante do mercado
              </li>
              <li>
                <span class="icon icon-minus"><svg viewBox="0 0 24 24"><path d="M18 12H6"/></svg></span>
                Recrutamento sem vantagem estrutural clara — expansão estagnada
              </li>
            </ul>
          </div>
          <div class="compare-divider">→</div>
          <div class="compare-col highlight">
            <div class="compare-brand">Resposta</div>
            <div class="compare-name">Univalores</div>
            <div class="compare-status strong">Diferencial real</div>
            <ul class="compare-list">
              <li>
                <span class="icon icon-check"><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg></span>
                Repasse competitivo — proposta tangível para o consultor
              </li>
              <li>
                <span class="icon icon-check"><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg></span>
                Prateleira ampla de produtos — monetização imediata
              </li>
              <li>
                <span class="icon icon-check"><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg></span>
                Base ideal para formar, ativar e reter planejadores
              </li>
            </ul>
          </div>
        </div>
        <div class="compare-arrow-label">
          <span data-field="slide3.footer">Por isso o foco de expansão está na Univalores — com formação no The Way como acelerador</span>
        </div>
      </div>
    </section>

    <!-- SLIDE 4 — O PROBLEMA DO MERCADO -->
    <section class="slide" data-slide="4" data-title="Problema do Mercado" data-label="Diagnóstico">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">04 / 13</div>
        </div>
        <div class="label">Diagnóstico de Mercado</div>
        <h2 class="headline" data-field="slide4.headline">Além do gargalo da Alta Vista, o consultor financeiro enfrenta 3 gaps estruturais</h2>
        <div class="grid-2" style="margin-top: 28px; flex: 1;">
          <div class="grid-3" style="grid-template-columns: 1fr; gap: 12px;">
            <div class="card" style="display:flex; gap:16px; align-items:flex-start;">
              <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg></div>
              <div>
                <div class="card-title">Formação insuficiente</div>
                <div class="card-text">Pouca educação prática de planejamento patrimonial.</div>
              </div>
            </div>
            <div class="card" style="display:flex; gap:16px; align-items:flex-start;">
              <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg></div>
              <div>
                <div class="card-title">Baixa produtividade</div>
                <div class="card-text">Muito trabalho manual e pouca tecnologia.</div>
              </div>
            </div>
            <div class="card" style="display:flex; gap:16px; align-items:flex-start;">
              <div class="card-icon"><svg viewBox="0 0 24 24"><path d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg></div>
              <div>
                <div class="card-title">Dificuldade de crescimento</div>
                <div class="card-text">Falta de suporte comercial e monetização.</div>
              </div>
            </div>
          </div>
          <div class="opp-block">
            <div class="opp-label">Oportunidade</div>
            <p class="opp-text">Poucos players ajudam o consultor a crescer de verdade.</p>
            <div class="deco-line" style="margin-top: 24px;"></div>
            <p style="font-size: 13px; color: rgba(255,255,255,0.5); line-height: 1.6;" data-field="slide4.opportunity">A Univalores resolve os dois problemas: diferencial para atrair assessores + plataforma para formar e reter.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 5 — A TESE UNIVALORES -->
    <section class="slide" data-slide="5" data-title="A Tese Univalores" data-label="Proposta central">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">05 / 13</div>
        </div>
        <div class="grid-2" style="flex:1; align-items:center;">
          <div>
            <div class="label">A Tese Univalores</div>
            <h2 class="headline headline-lg" data-field="slide5.headline">Não vamos apenas recrutar consultores.<br><span style="color:var(--gold);">Vamos formar os melhores.</span></h2>
            <div class="deco-line"></div>
            <div class="insight-box light" style="margin-top: 20px;" data-field="slide5.insight">
              O programa de formação é construído sobre o The Way — aprender e produzir na mesma plataforma.
            </div>
          </div>
          <div class="chain">
            <div class="chain-item primary">
              <div class="chain-title">Formação no The Way</div>
              <div class="chain-sub">Aprender fazendo · IA integrada</div>
            </div>
            <div class="chain-arrow">↓</div>
            <div class="chain-item">
              <div class="chain-title">Produtividade</div>
              <div class="chain-sub">Consultor já operando a ferramenta</div>
            </div>
            <div class="chain-arrow">↓</div>
            <div class="chain-item">
              <div class="chain-title">Monetização</div>
              <div class="chain-sub">Prateleira + suporte</div>
            </div>
            <div class="chain-arrow">↓</div>
            <div class="chain-item primary">
              <div class="chain-title">Retenção</div>
              <div class="chain-sub">Consultor de longo prazo</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 6 — CURSO DE FORMAÇÃO -->
    <section class="slide" data-slide="6" data-title="Formação no The Way" data-label="Programa integrado">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">06 / 13</div>
        </div>
        <div class="label">Programa de Formação · The Way</div>
        <h2 class="headline" data-field="slide6.headline">Formação baseada no The Way</h2>
        <p class="subhead" style="margin-top:0;margin-bottom:4px;" data-field="slide6.subhead">O consultor aprende na mesma plataforma que usará para atender clientes.</p>
        <div class="module-grid">
          <div class="module"><span class="module-num">1</span><span class="module-name">Planejamento Patrimonial</span></div>
          <div class="module"><span class="module-num">2</span><span class="module-name">Gestão Tributária</span></div>
          <div class="module"><span class="module-num">3</span><span class="module-name">Planejamento Sucessório</span></div>
          <div class="module"><span class="module-num">4</span><span class="module-name">Seguros & Proteção Patrimonial</span></div>
          <div class="module"><span class="module-num">5</span><span class="module-name">Crédito Inteligente</span></div>
          <div class="module"><span class="module-num">6</span><span class="module-name">Gestão de Ativos</span></div>
          <div class="module"><span class="module-num">7</span><span class="module-name">IA aplicada ao consultor</span></div>
          <div class="module"><span class="module-num">8</span><span class="module-name">Como vender planejamento financeiro</span></div>
        </div>
        <div style="display:flex; align-items:center; justify-content:space-between; margin-top: 24px;">
          <div class="insight-box light" style="flex:1; margin-right: 32px;" data-field="slide6.insight">
            Não é curso à parte.<br><strong>É formação prática dentro do The Way — filtro de qualidade e geração de autoridade.</strong>
          </div>
          <div class="seal">
            <div class="seal-text">Certificação</div>
            <div class="seal-sub">The Way · Univalores</div>
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 7 — THE WAY -->
    <section class="slide" data-slide="7" data-title="The Way" data-label="Plataforma central">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">07 / 13</div>
        </div>
        <div class="grid-2" style="flex:1; align-items:center; gap:32px; grid-template-columns: 0.85fr 1.15fr;">
          <div>
            <div class="label">Plataforma Central</div>
            <h2 class="headline" data-field="slide7.headline">The Way — onde o consultor forma e produz</h2>
            <ul class="feature-list" style="margin-top: 24px;">
              <li>Programa de formação integrado</li>
              <li>Patrimônio & Liquidez</li>
              <li>Fluxo de Caixa & Retenção</li>
              <li>Performance & Engajamento</li>
              <li>Assistente comercial com IA</li>
            </ul>
            <div class="insight-box" style="margin-top: 24px;" data-field="slide7.insight">
              Uma única plataforma: formar, praticar e produzir — com IA em cada etapa.
            </div>
          </div>
          <div class="platform-screenshot">
            <div class="platform-screenshot-bar">
              <div class="mockup-dot gold"></div>
              <div class="mockup-dot"></div>
              <div class="mockup-dot"></div>
              <span>The Way · Plataforma</span>
            </div>
            <div class="platform-screenshot-frame">
              <img src="{{ asset('apresentacoes/assets/the-way-dashboard.png') }}" alt="The Way — dashboard da plataforma para consultores">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 8 — NOVO FUNIL -->
    <section class="slide" data-slide="8" data-title="Novo Funil de Growth" data-label="Conversão">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">08 / 13</div>
        </div>
        <div class="label">Growth Funnel</div>
        <h2 class="headline" data-field="slide8.headline">A formação no The Way é o novo topo do funil</h2>
        <div class="flow" style="margin-top: 36px;">
          <div class="flow-step">
            <div class="flow-box">
              <div class="step-label">Awareness</div>
              <div class="step-name">Conteúdo</div>
              <div class="step-sub">Ponto de Vista</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box active">
              <div class="step-label">Interesse + Ativação</div>
              <div class="step-name">Formação no The Way</div>
              <div class="step-sub">Aprender fazendo</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box">
              <div class="step-label">Qualificação</div>
              <div class="step-name">Reunião de Fit</div>
              <div class="step-sub">Alinhamento</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box">
              <div class="step-label">Conversão</div>
              <div class="step-name">Onboarding</div>
              <div class="step-sub">Integração</div>
            </div>
          </div>
          <div class="flow-arrow">→</div>
          <div class="flow-step">
            <div class="flow-box" style="background:var(--navy);border-color:var(--navy);">
              <div class="step-label" style="color:var(--gold);">Resultado</div>
              <div class="step-name" style="color:#fff;">Produção</div>
              <div class="step-sub" style="color:var(--gray-300);">Receita</div>
            </div>
          </div>
        </div>
        <div class="insight-box light" style="margin-top: 36px; text-align: center; border-left: none; border-top: 3px solid var(--gold);" data-field="slide8.insight">
          O consultor já domina a ferramenta antes da conversão — a venda acontece após geração de valor.
        </div>
      </div>
    </section>

    <!-- SLIDE 9 — MÁQUINA DE AQUISIÇÃO -->
    <section class="slide" data-slide="9" data-title="Máquina de Aquisição" data-label="Multicanal">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">09 / 13</div>
        </div>
        <div class="label">Aquisição Multicanal</div>
        <h2 class="headline" data-field="slide9.headline">Growth previsível e multicanal</h2>
        <div class="acq-visual">
          <div class="acq-sources">
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/></svg></div>
              <div class="acq-source-name">Conteúdo</div>
              <div class="acq-source-sub">Ponto de Vista</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg></div>
              <div class="acq-source-name">Performance</div>
              <div class="acq-source-sub">Meta · Google · LinkedIn</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg></div>
              <div class="acq-source-name">Referral</div>
              <div class="acq-source-sub">Indicação</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-icon"><svg viewBox="0 0 24 24"><path d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.375c0-2.278-3.016-4.375-7.5-4.375S4.875 4.097 4.875 6.375v1.136c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193A48.712 48.712 0 003 18.75v1.088c0 .884.715 1.6 1.6 1.6h.6a48.74 48.74 0 0110.8 0h.6c.884 0 1.6-.716 1.6-1.6v-1.088a48.712 48.712 0 00-1.015-3.192"/></svg></div>
              <div class="acq-source-name">Comunidade</div>
              <div class="acq-source-sub">Engajamento</div>
            </div>
          </div>
          <div class="acq-converge">
            <div class="acq-target">
              <div class="acq-target-name">Formação no The Way</div>
              <div class="acq-target-sub">Hub de formação, qualificação e conversão</div>
            </div>
          </div>
        </div>
        <div class="insight-box light" style="margin-top: 28px; text-align:center; border-left:none; border-top:3px solid var(--navy);" data-field="slide9.insight">
          A educação reduz CAC e aumenta qualidade dos consultores.
        </div>
      </div>
    </section>

    <!-- SLIDE 10 — FLYWHEEL -->
    <section class="slide" data-slide="10" data-title="Growth Flywheel" data-label="Crescimento composto">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">10 / 13</div>
        </div>
        <div class="flywheel-slide-body">
          <div style="text-align:center;">
            <div class="label">Growth Flywheel</div>
            <h2 class="headline" data-field="slide10.headline">Cada ciclo fortalece o próximo</h2>
            <p class="subhead" style="margin: 8px auto 0; max-width: 640px;" data-field="slide10.subhead">Formação no The Way alimenta um loop de crescimento composto — mais difícil de replicar a cada volta.</p>
          </div>
          <div class="flywheel-premium">
            <svg class="flywheel-arrows" viewBox="0 0 920 360" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="460" cy="180" r="138" stroke="rgba(230,148,0,0.18)" stroke-width="1.5" stroke-dasharray="6 5"/>
              <circle cx="460" cy="180" r="112" stroke="rgba(24,24,36,0.06)" stroke-width="1"/>
              <defs>
                <marker id="fw-arrow" markerWidth="8" markerHeight="8" refX="6" refY="4" orient="auto">
                  <path d="M0 0 L8 4 L0 8 Z" fill="#e69400"/>
                </marker>
              </defs>
              <path d="M460 42 A138 138 0 0 1 579 110" stroke="#e69400" stroke-width="1.5" fill="none" marker-end="url(#fw-arrow)" opacity="0.7"/>
              <path d="M579 110 A138 138 0 0 1 579 250" stroke="#e69400" stroke-width="1.5" fill="none" marker-end="url(#fw-arrow)" opacity="0.7"/>
              <path d="M579 250 A138 138 0 0 1 460 318" stroke="#e69400" stroke-width="1.5" fill="none" marker-end="url(#fw-arrow)" opacity="0.7"/>
              <path d="M460 318 A138 138 0 0 1 341 250" stroke="#e69400" stroke-width="1.5" fill="none" marker-end="url(#fw-arrow)" opacity="0.7"/>
              <path d="M341 250 A138 138 0 0 1 341 110" stroke="#e69400" stroke-width="1.5" fill="none" marker-end="url(#fw-arrow)" opacity="0.7"/>
              <path d="M341 110 A138 138 0 0 1 460 42" stroke="#e69400" stroke-width="1.5" fill="none" marker-end="url(#fw-arrow)" opacity="0.7"/>
            </svg>
            <div class="flywheel-core">
              <div class="flywheel-core-icon">↻</div>
              <div class="flywheel-core-label">Growth<br>Flywheel</div>
              <div class="flywheel-core-sub">Univalores</div>
            </div>
            <div class="fw-node highlight" style="--angle:-90">
              <div class="fw-node-num">01</div>
              <div class="fw-node-title">Mais alunos</div>
              <div class="fw-node-sub">Formação no The Way</div>
            </div>
            <div class="fw-node" style="--angle:-30">
              <div class="fw-node-num">02</div>
              <div class="fw-node-title">Mais consultores</div>
              <div class="fw-node-sub">Qualificados e ativados</div>
            </div>
            <div class="fw-node" style="--angle:30">
              <div class="fw-node-num">03</div>
              <div class="fw-node-title">Mais produção</div>
              <div class="fw-node-sub">Receita recorrente</div>
            </div>
            <div class="fw-node" style="--angle:90">
              <div class="fw-node-num">04</div>
              <div class="fw-node-title">Mais cases</div>
              <div class="fw-node-sub">Prova social</div>
            </div>
            <div class="fw-node" style="--angle:150">
              <div class="fw-node-num">05</div>
              <div class="fw-node-title">Mais conteúdo</div>
              <div class="fw-node-sub">Ponto de Vista</div>
            </div>
            <div class="fw-node" style="--angle:210">
              <div class="fw-node-num">06</div>
              <div class="fw-node-title">Mais autoridade</div>
              <div class="fw-node-sub">Marca fortalecida</div>
            </div>
          </div>
          <div class="flywheel-footer">
            <div class="flywheel-stat">
              <div class="flywheel-stat-val gold">↓ CAC</div>
              <div class="flywheel-stat-label">Custo cai a cada ciclo</div>
            </div>
            <div class="flywheel-stat">
              <div class="flywheel-stat-val">↑ Qualidade</div>
              <div class="flywheel-stat-label">Consultores mais preparados</div>
            </div>
            <div class="flywheel-stat">
              <div class="flywheel-stat-val gold">↑ LTV</div>
              <div class="flywheel-stat-label">Retenção de longo prazo</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 11 — KPIs -->
    <section class="slide" data-slide="11" data-title="KPIs & Economics" data-label="Previsibilidade">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">11 / 13</div>
        </div>
        <div class="label">Economics & Previsibilidade</div>
        <h2 class="headline" data-field="slide11.headline">Growth orientado à previsibilidade</h2>
        <div class="kpi-grid">
          <div class="kpi-card">
            <div class="kpi-value gold">↓ 40%</div>
            <div class="kpi-label">CAC Consultor</div>
            <div class="kpi-trend">vs. recrutamento tradicional</div>
          </div>
          <div class="kpi-card">
            <div class="kpi-value">45 dias</div>
            <div class="kpi-label">Tempo até 1ª produção</div>
            <div class="kpi-trend">↓ com formação no The Way</div>
          </div>
          <div class="kpi-card">
            <div class="kpi-value">6 meses</div>
            <div class="kpi-label">Payback</div>
            <div class="kpi-trend">modelo eficiente</div>
          </div>
          <div class="kpi-card">
            <div class="kpi-value gold">85%+</div>
            <div class="kpi-label">Retenção</div>
            <div class="kpi-trend">consultores formados</div>
          </div>
          <div class="kpi-card">
            <div class="kpi-value">3.2x</div>
            <div class="kpi-label">Produção média</div>
            <div class="kpi-trend">vs. consultor não formado</div>
          </div>
          <div class="kpi-card">
            <div class="kpi-value gold">R$ 480K</div>
            <div class="kpi-label">LTV do consultor</div>
            <div class="kpi-trend">horizonte 36 meses</div>
          </div>
        </div>
        <div class="insight-box" style="margin-top: 28px; text-align:center; border-left:none; border-top:3px solid var(--gold);" data-field="slide11.insight">
          Modelo orientado a eficiência econômica.
        </div>
      </div>
    </section>

    <!-- SLIDE 12 — ROADMAP -->
    <section class="slide" data-slide="12" data-title="Roadmap 90 Dias" data-label="Implementação">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Uni<span>valores</span> · Growth</div>
          <div class="slide-num">12 / 13</div>
        </div>
        <div class="label">Implementação</div>
        <h2 class="headline" data-field="slide12.headline">Plano de implementação — 90 dias</h2>
        <div class="timeline">
          <div class="timeline-phase">
            <div class="timeline-dot"></div>
            <div class="timeline-period">0 – 30 dias</div>
            <ul class="timeline-items">
              <li>Programa piloto no The Way</li>
              <li>Landing page</li>
              <li>CRM</li>
              <li>Primeira campanha</li>
            </ul>
          </div>
          <div class="timeline-phase">
            <div class="timeline-dot"></div>
            <div class="timeline-period">30 – 60 dias</div>
            <ul class="timeline-items">
              <li>Turma piloto</li>
              <li>Módulos de formação</li>
              <li>Webinars</li>
            </ul>
          </div>
          <div class="timeline-phase">
            <div class="timeline-dot"></div>
            <div class="timeline-period">60 – 90 dias</div>
            <ul class="timeline-items">
              <li>Escala</li>
              <li>Referral</li>
              <li>Comunidade</li>
              <li>Automação</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 13 — FECHAMENTO -->
    <section class="slide slide-closing" data-slide="13" data-title="Fechamento" data-label="Encerramento">
      <div class="cover-accent" style="right:auto; left:-100px; opacity:0.5;"></div>
      <div class="cover-accent-2" style="right:auto; left:60px; opacity:0.3;"></div>
      <div class="slide-inner">
        <div class="cover-label" style="margin-bottom:32px;">Univalores · Growth</div>
        <h2 class="closing-headline" data-field="slide13.headline">Univalores = <em>Plataforma de crescimento</em> do consultor</h2>
        <p class="closing-sub" data-field="slide13.subhead">The Way · Formação · Monetização</p>
        <p class="closing-quote" data-field="slide13.quote">"O futuro não é trazer mais consultores.<br>É formar consultores melhores — e ajudá-los a produzir mais."</p>
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
    <span class="nav-counter" id="navCounter">1 / 13</span>
    <button class="nav-btn" id="nextBtn" aria-label="Próximo">→</button>
  </nav>

    </main>
  </div>

