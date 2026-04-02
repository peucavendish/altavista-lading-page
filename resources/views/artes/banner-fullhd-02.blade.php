<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1920, height=1080">
  <title>Alta Vista – Banner institucional 2 claro (Full HD 1920×1080)</title>
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
    html { overflow-x: hidden; }
    body {
      min-height: 100vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #1a1a1a;
      font-family: 'GT America', Arial, Helvetica, sans-serif;
    }
    .banner-wrap {
      width: 1920px;
      height: 1080px;
      position: relative;
      overflow: hidden;
      background-color: #f7fafc;
      flex-shrink: 0;
    }
    .banner {
      width: 1920px;
      height: 1080px;
      position: absolute;
      left: 0;
      top: 0;
      background-color: #f7fafc;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 80px 60px;
    }
    .card {
      width: 100%;
      max-width: 820px;
      background-color: #0a1628;
      border-radius: 24px;
      padding: 72px 64px;
      text-align: center;
      box-shadow: 0 24px 48px rgba(10, 22, 40, 0.15);
    }
    .logo {
      max-width: 360px;
      width: 100%;
      height: auto;
      margin: 0 auto 40px;
      display: block;
      object-fit: contain;
    }
    .badge {
      display: inline-block;
      background-color: #faf6eb;
      color: #c9a227;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 8px 20px;
      border-radius: 999px;
      margin-bottom: 24px;
      font-family: 'GT America', Arial, sans-serif;
    }
    .frase {
      font-size: 26px;
      line-height: 1.4;
      color: #edf2f7;
      font-weight: 700;
      margin-bottom: 12px;
      font-family: 'Lora', Georgia, serif;
    }
    .subtitulo {
      font-size: 16px;
      line-height: 1.5;
      color: #a0aec0;
      font-family: 'GT America', Arial, sans-serif;
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
    <p class="hint">Clique nos textos do banner para editar.</p>
    <div class="row">
      <input type="number" id="export-w" value="1920" min="400" max="5000" placeholder="Largura">
      <span>×</span>
      <input type="number" id="export-h" value="1080" min="400" max="5000" placeholder="Altura">
    </div>
    <div class="row">
      <select id="export-preset" style="flex:1; padding:6px 8px; border-radius:6px; border:1px solid #2d3748; background:#1a202c; color:#edf2f7; font-size:12px;">
        <option value="">Tamanho rápido…</option>
        <option value="1920x1080" selected>Full HD 1920 × 1080 (nativo)</option>
        <option value="1080x1080">Quadrado 1080 × 1080</option>
        <option value="1080x1350">Vertical 1080 × 1350</option>
        <option value="2560x1440">2K 2560 × 1440</option>
        <option value="3840x2160">4K 3840 × 2160</option>
      </select>
    </div>
    <button type="button" id="restore-btn" style="margin-bottom:6px; width:100%; padding:6px; font-size:11px; background:transparent; color:#a0aec0; border:1px solid #2d3748; border-radius:6px; cursor:pointer;">Restaurar textos padrão</button>
    <button type="button" id="export-btn">Baixar PNG</button>
  </div>
  <div class="banner-wrap" id="banner-wrap">
  <div class="banner">
    <div class="card">
      <img
        class="logo"
        src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png"
        alt="Alta Vista Investimentos"
      />
      <span class="badge" contenteditable="true" data-default="Alta Vista Investimentos">Alta Vista Investimentos</span>
      <p class="frase" contenteditable="true" data-default="Assessoria de Investimentos">Assessoria de Investimentos</p>
      <p class="subtitulo" contenteditable="true" data-default="Wealth Management e planejamento patrimonial">Wealth Management e planejamento patrimonial</p>
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
      var origW = 1920, origH = 1080;

      if (restoreBtn) {
        restoreBtn.addEventListener('click', function () {
          banner.querySelectorAll('[contenteditable="true"][data-default]').forEach(function (el) {
            el.textContent = el.getAttribute('data-default');
          });
        });
      }
      function getWh() {
        var w = parseInt(inputW.value, 10) || origW;
        var h = parseInt(inputH.value, 10) || origH;
        w = Math.max(400, Math.min(5000, w));
        h = Math.max(400, Math.min(5000, h));
        inputW.value = w;
        inputH.value = h;
        return { w: w, h: h };
      }

      function applyLayout(w, h) {
        w = Math.max(400, Math.min(5000, w));
        h = Math.max(400, Math.min(5000, h));
        wrap.style.width = w + 'px';
        wrap.style.height = h + 'px';
        var s = Math.min(w / origW, h / origH);
        var bw = origW * s;
        var bh = origH * s;
        var tx = Math.round((w - bw) / 2);
        var ty = Math.round((h - bh) / 2);
        banner.style.position = 'absolute';
        banner.style.left = tx + 'px';
        banner.style.top = ty + 'px';
        banner.style.width = origW + 'px';
        banner.style.height = origH + 'px';
        banner.style.transform = 'scale(' + s + ')';
        banner.style.transformOrigin = '0 0';
      }

      function updatePreview() {
        var w = parseInt(inputW.value, 10) || origW;
        var h = parseInt(inputH.value, 10) || origH;
        applyLayout(w, h);
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
        applyLayout(w, h);
        html2canvas(wrap, {
          width: w,
          height: h,
          scale: 1,
          useCORS: true,
          allowTaint: true,
          logging: false
        }).then(function (canvas) {
          var link = document.createElement('a');
          link.download = 'banner-institucional-fullhd-02-claro-' + w + 'x' + h + '.png';
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
