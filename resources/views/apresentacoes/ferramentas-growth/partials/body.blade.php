
  <button class="sidebar-toggle" id="sidebarToggle" aria-label="Menu de slides">☰</button>

  <button class="exit-fullscreen-btn" id="exitFullscreenBtn" aria-label="Sair da tela cheia">
    <svg viewBox="0 0 24 24"><path d="M8 3v3a2 2 0 01-2 2H3m18 0h-3a2 2 0 01-2-2V3m0 18v-3a2 2 0 012-2h3M3 16h3a2 2 0 012 2v3"/></svg>
    Sair da apresentação
  </button>

  <div class="app-shell">
    <aside class="slide-sidebar" id="slideSidebar">
      <div class="sidebar-header">
        <img class="sidebar-logo" src="{{ asset('img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png') }}" alt="Alta Vista Investimentos">
        <span class="sidebar-kicker">Growth · Stack</span>
        <div class="sidebar-title">Ferramentas de Growth</div>
        <div class="sidebar-meta">11 slides</div>
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
        <div class="cover-label">Apresentação Interna · Growth</div>
        <img class="cover-logo" src="{{ asset('img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png') }}" alt="Alta Vista Investimentos">
        <h1 class="cover-title" data-field="slide1.coverTitle">Ferramentas<br>de Growth</h1>
        <p class="cover-subtitle" data-field="slide1.coverSubtitle">O stack operacional que sustenta campanhas, leads e conteúdo hoje</p>
        <div class="cover-tagline">
          <span data-field="slide1.coverTagline1">Mailchimp · HubSpot · YouTube · Instagram · Trade Insights · Cursor · Tráfego</span>
          <span class="sep"></span>
          <span data-field="slide1.coverTagline2">visão do time</span>
        </div>
        <div class="cover-footer">Alta Vista Investimentos · 2026</div>
      </div>
      <div class="cover-visual-logo" aria-hidden="true">
        <img src="{{ asset('img/Logo_Av.png') }}" alt="">
      </div>
    </section>

    <!-- SLIDE 2 — VISÃO GERAL -->
    <section class="slide" data-slide="2" data-title="Visão geral" data-label="Stack">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">02 / 11</div>
        </div>
        <div class="label">Stack operacional</div>
        <h2 class="headline" data-field="slide2.headline">Sete peças formam o dia a dia do Growth — cada uma com um papel claro no funil.</h2>
        <p class="subhead" style="max-width:900px;" data-field="slide2.subhead">Da produção da campanha ao disparo, captura de leads e leitura de performance de conteúdo.</p>

        <div style="display:grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-top: 24px;">
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">01</div>
            <div class="card-title" style="margin-top:10px;">Mailchimp</div>
            <div class="card-text" data-field="slide2.t1">Disparo de e-mails · base Tech</div>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">02</div>
            <div class="card-title" style="margin-top:10px;">HubSpot</div>
            <div class="card-text" data-field="slide2.t2">Central de leads das campanhas</div>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">03</div>
            <div class="card-title" style="margin-top:10px;">YouTube</div>
            <div class="card-text" data-field="slide2.t3">Analytics de views de vídeo</div>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">04</div>
            <div class="card-title" style="margin-top:10px;">Instagram</div>
            <div class="card-text" data-field="slide2.t4">Alcance e engajamento social</div>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">05</div>
            <div class="card-title" style="margin-top:10px;">Trade Insights</div>
            <div class="card-text" data-field="slide2.t5">Portal de conteúdos proprietário</div>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">06</div>
            <div class="card-title" style="margin-top:10px;">Cursor</div>
            <div class="card-text" data-field="slide2.t6">Campanhas, LPs e templates</div>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">07</div>
            <div class="card-title" style="margin-top:10px;">Gestão de Tráfego</div>
            <div class="card-text" data-field="slide2.t7">Mídia paga · CPL e escala</div>
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 3 — MAILCHIMP -->
    <section class="slide" data-slide="3" data-title="Mailchimp" data-label="Ferramenta 01">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">03 / 11</div>
        </div>
        <div class="label">Ferramenta 01 · Mailchimp</div>
        <h2 class="headline" data-field="slide3.headline">Mailchimp — motor de disparo de e-mails</h2>
        <p class="subhead" data-field="slide3.subhead">Templates HTML feitos via Cursor · disparo depende da base segmentada por Tech.</p>

        <div style="display:grid; grid-template-columns: 1.1fr 1fr; gap: 20px; margin-top: 18px;">
          <div>
            <div class="card-title" style="margin-bottom:10px;" data-field="slide3.exTitle">Exemplos no projeto</div>
            <ul class="feature-list" style="font-size:13px;">
              <li data-field="slide3.ex1">Expert XP 2026 · Dia 1 e Dia 2</li>
              <li data-field="slide3.ex2">Ponto de Vista semanal · Carta Mensal</li>
              <li data-field="slide3.ex3">Conexão Alta Vista · Juro Real / Bolsa / Juros</li>
              <li data-field="slide3.ex4">Collar metais · Oportunidade IPCA · Consórcio Week</li>
              <li data-field="slide3.ex5">Onboarding bem-vindo · Eventos (Café Verde, Verde Cedro)</li>
            </ul>
          </div>
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">Dependência crítica</div>
            <div class="card-title" style="margin-top:12px;" data-field="slide3.depTitle">Segmentação via Tech</div>
            <div class="card-text" data-field="slide3.depText">Growth monta o e-mail; Tech libera a audiência certa (perfil, assessor, produto).</div>
            <ul class="feature-list" style="margin-top:14px; font-size:12px;">
              <li data-field="slide3.dep1">Pasta: email-marketing/</li>
              <li data-field="slide3.dep2">comunicados · cartas · eventos · onboarding</li>
            </ul>
          </div>
        </div>

        <div class="insight-box light" style="margin-top: 18px;" data-field="slide3.insight">
          Sem a base segmentada de Tech, o Mailchimp não dispara com precisão — a dependência é operacional, não só técnica.
        </div>
      </div>
    </section>

    <!-- SLIDE 4 — HUBSPOT -->
    <section class="slide" data-slide="4" data-title="HubSpot" data-label="Ferramenta 02">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">04 / 11</div>
        </div>
        <div class="label">Ferramenta 02 · HubSpot</div>
        <h2 class="headline" data-field="slide4.headline">HubSpot — central de leads, ainda com dados limitados</h2>
        <p class="subhead" data-field="slide4.subhead">Formulários embutidos nas LPs · portal 21698044 — falta captação e receita no CRM.</p>

        <div style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-top: 18px;">
          <div class="card source-card">
            <div class="source-card-badge">Hoje</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide4.card1Title">Dados limitados</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide4.lim1">Lead + origem</li>
              <li data-field="slide4.lim2">Sem captação</li>
              <li data-field="slide4.lim3">Sem receita / ticket</li>
            </ul>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">Exemplos de LPs</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide4.exTitle">Formulários ativos</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide4.ex1">Recomenday 2026 · Insurance Day</li>
              <li data-field="slide4.ex2">Verde Cedro II · Café Verde</li>
              <li data-field="slide4.ex3">Guia Juro Real · Previdência</li>
              <li data-field="slide4.ex4">Parceiros (Much, Bragha…)</li>
            </ul>
          </div>
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">Melhoria</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide4.card2Title">Trazer dados ao HubSpot</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide4.imp1">Captação por lead</li>
              <li data-field="slide4.imp2">Receita e ticket</li>
              <li data-field="slide4.imp3">Funil no mesmo lugar</li>
            </ul>
          </div>
        </div>

        <div class="insight-box light" style="margin-top: 18px;" data-field="slide4.insight">
          Hoje a medição depende de interseção de dados entre sistemas. Com mais campos no HubSpot, o Growth mede conversão e retorno sem cruzamento manual.
        </div>
      </div>
    </section>

    <!-- SLIDE 5 — YOUTUBE -->
    <section class="slide" data-slide="5" data-title="YouTube" data-label="Ferramenta 03">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">05 / 11</div>
        </div>
        <div class="label">Ferramenta 03 · YouTube</div>
        <h2 class="headline" data-field="slide5.headline">YouTube — canalização do analytics de conteúdo</h2>
        <p class="subhead" data-field="slide5.subhead">Lives e vídeos rastreados nos e-mails e LPs — termômetro de views e retenção.</p>

        <div style="display:grid; grid-template-columns: 1.15fr 1fr; gap: 20px; margin-top: 18px;">
          <div>
            <div class="card-title" style="margin-bottom:10px;" data-field="slide5.exTitle">Exemplos no projeto</div>
            <ul class="feature-list" style="font-size:13px;">
              <li data-field="slide5.ex1">Conexão · Juro Real (live)</li>
              <li data-field="slide5.ex2">Conexão · Mercado de ações</li>
              <li data-field="slide5.ex3">Conexão · Decisão de juros</li>
              <li data-field="slide5.ex4">Plantão Cripto · Pizza Day</li>
              <li data-field="slide5.ex5">Verde Cedro II · live do evento</li>
            </ul>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">O que monitoramos</div>
            <div class="card-title" style="margin-top:12px;" data-field="slide5.cardTitle">Analytics de views</div>
            <div class="card-text" data-field="slide5.cardText">Links de YouTube entram nos e-mails Conexão e nas LPs de eventos — o Growth lê performance para priorizar pautas e formatos.</div>
          </div>
        </div>

        <div class="insight-box light" style="margin-top: 18px;" data-field="slide5.insight">
          Não é só publicação: é o termômetro de conteúdo. Views e retenção orientam o que merece virar campanha, e-mail ou LP.
        </div>
      </div>
    </section>

    <!-- SLIDE 6 — INSTAGRAM -->
    <section class="slide" data-slide="6" data-title="Instagram" data-label="Ferramenta 04">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">06 / 11</div>
        </div>
        <div class="label">Ferramenta 04 · Instagram</div>
        <h2 class="headline" data-field="slide6ig.headline">Instagram — alcance e engajamento nas redes</h2>
        <p class="subhead" data-field="slide6ig.subhead">Artes e banners do projeto alimentam a distribuição social das campanhas.</p>

        <div style="display:grid; grid-template-columns: 1.15fr 1fr; gap: 20px; margin-top: 18px;">
          <div>
            <div class="card-title" style="margin-bottom:10px;" data-field="slide6ig.exTitle">Exemplos no projeto (artes)</div>
            <ul class="feature-list" style="font-size:13px;">
              <li data-field="slide6ig.ex1">Banner Oportunidade Rara · Renda Fixa IPCA</li>
              <li data-field="slide6ig.ex2">Artes newsletter semanal</li>
              <li data-field="slide6ig.ex3">Artes morning call</li>
              <li data-field="slide6ig.ex4">Arte evento Verde Cedro II</li>
              <li data-field="slide6ig.ex5">Banners institucionais (claro / escuro)</li>
            </ul>
          </div>
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">Papel no funil</div>
            <div class="card-title" style="margin-top:12px;" data-field="slide6ig.cardTitle">Distribuição social</div>
            <div class="card-text" data-field="slide6ig.cardText">Pasta artes/ e resources/views/artes — criativos exportados para redes, apontando para LPs, YouTube e Trade Insights.</div>
          </div>
        </div>

        <div class="insight-box light" style="margin-top: 18px;" data-field="slide6ig.insight">
          Complementa o YouTube: vídeo longo no YT, formato curto e frequência no Instagram — ambos medem alcance e engajamento.
        </div>
      </div>
    </section>

    <!-- SLIDE 7 — TRADE INSIGHTS -->
    <section class="slide" data-slide="7" data-title="Trade Insights" data-label="Ferramenta 05">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">07 / 11</div>
        </div>
        <div class="label">Ferramenta 05 · Trade Insights</div>
        <h2 class="headline" data-field="slide7ti.headline">Trade Insights — portal de conteúdos proprietário</h2>
        <p class="subhead" data-field="slide7ti.subhead">ponto-de-vista.tradeinsights.com — hub próprio com cadastro gratuito.</p>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 18px;">
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">Exemplos</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide7ti.exTitle">No projeto</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide7ti.ex1">LP cadastro · Ponto de Vista plataforma</li>
              <li data-field="slide7ti.ex2">E-mails semanais Ponto de Vista</li>
              <li data-field="slide7ti.ex3">Live Conexão · Juro Real no portal</li>
              <li data-field="slide7ti.ex4">Redirect /guia-juro-real</li>
            </ul>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">Captação</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide7ti.card2Title">Cadastro gratuito</div>
            <div class="card-text" data-field="slide7ti.card2Text">Clientes acessam morning calls, lives e conteúdos da equipe — gera engajamento recorrente e base própria.</div>
          </div>
        </div>

        <div class="insight-box light" style="margin-top: 18px;" data-field="slide7ti.insight">
          Trade Insights é o ativo de conteúdo próprio: reduz dependência de algoritmos de terceiros e aprofunda o relacionamento com a base.
        </div>
      </div>
    </section>

    <!-- SLIDE 8 — CURSOR -->
    <section class="slide" data-slide="8" data-title="Cursor" data-label="Ferramenta 06">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">08 / 11</div>
        </div>
        <div class="label">Ferramenta 06 · Cursor</div>
        <h2 class="headline" data-field="slide6.headline">Cursor — criação de campanhas e landing pages</h2>
        <p class="subhead" data-field="slide6.subhead">Tudo que o Growth produz no repositório AV_LP — e-mails, LPs e artes.</p>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 18px;">
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">LPs no projeto</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide6.exLpTitle">Exemplos</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide6.exLp1">Consórcio Week · Guia Juro Real</li>
              <li data-field="slide6.exLp2">Recomenday 2026 · Insurance Day</li>
              <li data-field="slide6.exLp3">Expert XP Dia 1 / Dia 2</li>
              <li data-field="slide6.exLp4">Eventos Verde Cedro · Café Verde</li>
            </ul>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">E-mails &amp; artes</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide6.exEmTitle">Exemplos</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide6.exEm1">Templates em email-marketing/</li>
              <li data-field="slide6.exEm2">Banners em artes/</li>
              <li data-field="slide6.exEm3">Formulários HubSpot nas LPs</li>
            </ul>
          </div>
        </div>

        <div class="insight-box light" style="margin-top: 18px;" data-field="slide6.insight">
          Cursor é a ferramenta de produção do Growth: campanhas, LPs e e-mails saem daqui para o restante do stack.
        </div>
      </div>
    </section>

    <!-- SLIDE 9 — GESTÃO DE TRÁFEGO -->
    <section class="slide" data-slide="9" data-title="Gestão de Tráfego" data-label="Ferramenta 07">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">09 / 11</div>
        </div>
        <div class="label">Ferramenta 07 · Gestão de Tráfego</div>
        <h2 class="headline" data-field="slide9traf.headline">Gestão de Tráfego — mídia paga que escala a captação</h2>
        <p class="subhead" data-field="slide9traf.subhead">Anúncios levam audiência às LPs · pixels Meta já estão em algumas campanhas do projeto.</p>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 18px;">
          <div class="card source-card highlight-card">
            <div class="source-card-badge gold">Exemplos no projeto</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide9traf.exTitle">Campanhas com tracking</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide9traf.ex1">IRPF webinar · Meta Pixel</li>
              <li data-field="slide9traf.ex2">Impacto Social · Meta Pixel</li>
              <li data-field="slide9traf.ex3">Previdência Portabilidade · Pixel</li>
              <li data-field="slide9traf.ex4">LPs de destino: Consórcio, Juro Real, eventos</li>
            </ul>
          </div>
          <div class="card source-card">
            <div class="source-card-badge">Performance</div>
            <div class="card-title" style="margin-top:10px;" data-field="slide9traf.card2Title">O que otimizamos</div>
            <ul class="feature-list" style="margin-top:10px; font-size:12px;">
              <li data-field="slide9traf.item1">Tráfego pago → LPs (Cursor)</li>
              <li data-field="slide9traf.item2">Leads → HubSpot com origem</li>
              <li data-field="slide9traf.item3">CPL, volume e qualidade</li>
            </ul>
          </div>
        </div>

        <div class="insight-box light" style="margin-top: 18px;" data-field="slide9traf.insight">
          Gestão de Tráfego é o acelerador pago do funil: transforma LP + oferta em volume previsível de leads — desde que a medição no HubSpot acompanhe.
        </div>
      </div>
    </section>

    <!-- SLIDE 10 — FLUXO -->
    <section class="slide" data-slide="10" data-title="Fluxo integrado" data-label="Como se conecta">
      <div class="deco-grid"></div>
      <div class="slide-inner">
        <div class="slide-header">
          <div class="brand-mark">Alta <span>Vista</span> · Growth</div>
          <div class="slide-num">10 / 11</div>
        </div>
        <div class="label">Fluxo operacional</div>
        <h2 class="headline" data-field="slide7.headline">Como as peças se conectam no dia a dia</h2>
        <p class="subhead" data-field="slide7.subhead">Da ideia da campanha até o lead no CRM e a leitura de performance.</p>

        <div class="acq-visual" style="margin-top: 16px;">
          <div class="acq-sources" style="grid-template-columns: repeat(4, 1fr);">
            <div class="acq-source">
              <div class="acq-source-name">Cursor</div>
              <div class="acq-source-sub">Campanha + LP + e-mail</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-name">Gestão de Tráfego</div>
              <div class="acq-source-sub">Mídia paga · CPL</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-name">Mailchimp</div>
              <div class="acq-source-sub">Disparo · base Tech</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-name">HubSpot</div>
              <div class="acq-source-sub">Leads centralizados</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-name">YouTube</div>
              <div class="acq-source-sub">Analytics de views</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-name">Instagram</div>
              <div class="acq-source-sub">Alcance social</div>
            </div>
            <div class="acq-source">
              <div class="acq-source-name">Trade Insights</div>
              <div class="acq-source-sub">Portal proprietário</div>
            </div>
          </div>
        </div>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 22px;">
          <div class="insight-box" data-field="slide7.flow1">
            <strong>1.</strong> Growth cria campanha e LP no Cursor → tráfego pago escala → lead no HubSpot
          </div>
          <div class="insight-box light" data-field="slide7.flow2">
            <strong>2.</strong> Tech segmenta base → Growth dispara no Mailchimp
          </div>
          <div class="insight-box light" data-field="slide7.flow3">
            <strong>3.</strong> YouTube + Instagram geram alcance; Trade Insights aprofunda conteúdo
          </div>
          <div class="insight-box" style="border-left-color: var(--gold);" data-field="slide7.flow4">
            <strong>4.</strong> Melhoria: enriquecer HubSpot (captação, receita) para medir sem cruzar bases
          </div>
        </div>
      </div>
    </section>

    <!-- SLIDE 11 — FECHAMENTO -->
    <section class="slide slide-closing" data-slide="11" data-title="Fechamento" data-label="Encerramento">
      <div class="cover-accent" style="right:auto; left:-100px; opacity:0.5;"></div>
      <div class="cover-accent-2" style="right:auto; left:60px; opacity:0.3;"></div>
      <div class="slide-inner">
        <div class="cover-label" style="margin-bottom:32px;">Alta Vista · Growth</div>
        <h2 class="closing-headline" data-field="slide8.headline">Stack claro.<br><em>Papéis definidos.</em></h2>
        <p class="closing-sub" data-field="slide8.subhead">Mailchimp · HubSpot · YouTube · Instagram · Trade Insights · Cursor · Gestão de Tráfego</p>
        <p class="closing-quote" data-field="slide8.quote">"Próximo passo: enriquecer o HubSpot com captação e receita — medir o funil sem depender de cruzar dados."</p>
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
    <span class="nav-counter" id="navCounter">1 / 11</span>
    <button class="nav-btn" id="nextBtn" aria-label="Próximo">→</button>
  </nav>

    </main>
  </div>
