<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=440, height=500">
  <title>Alta Vista – Banner institucional 440×500</title>
  <style>
    @font-face { font-family: 'GT America'; src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype'); font-weight: 400; font-style: normal; }
    @font-face { font-family: 'GT America'; src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Medium.ttf') format('truetype'); font-weight: 500; font-style: normal; }
    @font-face { font-family: 'GT America'; src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Light.ttf') format('truetype'); font-weight: 300; font-style: normal; }
    @font-face { font-family: 'Lora'; src: url('/fonts/Lora-VariableFont_wght/static/Lora-Regular.ttf') format('truetype'); font-weight: 400; font-style: normal; }
    @font-face { font-family: 'Lora'; src: url('/fonts/Lora-VariableFont_wght/static/Lora-Bold.ttf') format('truetype'); font-weight: 700; font-style: normal; }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html { overflow-x: hidden; }
    body { min-height: 100vh; width: 100%; display: flex; align-items: center; justify-content: center; background: #1a1a1a; font-family: 'GT America', Arial, sans-serif; }
    .banner-wrap {
      width: 440px;
      height: 500px;
      position: relative;
      overflow: hidden;
      background-color: #0a1628;
      flex-shrink: 0;
    }
    .banner-wrap[data-theme="claro"] { background-color: #f7fafc; }
    .banner {
      width: 440px;
      height: 500px;
      position: absolute;
      left: 0;
      top: 0;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }
    .banner--escuro {
      background: #0a1628;
      border-top: 4px solid #c9a227;
      padding: 30px 28px;
      justify-content: space-between;
    }
    .banner--escuro .panel { display: contents; }
    .banner--claro {
      background: #f7fafc;
      padding: 14px;
      border-top: none;
      justify-content: stretch;
    }
    .banner--claro .panel {
      position: relative;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background: #0a1628;
      border-radius: 14px;
      padding: 22px 20px 20px;
      overflow: hidden;
      box-shadow: 0 10px 28px rgba(10, 22, 40, 0.14);
    }
    .banner--claro .panel::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: #c9a227;
    }
    .label { color: #c9a227; text-transform: uppercase; letter-spacing: 1.3px; font-size: 11px; margin-bottom: 8px; }
    .title { font-family: 'Lora', Georgia, serif; font-size: 34px; color: #edf2f7; line-height: 1.04; margin-bottom: 10px; font-weight: 700; }
    .subtitle { font-size: 16px; color: #a0aec0; line-height: 1.3; }
    .footer { border-top: 1px solid rgba(255,255,255,0.24); padding-top: 14px; }
    .banner--claro .footer { border-top-color: rgba(237, 242, 247, 0.28); }
    .logo { width: 210px; max-width: 100%; height: auto; margin-bottom: 10px; object-fit: contain; }
    .footer-note { font-size: 10px; color: #a0aec0; text-transform: uppercase; letter-spacing: 1px; }
    .export-panel { position: fixed; bottom: 16px; right: 16px; background: #0a1628; border: 1px solid #c9a227; border-radius: 12px; padding: 14px 18px; color: #edf2f7; font-size: 13px; z-index: 9999; max-width: 280px; }
    .export-panel label { display: block; margin-bottom: 4px; color: #a0aec0; font-size: 12px; }
    .export-panel .hint { font-size: 11px; color: #718096; margin-bottom: 8px; }
    .export-panel .row { display: flex; gap: 8px; align-items: center; margin-bottom: 10px; flex-wrap: wrap; }
    .export-panel input[type="number"] { width: 72px; padding: 6px 8px; border: 1px solid #2d3748; border-radius: 6px; background: #1a202c; color: #edf2f7; font-size: 13px; }
    .export-panel select { flex: 1; min-width: 0; padding: 6px 8px; border: 1px solid #2d3748; border-radius: 6px; background: #1a202c; color: #edf2f7; font-size: 12px; }
    .export-panel button.main { width: 100%; padding: 8px 14px; background: #c9a227; color: #0a1628; border: none; border-radius: 8px; font-weight: bold; font-size: 12px; text-transform: uppercase; cursor: pointer; }
    .export-panel button.secondary { width: 100%; margin-bottom: 6px; padding: 6px; font-size: 11px; background: transparent; color: #a0aec0; border: 1px solid #2d3748; border-radius: 6px; cursor: pointer; }
    .style-toggle { display: flex; gap: 6px; width: 100%; }
    .style-toggle button {
      flex: 1;
      padding: 8px 10px;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.4px;
      border-radius: 8px;
      cursor: pointer;
      border: 1px solid #2d3748;
      background: #1a202c;
      color: #a0aec0;
    }
    .style-toggle button[aria-pressed="true"] {
      border-color: #c9a227;
      background: rgba(201, 162, 39, 0.15);
      color: #f7e3a4;
    }
    [contenteditable="true"] { cursor: text; }
    [contenteditable="true"]:focus { outline: 1px dashed rgba(201,162,39,0.5); outline-offset: 2px; }
  </style>
</head>
<body>
  <div class="export-panel">
    <label>Estilo do banner</label>
    <div class="row style-toggle" role="group" aria-label="Estilo">
      <button type="button" id="style-escuro" aria-pressed="true">Escuro</button>
      <button type="button" id="style-claro" aria-pressed="false">Claro</button>
    </div>
    <label style="margin-top:4px;">Exportar imagem</label>
    <p class="hint">Padrão nativo 440 × 500. Outros tamanhos mantêm proporção (sem distorcer).</p>
    <div class="row">
      <input type="number" id="export-w" value="440" min="200" max="5000" aria-label="Largura"><span>x</span><input type="number" id="export-h" value="500" min="200" max="5000" aria-label="Altura">
    </div>
    <div class="row">
      <select id="export-preset" aria-label="Presets de tamanho">
        <option value="">Tamanho rápido…</option>
        <option value="440x500" selected>Compacto 440 × 500 (nativo)</option>
        <option value="880x1000">2× retina 880 × 1000</option>
        <option value="220x250">Mini 220 × 250</option>
        <option value="768x500">Faixa largura 768 × 500</option>
        <option value="330x375">Rede 330 × 375</option>
      </select>
    </div>
    <button type="button" class="secondary" id="restore-btn">Restaurar textos padrão</button>
    <button type="button" class="main" id="export-btn">Baixar PNG</button>
  </div>
  <div class="banner-wrap" id="banner-wrap" data-theme="escuro">
    <div class="banner banner--escuro" id="banner">
      <div class="panel">
        <div>
          <p class="label" contenteditable="true" data-default="Alta Vista Investimentos">Alta Vista Investimentos</p>
          <h1 class="title" contenteditable="true" data-default="Assessoria próxima para decisões importantes">Assessoria próxima para decisões importantes</h1>
          <p class="subtitle" contenteditable="true" data-default="Planejamento e investimentos alinhados aos seus objetivos.">Planejamento e investimentos alinhados aos seus objetivos.</p>
        </div>
        <div class="footer">
          <img class="logo" src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos">
          <p class="footer-note" contenteditable="true" data-default="Wealth Management">Wealth Management</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script>
    (function () {
      var wrap = document.getElementById('banner-wrap');
      var banner = document.getElementById('banner');
      var btn = document.getElementById('export-btn');
      var restoreBtn = document.getElementById('restore-btn');
      var inputW = document.getElementById('export-w');
      var inputH = document.getElementById('export-h');
      var preset = document.getElementById('export-preset');
      var btnEscuro = document.getElementById('style-escuro');
      var btnClaro = document.getElementById('style-claro');
      var origW = 440, origH = 500;
      var currentTheme = 'escuro';

      function setTheme(theme) {
        currentTheme = theme === 'claro' ? 'claro' : 'escuro';
        wrap.setAttribute('data-theme', currentTheme);
        banner.classList.remove('banner--escuro', 'banner--claro');
        banner.classList.add(currentTheme === 'claro' ? 'banner--claro' : 'banner--escuro');
        btnEscuro.setAttribute('aria-pressed', currentTheme === 'escuro' ? 'true' : 'false');
        btnClaro.setAttribute('aria-pressed', currentTheme === 'claro' ? 'true' : 'false');
        updatePreview();
      }

      function restoreTexts() {
        banner.querySelectorAll('[contenteditable="true"]').forEach(function (el) {
          el.textContent = el.getAttribute('data-default') || el.textContent;
        });
      }

      function getWh() {
        var w = Math.max(200, Math.min(5000, parseInt(inputW.value, 10) || origW));
        var h = Math.max(200, Math.min(5000, parseInt(inputH.value, 10) || origH));
        inputW.value = w;
        inputH.value = h;
        return { w: w, h: h };
      }

      function applyLayout(w, h) {
        w = Math.max(200, Math.min(5000, w));
        h = Math.max(200, Math.min(5000, h));
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

      btnEscuro.addEventListener('click', function () { setTheme('escuro'); });
      btnClaro.addEventListener('click', function () { setTheme('claro'); });

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

      if (restoreBtn) restoreBtn.addEventListener('click', restoreTexts);
      inputW.addEventListener('input', updatePreview);
      inputH.addEventListener('input', updatePreview);
      updatePreview();

      btn.addEventListener('click', function () {
        var wh = getWh();
        btn.disabled = true;
        btn.textContent = 'Gerando...';
        applyLayout(wh.w, wh.h);
        html2canvas(wrap, { width: wh.w, height: wh.h, scale: 1, useCORS: true, allowTaint: true, logging: false })
          .then(function (canvas) {
            var link = document.createElement('a');
            link.download = 'banner-institucional-440x500-' + currentTheme + '-' + wh.w + 'x' + wh.h + '.png';
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
