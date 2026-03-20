<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=790, height=1080">
  <title>Alta Vista – Conteúdo educacional 790x1080</title>
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
      position: relative;
      overflow: hidden;
      background: linear-gradient(160deg, #0a1628 0%, #15395f 50%, #0a1628 100%);
      padding: 78px 64px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .top-accent {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 8px;
      background: #c9a227;
    }
    .content {
      position: relative;
      z-index: 2;
    }
    .label {
      display: inline-block;
      background: rgba(201, 162, 39, 0.18);
      border: 1px solid rgba(201, 162, 39, 0.55);
      color: #f7e3a4;
      text-transform: uppercase;
      letter-spacing: 1.2px;
      font-size: 14px;
      padding: 8px 14px;
      border-radius: 999px;
      margin-bottom: 28px;
    }
    .title {
      font-family: 'Lora', Georgia, serif;
      font-size: 66px;
      line-height: 1.02;
      color: #edf2f7;
      margin-bottom: 20px;
      max-width: 640px;
    }
    .description {
      font-size: 26px;
      line-height: 1.35;
      color: #d7e1eb;
      max-width: 620px;
    }
    .footer {
      z-index: 2;
      border-top: 1px solid rgba(237, 242, 247, 0.28);
      padding-top: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 18px;
    }
    .footer-note {
      color: #c9a227;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 13px;
      max-width: 320px;
    }
    .logo {
      max-width: 280px;
      width: 100%;
      height: auto;
    }
    .orb {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 162, 39, 0.22) 0%, rgba(201, 162, 39, 0) 70%);
      pointer-events: none;
    }
    .orb.one {
      width: 280px;
      height: 280px;
      top: 120px;
      right: -70px;
    }
    .orb.two {
      width: 240px;
      height: 240px;
      bottom: 180px;
      left: -90px;
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
      <div class="top-accent"></div>
      <div class="orb one"></div>
      <div class="orb two"></div>
      <div class="content">
        <p class="label" contenteditable="true" data-default="Conteúdo educacional">Conteúdo educacional</p>
        <h1 class="title" contenteditable="true" data-default="Tudo sobre o imposto de dividendos">Tudo sobre o imposto de dividendos</h1>
        <p class="description" contenteditable="true" data-default="Entenda regras, impactos na carteira e como se preparar para diferentes cenários de tributação.">Entenda regras, impactos na carteira e como se preparar para diferentes cenários de tributação.</p>
      </div>
      <div class="footer">
        <p class="footer-note" contenteditable="true" data-default="Alta Vista Investimentos">Alta Vista Investimentos</p>
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
          link.download = 'conteudo-educacional-03-' + w + 'x' + h + '.png';
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
