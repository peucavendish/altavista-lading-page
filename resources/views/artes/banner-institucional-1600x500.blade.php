<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1600, height=500">
  <title>Alta Vista – Banner institucional 1600x500</title>
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
      font-family: 'GT America';
      src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Light.ttf') format('truetype');
      font-weight: 300;
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
    .banner-wrap { width: 1600px; height: 500px; overflow: hidden; }
    .banner {
      width: 1600px;
      height: 500px;
      background: #0a1628;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 54px 86px;
      gap: 36px;
      overflow: hidden;
    }
    .banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 92% 12%, rgba(201,162,39,0.2), transparent 36%);
      pointer-events: none;
    }
    .content { position: relative; z-index: 2; max-width: 900px; }
    .label {
      color: #c9a227;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-size: 14px;
      margin-bottom: 12px;
    }
    .title {
      font-family: 'Lora', Georgia, serif;
      color: #edf2f7;
      font-size: 62px;
      line-height: 1.02;
      margin-bottom: 12px;
      max-width: 840px;
    }
    .subtitle {
      color: #a0aec0;
      font-size: 24px;
      line-height: 1.25;
      max-width: 760px;
    }
    .logo {
      position: relative;
      z-index: 2;
      width: 380px;
      max-width: 100%;
      height: auto;
      flex-shrink: 0;
    }
    .export-panel {
      position: fixed;
      bottom: 16px;
      right: 16px;
      background: #0a1628;
      border: 1px solid #c9a227;
      border-radius: 12px;
      padding: 14px 18px;
      color: #edf2f7;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
      z-index: 9999;
      font-size: 13px;
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
      text-transform: uppercase; cursor: pointer;
    }
    .export-panel button:hover { background: #d4af37; }
    .export-panel button:disabled { opacity: 0.6; cursor: not-allowed; }
    .export-panel .hint { font-size: 11px; color: #718096; margin-bottom: 8px; }
    [contenteditable="true"] { cursor: text; }
    [contenteditable="true"]:focus { outline: 1px dashed rgba(201,162,39,0.5); outline-offset: 2px; }
  </style>
</head>
<body>
  <div class="export-panel">
    <label>Exportar imagem</label>
    <p class="hint">Banner institucional padrão 1600 x 500.</p>
    <div class="row">
      <input type="number" id="export-w" value="1600" min="400" max="5000">
      <span>x</span>
      <input type="number" id="export-h" value="500" min="400" max="5000">
    </div>
    <button type="button" id="restore-btn" style="margin-bottom:6px; background:transparent; color:#a0aec0; border:1px solid #2d3748;">Restaurar textos padrão</button>
    <button type="button" id="export-btn">Baixar PNG</button>
  </div>
  <div class="banner-wrap" id="banner-wrap">
    <div class="banner">
      <div class="content">
        <p class="label" contenteditable="true" data-default="Alta Vista Investimentos">Alta Vista Investimentos</p>
        <h1 class="title" contenteditable="true" data-default="Assessoria de investimentos com visão patrimonial">Assessoria de investimentos com visão patrimonial</h1>
        <p class="subtitle" contenteditable="true" data-default="Estratégia, transparência e acompanhamento especializado para cada perfil.">Estratégia, transparência e acompanhamento especializado para cada perfil.</p>
      </div>
      <img class="logo" src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos">
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script>
    (function () {
      var wrap = document.getElementById('banner-wrap');
      var banner = document.querySelector('.banner');
      var btn = document.getElementById('export-btn');
      var restoreBtn = document.getElementById('restore-btn');
      var inputW = document.getElementById('export-w');
      var inputH = document.getElementById('export-h');
      var origW = 1600, origH = 500;

      function restoreTexts() {
        banner.querySelectorAll('[contenteditable="true"]').forEach(function (el) {
          if (el.hasAttribute('data-default')) el.textContent = el.getAttribute('data-default');
        });
      }
      function getWh() {
        var w = Math.max(400, Math.min(5000, parseInt(inputW.value, 10) || origW));
        var h = Math.max(400, Math.min(5000, parseInt(inputH.value, 10) || origH));
        inputW.value = w; inputH.value = h;
        return { w: w, h: h };
      }
      function updatePreview() {
        var wh = getWh();
        wrap.style.width = wh.w + 'px';
        wrap.style.height = wh.h + 'px';
        banner.style.width = origW + 'px';
        banner.style.height = origH + 'px';
        banner.style.transform = 'scale(' + (wh.w / origW) + ',' + (wh.h / origH) + ')';
        banner.style.transformOrigin = '0 0';
      }
      if (restoreBtn) restoreBtn.addEventListener('click', restoreTexts);
      inputW.addEventListener('input', updatePreview);
      inputH.addEventListener('input', updatePreview);
      updatePreview();

      btn.addEventListener('click', function () {
        var wh = getWh();
        btn.disabled = true;
        btn.textContent = 'Gerando...';
        html2canvas(wrap, { width: wh.w, height: wh.h, scale: 1, useCORS: true, allowTaint: true, logging: false })
          .then(function (canvas) {
            var link = document.createElement('a');
            link.download = 'banner-institucional-1600x500.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
          })
          .finally(function () {
            btn.disabled = false;
            btn.textContent = 'Baixar PNG';
            updatePreview();
          });
      });
    })();
  </script>
</body>
</html>
