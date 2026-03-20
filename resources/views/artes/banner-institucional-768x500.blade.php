<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=768, height=500">
  <title>Alta Vista – Banner institucional 768x500</title>
  <style>
    @font-face { font-family: 'GT America'; src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype'); font-weight: 400; font-style: normal; }
    @font-face { font-family: 'GT America'; src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Medium.ttf') format('truetype'); font-weight: 500; font-style: normal; }
    @font-face { font-family: 'GT America'; src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Light.ttf') format('truetype'); font-weight: 300; font-style: normal; }
    @font-face { font-family: 'Lora'; src: url('/fonts/Lora-VariableFont_wght/static/Lora-Regular.ttf') format('truetype'); font-weight: 400; font-style: normal; }
    @font-face { font-family: 'Lora'; src: url('/fonts/Lora-VariableFont_wght/static/Lora-Bold.ttf') format('truetype'); font-weight: 700; font-style: normal; }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #1a1a1a; font-family: 'GT America', Arial, sans-serif; }
    .banner-wrap { width: 768px; height: 500px; overflow: hidden; }
    .banner {
      width: 768px; height: 500px; overflow: hidden; position: relative;
      background: #0a1628;
      padding: 46px 42px;
      display: flex; flex-direction: column; justify-content: space-between;
    }
    .top-line { width: 120px; height: 3px; background: #c9a227; margin-bottom: 16px; }
    .label { color: #c9a227; text-transform: uppercase; letter-spacing: 1.4px; font-size: 12px; margin-bottom: 10px; }
    .title { font-family: 'Lora', Georgia, serif; font-size: 44px; color: #edf2f7; line-height: 1.03; margin-bottom: 10px; max-width: 620px; }
    .subtitle { font-size: 19px; color: #a0aec0; max-width: 560px; line-height: 1.28; }
    .footer { display: flex; justify-content: space-between; align-items: center; gap: 16px; }
    .footer-note { font-size: 11px; color: #a0aec0; text-transform: uppercase; letter-spacing: 1px; }
    .logo { width: 250px; max-width: 100%; height: auto; }
    .export-panel { position: fixed; bottom: 16px; right: 16px; background: #0a1628; border: 1px solid #c9a227; border-radius: 12px; padding: 14px 18px; color: #edf2f7; font-size: 13px; z-index: 9999; }
    .export-panel .hint { font-size: 11px; color: #718096; margin-bottom: 8px; }
    .export-panel .row { display: flex; gap: 8px; align-items: center; margin-bottom: 10px; }
    .export-panel input[type="number"] { width: 72px; padding: 6px 8px; border: 1px solid #2d3748; border-radius: 6px; background: #1a202c; color: #edf2f7; font-size: 13px; }
    .export-panel button { width: 100%; padding: 8px 14px; background: #c9a227; color: #0a1628; border: none; border-radius: 8px; font-weight: bold; font-size: 12px; text-transform: uppercase; cursor: pointer; }
    [contenteditable="true"] { cursor: text; }
    [contenteditable="true"]:focus { outline: 1px dashed rgba(201,162,39,0.5); outline-offset: 2px; }
  </style>
</head>
<body>
  <div class="export-panel">
    <label>Exportar imagem</label>
    <p class="hint">Banner institucional padrão 768 x 500.</p>
    <div class="row">
      <input type="number" id="export-w" value="768" min="400" max="5000"><span>x</span><input type="number" id="export-h" value="500" min="400" max="5000">
    </div>
    <button type="button" id="restore-btn" style="margin-bottom:6px; background:transparent; color:#a0aec0; border:1px solid #2d3748;">Restaurar textos padrão</button>
    <button type="button" id="export-btn">Baixar PNG</button>
  </div>
  <div class="banner-wrap" id="banner-wrap">
    <div class="banner">
      <div>
        <div class="top-line"></div>
        <p class="label" contenteditable="true" data-default="Alta Vista Investimentos">Alta Vista Investimentos</p>
        <h1 class="title" contenteditable="true" data-default="Investir com estratégia para objetivos reais">Investir com estratégia para objetivos reais</h1>
        <p class="subtitle" contenteditable="true" data-default="Acompanhamento próximo e alocação inteligente para preservar e expandir patrimônio.">Acompanhamento próximo e alocação inteligente para preservar e expandir patrimônio.</p>
      </div>
      <div class="footer">
        <p class="footer-note" contenteditable="true" data-default="Assessoria de investimentos">Assessoria de investimentos</p>
        <img class="logo" src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos">
      </div>
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
      var origW = 768, origH = 500;
      function restoreTexts() { banner.querySelectorAll('[contenteditable="true"]').forEach(function (el) { el.textContent = el.getAttribute('data-default') || el.textContent; }); }
      function getWh() {
        var w = Math.max(400, Math.min(5000, parseInt(inputW.value, 10) || origW));
        var h = Math.max(400, Math.min(5000, parseInt(inputH.value, 10) || origH));
        inputW.value = w; inputH.value = h; return { w: w, h: h };
      }
      function updatePreview() {
        var wh = getWh();
        wrap.style.width = wh.w + 'px'; wrap.style.height = wh.h + 'px';
        banner.style.width = origW + 'px'; banner.style.height = origH + 'px';
        banner.style.transform = 'scale(' + (wh.w / origW) + ',' + (wh.h / origH) + ')';
        banner.style.transformOrigin = '0 0';
      }
      if (restoreBtn) restoreBtn.addEventListener('click', restoreTexts);
      inputW.addEventListener('input', updatePreview);
      inputH.addEventListener('input', updatePreview);
      updatePreview();
      btn.addEventListener('click', function () {
        var wh = getWh();
        btn.disabled = true; btn.textContent = 'Gerando...';
        html2canvas(wrap, { width: wh.w, height: wh.h, scale: 1, useCORS: true, allowTaint: true, logging: false })
          .then(function (canvas) {
            var link = document.createElement('a');
            link.download = 'banner-institucional-768x500.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
          })
          .finally(function () { btn.disabled = false; btn.textContent = 'Baixar PNG'; updatePreview(); });
      });
    })();
  </script>
</body>
</html>
