<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1920, height=1080">
  <title>Alta Vista – Banner institucional 1 escuro (Full HD 1920×1080)</title>
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
      background-color: #0a1628;
      flex-shrink: 0;
    }
    .banner {
      width: 1920px;
      height: 1080px;
      position: absolute;
      left: 0;
      top: 0;
      background-color: #0a1628;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 80px 60px;
      overflow: hidden;
    }
    .banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, transparent, #c9a227, transparent);
      opacity: 0.6;
    }
    .logo {
      max-width: 420px;
      width: 100%;
      height: auto;
      margin: 0 0 48px;
      display: block;
      object-fit: contain;
    }
    .tagline {
      font-size: 15px;
      font-weight: 500;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: #c9a227;
      margin-bottom: 16px;
      text-align: center;
      font-family: 'GT America', Arial, sans-serif;
    }
    .sublinhado {
      font-size: 22px;
      line-height: 1.4;
      color: #edf2f7;
      text-align: center;
      max-width: 520px;
      font-weight: 400;
      font-family: 'Lora', Georgia, serif;
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
      <input type="number" id="logo-scale" value="100" min="50" max="200" placeholder="Logo %"
             style="flex:1; padding:6px 8px; border-radius:6px; border:1px solid #2d3748; background:#1a202c; color:#edf2f7; font-size:12px;">
      <input type="number" id="logo-offset-x" value="0" min="-200" max="200" placeholder="X"
             style="width:64px; padding:6px 8px; border-radius:6px; border:1px solid #2d3748; background:#1a202c; color:#edf2f7; font-size:12px;">
      <input type="number" id="logo-offset-y" value="0" min="-200" max="200" placeholder="Y"
             style="width:64px; padding:6px 8px; border-radius:6px; border:1px solid #2d3748; background:#1a202c; color:#edf2f7; font-size:12px;">
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
    <img
      class="logo"
      src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png"
      alt="Alta Vista Investimentos"
    />
    <p class="tagline" contenteditable="true" data-default="Assessoria de Investimentos">Assessoria de Investimentos</p>
    <p class="sublinhado" contenteditable="true" data-default="Gestão de patrimônio com estratégia e transparência">Gestão de patrimônio com estratégia e transparência</p>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script>
    (function () {
      var wrap = document.getElementById('banner-wrap');
      var banner = document.querySelector('.banner');
      var logo = banner.querySelector('.logo');
      var btn = document.getElementById('export-btn');
      var inputW = document.getElementById('export-w');
      var inputH = document.getElementById('export-h');
      var preset = document.getElementById('export-preset');
      var logoScaleInput = document.getElementById('logo-scale');
      var logoOffsetXInput = document.getElementById('logo-offset-x');
      var logoOffsetYInput = document.getElementById('logo-offset-y');
      var restoreBtn = document.getElementById('restore-btn');
      var origW = 1920, origH = 1080;

      if (restoreBtn) {
        restoreBtn.addEventListener('click', function () {
          banner.querySelectorAll('[contenteditable="true"][data-default]').forEach(function (el) {
            el.textContent = el.getAttribute('data-default');
          });
          if (logoScaleInput) logoScaleInput.value = 100;
          if (logoOffsetXInput) logoOffsetXInput.value = 0;
          if (logoOffsetYInput) logoOffsetYInput.value = 0;
          applyLogoTransform();
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

      function applyLogoTransform() {
        if (!logo || !logoScaleInput || !logoOffsetXInput || !logoOffsetYInput) return;
        var s = parseInt(logoScaleInput.value, 10) || 100;
        var ox = parseInt(logoOffsetXInput.value, 10) || 0;
        var oy = parseInt(logoOffsetYInput.value, 10) || 0;
        s = Math.max(50, Math.min(200, s));
        ox = Math.max(-200, Math.min(200, ox));
        oy = Math.max(-200, Math.min(200, oy));
        logoScaleInput.value = s;
        logoOffsetXInput.value = ox;
        logoOffsetYInput.value = oy;
        var scale = s / 100;
        logo.style.transform = 'translate(' + ox + 'px,' + oy + 'px) scale(' + scale + ')';
        logo.style.transformOrigin = 'center center';
      }

      /** Escala uniforme (sem distorcer); barras laterais/superiores usam o fundo do .banner-wrap. */
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
        applyLogoTransform();
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
      if (logoScaleInput) {
        logoScaleInput.addEventListener('input', function () {
          applyLogoTransform();
          updatePreview();
        });
      }
      if (logoOffsetXInput) {
        logoOffsetXInput.addEventListener('input', function () {
          applyLogoTransform();
          updatePreview();
        });
      }
      if (logoOffsetYInput) {
        logoOffsetYInput.addEventListener('input', function () {
          applyLogoTransform();
          updatePreview();
        });
      }
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
          link.download = 'banner-institucional-fullhd-01-escuro-' + w + 'x' + h + '.png';
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
