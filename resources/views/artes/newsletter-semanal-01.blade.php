<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1200, height=630">
  <title>Alta Vista – Ponto de Vista (newsletter semanal)</title>
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
    @font-face {
      font-family: 'Lora';
      src: url('/fonts/Lora-VariableFont_wght/static/Lora-Regular.ttf') format('truetype');
      font-weight: 400;
      font-style: normal;
    }
    @font-face {
      font-family: 'Lora';
      src: url('/fonts/Lora-VariableFont_wght/static/Lora-Bold.ttf') format('truetype');
      font-weight: 700;
      font-style: normal;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #1a1a1a;
      font-family: 'GT America', Arial, Helvetica, sans-serif;
    }
    .banner-wrap {
      width: 1200px;
      height: 630px;
      position: relative;
      overflow: hidden;
    }
    .banner {
      width: 1200px;
      height: 630px;
      background-color: #0a1628;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 48px 72px 56px;
    }
    .banner::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 5px;
      background: linear-gradient(180deg, #c9a227, #8b6914);
    }
    .banner::after {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(105deg, rgba(201, 162, 39, 0.04) 0%, transparent 42%),
        repeating-linear-gradient(-12deg, transparent, transparent 48px, rgba(237, 242, 247, 0.03) 48px, rgba(237, 242, 247, 0.03) 49px);
      pointer-events: none;
    }
    .chart-motif {
      position: absolute;
      right: 56px;
      bottom: 64px;
      width: 200px;
      height: 120px;
      opacity: 0.22;
      pointer-events: none;
    }
    .chart-motif span {
      display: block;
      height: 6px;
      margin-bottom: 14px;
      border-radius: 3px;
      background: linear-gradient(90deg, #c9a227, rgba(201, 162, 39, 0.2));
    }
    .chart-motif span:nth-child(1) { width: 72%; }
    .chart-motif span:nth-child(2) { width: 100%; }
    .chart-motif span:nth-child(3) { width: 55%; }
    .chart-motif span:nth-child(4) { width: 88%; }
    .inner {
      position: relative;
      z-index: 1;
      text-align: center;
      max-width: 920px;
    }
    .top-line {
      width: 120px;
      height: 3px;
      background: linear-gradient(90deg, transparent, #c9a227, transparent);
      margin: 0 auto 28px;
      border-radius: 2px;
    }
    .badge {
      display: inline-block;
      background-color: #faf6eb;
      color: #c9a227;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 7px 18px;
      border-radius: 999px;
      margin-bottom: 22px;
      font-family: 'GT America', Arial, sans-serif;
    }
    .title {
      font-size: 56px;
      font-weight: 700;
      line-height: 1.12;
      color: #f7fafc;
      margin-bottom: 14px;
      font-family: 'Lora', Georgia, serif;
    }
    .title .accent {
      color: #c9a227;
    }
    .subtitle {
      font-size: 17px;
      font-weight: 400;
      letter-spacing: 0.6px;
      color: #cbd5e1;
      margin-bottom: 36px;
      line-height: 1.45;
    }
    .logo {
      max-width: 280px;
      width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
      opacity: 0.96;
    }
    .export-panel {
      position: fixed;
      bottom: 16px;
      right: 16px;
      background: #0a1628;
      border: 1px solid #c9a227;
      border-radius: 12px;
      padding: 14px 18px;
      font-family: 'GT America', Arial, sans-serif;
      font-size: 13px;
      color: #edf2f7;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
      z-index: 9999;
      max-width: 280px;
    }
    .export-panel label { display: block; margin-bottom: 4px; color: #a0aec0; }
    .export-panel .row { display: flex; gap: 8px; align-items: center; margin-bottom: 10px; }
    .export-panel input[type="number"] {
      width: 72px; padding: 6px 8px; border: 1px solid #2d3748; border-radius: 6px;
      background: #1a202c; color: #edf2f7; font-size: 13px;
    }
    .export-panel button {
      width: 100%; padding: 8px 14px; background: #c9a227; color: #0a1628;
      border: none; border-radius: 8px; font-weight: bold; font-size: 12px;
      text-transform: uppercase; letter-spacing: 0.5px; cursor: pointer;
    }
    .export-panel button:hover { background: #d4af37; }
    .export-panel button:disabled { opacity: 0.6; cursor: not-allowed; }
    [contenteditable="true"] { cursor: text; }
    [contenteditable="true"]:focus { outline: 1px dashed rgba(201,162,39,0.5); outline-offset: 2px; }
    .export-panel .hint { font-size: 11px; color: #718096; margin-bottom: 8px; }
  </style>
</head>
<body>
  <div class="export-panel">
    <label>Exportar imagem</label>
    <p class="hint">Arte para Ponto de Vista (newsletter semanal). Nativo 1200 × 630 para links e redes.</p>
    <div class="row">
      <input type="number" id="export-w" value="1200" min="400" max="5000" placeholder="Largura">
      <span>×</span>
      <input type="number" id="export-h" value="630" min="400" max="5000" placeholder="Altura">
    </div>
    <div class="row">
      <select id="export-preset" style="flex:1; padding:6px 8px; border-radius:6px; border:1px solid #2d3748; background:#1a202c; color:#edf2f7; font-size:12px;">
        <option value="">Tamanho rápido…</option>
        <option value="1200x630" selected>OG 1200 × 630</option>
        <option value="1920x1080">Full HD 1920 × 1080</option>
        <option value="1280x720">HD 1280 × 720</option>
        <option value="1080x1080">Quadrado 1080 × 1080</option>
      </select>
    </div>
    <button type="button" id="restore-btn" style="margin-bottom:6px; width:100%; padding:6px; font-size:11px; background:transparent; color:#a0aec0; border:1px solid #2d3748; border-radius:6px; cursor:pointer;">Restaurar textos padrão</button>
    <button type="button" id="export-btn">Baixar PNG</button>
  </div>
  <div class="banner-wrap" id="banner-wrap">
    <div class="banner">
      <div class="chart-motif" aria-hidden="true">
        <span></span><span></span><span></span><span></span>
      </div>
      <div class="inner">
        <div class="top-line" aria-hidden="true"></div>
        <span class="badge" contenteditable="true" data-default="Newsletter semanal">Newsletter semanal</span>
        <h1 class="title" contenteditable="true" data-default-html='Ponto de <span class="accent">Vista</span>'>Ponto de <span class="accent">Vista</span></h1>
        <p class="subtitle" contenteditable="true" data-default="A leitura da Alta Vista sobre os mercados · Guilherme Jung, economista-chefe">A leitura da Alta Vista sobre os mercados · Guilherme Jung, economista-chefe</p>
        <img
          class="logo"
          src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png"
          alt="Alta Vista Investimentos"
        />
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script>
    (function () {
      var wrap = document.getElementById('banner-wrap');
      var banner = document.querySelector('.banner');
      var btn = document.getElementById('export-btn');
      var inputW = document.getElementById('export-w');
      var inputH = document.getElementById('export-h');
      var preset = document.getElementById('export-preset');
      var restoreBtn = document.getElementById('restore-btn');
      var origW = 1200, origH = 630;

      if (restoreBtn) {
        restoreBtn.addEventListener('click', function () {
          banner.querySelectorAll('[contenteditable="true"]').forEach(function (el) {
            if (el.hasAttribute('data-default-html')) el.innerHTML = el.getAttribute('data-default-html');
            else if (el.hasAttribute('data-default')) el.textContent = el.getAttribute('data-default');
          });
        });
      }
      function getWh() {
        var w = parseInt(inputW.value, 10) || 1200;
        var h = parseInt(inputH.value, 10) || 630;
        w = Math.max(400, Math.min(5000, w));
        h = Math.max(400, Math.min(5000, h));
        inputW.value = w;
        inputH.value = h;
        return { w: w, h: h };
      }
      function updatePreview() {
        var w = parseInt(inputW.value, 10) || 1200;
        var h = parseInt(inputH.value, 10) || 630;
        w = Math.max(400, Math.min(5000, w));
        h = Math.max(400, Math.min(5000, h));
        wrap.style.width = w + 'px';
        wrap.style.height = h + 'px';
        banner.style.width = origW + 'px';
        banner.style.height = origH + 'px';
        banner.style.transform = 'scale(' + (w / origW) + ',' + (h / origH) + ')';
        banner.style.transformOrigin = '0 0';
      }
      if (preset) {
        preset.addEventListener('change', function () {
          if (!preset.value) return;
          var parts = preset.value.split('x');
          if (parts.length === 2) {
            inputW.value = parseInt(parts[0], 10) || inputW.value;
            inputH.value = parseInt(parts[1], 10) || inputH.value;
          }
          updatePreview();
        });
      }
      inputW.addEventListener('input', updatePreview);
      inputH.addEventListener('input', updatePreview);
      updatePreview();
      function restoreAfterExport() {
        btn.disabled = false;
        btn.textContent = 'Baixar PNG';
        updatePreview();
      }
      btn.addEventListener('click', function () {
        var wh = getWh();
        var w = wh.w, h = wh.h;
        btn.disabled = true;
        btn.textContent = 'Gerando…';
        wrap.style.width = w + 'px';
        wrap.style.height = h + 'px';
        banner.style.width = origW + 'px';
        banner.style.height = origH + 'px';
        banner.style.transform = 'scale(' + (w / origW) + ',' + (h / origH) + ')';
        banner.style.transformOrigin = '0 0';
        html2canvas(wrap, {
          width: w,
          height: h,
          scale: 1,
          useCORS: true,
          allowTaint: true,
          logging: false
        }).then(function (canvas) {
          var link = document.createElement('a');
          link.download = 'ponto-de-vista-newsletter-01-' + w + 'x' + h + '.png';
          link.href = canvas.toDataURL('image/png');
          link.click();
          restoreAfterExport();
        }).catch(function (err) {
          console.error(err);
          restoreAfterExport();
        });
      });
    })();
  </script>
</body>
</html>
