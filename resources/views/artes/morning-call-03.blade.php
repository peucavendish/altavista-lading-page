<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=790, height=1080">
  <title>Alta Vista – Morning Call padrão 790x1080</title>
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
      width: 790px;
      height: 1080px;
      position: relative;
      overflow: hidden;
    }
    .banner {
      width: 790px;
      height: 1080px;
      background: radial-gradient(circle at 10% 10%, #183359 0%, #0f2847 35%, #0a1628 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      overflow: hidden;
      padding: 96px 72px;
    }
    .banner::before {
      content: '';
      position: absolute;
      left: -80px;
      top: -60px;
      width: 240px;
      height: 240px;
      border-radius: 50%;
      border: 1px solid rgba(201, 162, 39, 0.35);
    }
    .banner::after {
      content: '';
      position: absolute;
      right: -60px;
      bottom: -80px;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      border: 1px solid rgba(201, 162, 39, 0.3);
    }
    .day-tag {
      color: #c9a227;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-size: 16px;
      font-weight: 500;
      margin-bottom: 18px;
    }
    .title {
      font-family: 'Lora', Georgia, serif;
      font-size: 92px;
      line-height: 0.95;
      color: #edf2f7;
      margin-bottom: 28px;
      text-transform: uppercase;
    }
    .title span {
      color: #c9a227;
      display: block;
    }
    .subtitle {
      color: #cbd5e0;
      font-size: 24px;
      line-height: 1.35;
      margin-bottom: 60px;
      max-width: 520px;
    }
    .footer {
      position: absolute;
      left: 48px;
      right: 48px;
      bottom: 56px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 26px;
      display: flex;
      justify-content: center;
    }
    .logo {
      max-width: 360px;
      width: 100%;
      height: auto;
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
    <p class="hint">Clique nos textos para editar. Padrão: 790 x 1080.</p>
    <div class="row">
      <input type="number" id="export-w" value="790" min="400" max="2000" placeholder="Largura">
      <span>x</span>
      <input type="number" id="export-h" value="1080" min="400" max="2000" placeholder="Altura">
    </div>
    <div class="row">
      <select id="export-preset" style="flex:1; padding:6px 8px; border-radius:6px; border:1px solid #2d3748; background:#1a202c; color:#edf2f7; font-size:12px;">
        <option value="">Tamanho rápido...</option>
        <option value="790x1080">Padrão 790 x 1080</option>
        <option value="1080x1080">Feed 1080 x 1080</option>
        <option value="1080x1350">Feed retrato 1080 x 1350</option>
        <option value="1080x1920">Stories 1080 x 1920</option>
      </select>
    </div>
    <button type="button" id="restore-btn" style="margin-bottom:6px; width:100%; padding:6px; font-size:11px; background:transparent; color:#a0aec0; border:1px solid #2d3748; border-radius:6px; cursor:pointer;">Restaurar textos padrão</button>
    <button type="button" id="export-btn">Baixar PNG</button>
  </div>

  <div class="banner-wrap" id="banner-wrap">
    <div class="banner">
      <p class="day-tag" contenteditable="true" data-default="EDIÇÃO DIÁRIA">EDIÇÃO DIÁRIA</p>
      <h1 class="title" contenteditable="true" data-default-html="MORNING <span>CALL</span>">MORNING <span>CALL</span></h1>
      <p class="subtitle" contenteditable="true" data-default="Panorama de mercados, câmbio, juros e oportunidades do dia.">Panorama de mercados, câmbio, juros e oportunidades do dia.</p>
      <div class="footer">
        <img class="logo" src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" />
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
      var origW = 790, origH = 1080;

      if (restoreBtn) {
        restoreBtn.addEventListener('click', function () {
          banner.querySelectorAll('[contenteditable="true"]').forEach(function (el) {
            if (el.hasAttribute('data-default-html')) el.innerHTML = el.getAttribute('data-default-html');
            else if (el.hasAttribute('data-default')) el.textContent = el.getAttribute('data-default');
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

      function updatePreview() {
        var w = parseInt(inputW.value, 10) || origW;
        var h = parseInt(inputH.value, 10) || origH;
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
        var w = wh.w;
        var h = wh.h;
        btn.disabled = true;
        btn.textContent = 'Gerando...';
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
          link.download = 'morning-call-03-' + w + 'x' + h + '.png';
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
