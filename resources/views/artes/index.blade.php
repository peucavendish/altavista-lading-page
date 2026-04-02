<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artes para rede social – Alta Vista</title>
  <style>
    @font-face {
      font-family: 'GT America';
      src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
      font-weight: 400;
      font-style: normal;
    }
    @font-face {
      font-family: 'GT America';
      src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Medium.ttf') format('truetype');
      font-weight: 500;
      font-style: normal;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      min-height: 100vh;
      background: #0a1628;
      font-family: 'GT America', Arial, Helvetica, sans-serif;
      color: #edf2f7;
      padding: 32px 24px;
    }
    .wrap {
      max-width: 720px;
      margin: 0 auto;
    }
    h1 {
      font-size: 22px;
      font-weight: 700;
      color: #edf2f7;
      margin-bottom: 8px;
    }
    .sub {
      font-size: 14px;
      color: #a0aec0;
      margin-bottom: 18px;
    }
    .filters {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 22px;
      align-items: center;
    }
    .filter-btn {
      appearance: none;
      border: 1px solid #2d3748;
      background: rgba(26, 32, 44, 0.8);
      color: #edf2f7;
      font-size: 12px;
      padding: 7px 12px;
      border-radius: 999px;
      cursor: pointer;
      line-height: 1;
    }
    .filter-btn[aria-pressed="true"] {
      border-color: rgba(201, 162, 39, 0.8);
      color: #f7e3a4;
      box-shadow: 0 0 0 1px rgba(201, 162, 39, 0.25) inset;
    }
    .filter-meta {
      margin-left: auto;
      font-size: 12px;
      color: #a0aec0;
    }
    .card.hidden { display: none; }
    .section-title {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1.6px;
      color: #a0aec0;
      margin: 28px 0 10px;
    }
    .list {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }
    .card {
      background: rgba(26, 32, 44, 0.8);
      border: 1px solid #2d3748;
      border-radius: 14px;
      padding: 18px 22px;
      min-height: 120px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: nowrap;
    }
    .card-info {
      flex: 1;
      min-width: 0;
    }
    .card-info h2 {
      font-size: 16px;
      font-weight: 700;
      color: #edf2f7;
      margin-bottom: 4px;
      line-height: 1.3;
    }
    .card-info .size {
      font-size: 12px;
      color: #718096;
      margin-bottom: 6px;
    }
    .card-info p {
      font-size: 13px;
      color: #a0aec0;
      line-height: 1.5;
    }
    .card-actions {
      flex-shrink: 0;
    }
    .card-actions a {
      display: inline-block;
      padding: 10px 20px;
      background: #c9a227;
      color: #0a1628;
      font-size: 12px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      text-decoration: none;
      border-radius: 8px;
    }
    .card-actions a:hover {
      background: #d4af37;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <h1>Artes para rede social</h1>
    <p class="sub">Banners institucionais e thumbnails Morning Call. Abra o modelo, defina largura e altura e exporte em PNG.</p>
    <div class="filters">
      <button class="filter-btn" type="button" data-size="all" aria-pressed="true">Todos</button>
      <button class="filter-btn" type="button" data-size="1920x1080" aria-pressed="false">1920 × 1080</button>
      <button class="filter-btn" type="button" data-size="1590x500" aria-pressed="false">1590 × 500</button>
      <button class="filter-btn" type="button" data-size="1600x500" aria-pressed="false">1600 × 500</button>
      <button class="filter-btn" type="button" data-size="768x500" aria-pressed="false">768 × 500</button>
      <button class="filter-btn" type="button" data-size="440x500" aria-pressed="false">440 × 500</button>
      <button class="filter-btn" type="button" data-size="1280x720" aria-pressed="false">1280 × 720</button>
      <button class="filter-btn" type="button" data-size="1080x1080" aria-pressed="false">1080 × 1080</button>
      <button class="filter-btn" type="button" data-size="790x1080" aria-pressed="false">790 × 1080</button>
      <span class="filter-meta">Exibindo: <strong id="shownCount">0</strong> de <strong id="totalCount">0</strong></span>
    </div>
    <h2 class="section-title">Banners institucionais</h2>
    <ul class="list">
      <li class="card">
        <div class="card-info">
          <h2>Banner 1 – Institucional escuro</h2>
          <p class="size">Tamanho original: 1080 × 1080 (quadrado)</p>
          <p>Fundo azul escuro, logo centralizada, tagline em dourado. Ideal para feed e stories.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-01') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Banner 2 – Institucional claro</h2>
          <p class="size">Tamanho original: 1080 × 1080 (quadrado)</p>
          <p>Fundo claro com card escuro, logo e frase. Wealth Management e planejamento patrimonial.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-02') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Banner 1 – Institucional escuro (Full HD)</h2>
          <p class="size">Tamanho nativo: 1920 × 1080 (16:9)</p>
          <p>Mesma composição do banner 1 escuro, em formato Full HD para vídeo e apresentações. Textos editáveis e exportação em PNG.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-fullhd-01') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Banner 2 – Institucional claro (Full HD)</h2>
          <p class="size">Tamanho nativo: 1920 × 1080 (16:9)</p>
          <p>Mesma composição do banner 2 claro (card central), em Full HD. Textos editáveis e exportação em PNG.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-fullhd-02') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Banner institucional – Horizontal amplo</h2>
          <p class="size">Tamanho original: 1600 × 500</p>
          <p>Versão institucional panorâmica para header e faixas de destaque.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-institucional-1600x500') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Banner institucional – Médio</h2>
          <p class="size">Tamanho original: 768 × 500</p>
          <p>Versão intermediária para módulos de site e peças responsivas.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-institucional-768x500') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Banner institucional – Compacto</h2>
          <p class="size">Tamanho original: 440 × 500</p>
          <p>Versão compacta para cards e espaços menores. Na página: alterne escuro ou claro (card sobre fundo claro), use presets de tamanho e exporte sem distorção.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-institucional-440x500') }}">Abrir e exportar</a>
        </div>
      </li>
    </ul>

    <h2 class="section-title">Thumbnails Morning Call</h2>
    <ul class="list">
      <li class="card">
        <div class="card-info">
          <h2>Morning Call 1 – Thumbnail diário</h2>
          <p class="size">Tamanho original: 1280 × 720 (16:9)</p>
          <p>Badge “Edição diária”, título Morning Call, logo. Para vídeos e redes.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/morning-call-01') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Morning Call 2 – Thumbnail diário (alternativo)</h2>
          <p class="size">Tamanho original: 1280 × 720 (16:9)</p>
          <p>Faixa dourada no topo, logo no canto, “Morning Call” em destaque com “Call” em dourado.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/morning-call-02') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Morning Call 3 – Padrão vertical</h2>
          <p class="size">Tamanho original: 790 × 1080 (retrato)</p>
          <p>Layout padrão para Morning Call em formato retrato, com textos editáveis e exportação em PNG.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/morning-call-03') }}">Abrir e exportar</a>
        </div>
      </li>
    </ul>

    <h2 class="section-title">Conteúdos educacionais</h2>
    <ul class="list">
      <li class="card">
        <div class="card-info">
          <h2>Conteúdo educacional 1 – Faixa horizontal</h2>
          <p class="size">Tamanho nativo: 1590 × 500</p>
          <p>Layout em faixa com texto à esquerda, logo à direita e rodapé com assinatura. Exportação em PNG em outros formatos pelo painel.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/conteudo-educacional-01') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Conteúdo educacional 2 – IRPFM</h2>
          <p class="size">Tamanho original: 790 × 1080 (retrato)</p>
          <p>Versão com tema “Transformando impostos em impacto social – IRPFM”.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/conteudo-educacional-02') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Conteúdo educacional 3 – Imposto de dividendos</h2>
          <p class="size">Tamanho original: 790 × 1080 (retrato)</p>
          <p>Versão com tema “Tudo sobre o imposto de dividendos”.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/conteudo-educacional-03') }}">Abrir e exportar</a>
        </div>
      </li>
    </ul>

    <h2 class="section-title">Eventos (ao vivo)</h2>
    <ul class="list">
      <li class="card">
        <div class="card-info">
          <h2>Live – Fundo Verde Cedro II</h2>
          <p class="size">Tamanho original: 790 × 1080 (retrato)</p>
          <p>Template com tema do live: gestor Luiz Parreiras, CDI + 2,30% e espaços para dúvidas.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/evento-verde-cedro-ii-01') }}">Abrir e exportar</a>
        </div>
      </li>
    </ul>
  </div>
  <script>
    (function () {
      var buttons = Array.from(document.querySelectorAll('.filter-btn'));
      var cards = Array.from(document.querySelectorAll('.card'));
      var shownCount = document.getElementById('shownCount');
      var totalCount = document.getElementById('totalCount');

      function getCardSizeKey(card) {
        var sizeEl = card.querySelector('.size');
        if (!sizeEl) return 'unknown';
        var text = sizeEl.textContent || '';
        var match = text.match(/(\d+)\s*[×x]\s*(\d+)/i);
        if (!match) return 'unknown';
        return match[1] + 'x' + match[2];
      }

      cards.forEach(function (card) {
        card.dataset.sizeKey = getCardSizeKey(card);
      });

      function updateCounts() {
        var shown = cards.filter(function (card) {
          return !card.classList.contains('hidden');
        }).length;
        shownCount.textContent = String(shown);
      }

      function setPressed(sizeKey) {
        buttons.forEach(function (btn) {
          btn.setAttribute('aria-pressed', btn.dataset.size === sizeKey ? 'true' : 'false');
        });
      }

      function applyFilter(sizeKey) {
        cards.forEach(function (card) {
          var show = sizeKey === 'all' ? true : card.dataset.sizeKey === sizeKey;
          card.classList.toggle('hidden', !show);
        });
        setPressed(sizeKey);
        updateCounts();
      }

      totalCount.textContent = String(cards.length);
      applyFilter('all');

      buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
          applyFilter(btn.dataset.size);
        });
      });
    })();
  </script>
</body>
</html>
